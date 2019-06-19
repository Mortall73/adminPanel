import axios from 'axios';

export default (module) => {
    let $container = $(module);

    let searchUrl = $(module).attr('data-action-search');
    let groupsUrl = $(module).attr('data-action-groups');
    let usersUrl = $(module).attr('data-action-users');
    let postID = $(module).attr('data-post-id') || null;

    let $searchInput = $container.find('[data-search-input]');
    let $usersContainer = $container.find('[data-users-container]');
    let $checkAllBtn = $container.find('[data-check-all]');

    let init_groups = null;
    let init_users = [];

    let checked_users = [];

    let userLoadPromises = []; //массив для промисов users

    let timerID = null;

    init();

    $searchInput.on('input', (e) => {
        if (timerID != null) {
            clearTimeout(timerID);
        }
        timerID = setTimeout(() => {
            onInput(e.target.value);
        }, 500);

    });

    $checkAllBtn.on('click', (e) => {
        e.preventDefault();
        $(module).find('input[type="checkbox"]').prop('checked', true).prop('disabled', true);
        $(module).find('input[type="checkbox"]').trigger('change');
        $(module).find('[data-all]').prop('checked', true);
    });

    function init() {
       axios.get(groupsUrl, {
           params: {
               post_id: postID
           }
       }).then(response => {

           init_groups = response.data;
           renderGroups();

           init_groups.forEach(group => {

               userLoadPromises.push(new Promise((resolve) => { // заполняем массив промисов для каждой группы, что бы потом дождатся их загрузки и отрендерить (1)
                   axios({
                       url: usersUrl,
                       method: 'GET',
                       params: {
                           group: group.id,
                           post_id: postID
                       }
                   }).then(response => {
                       response.data.users.forEach(user => {

                           if (init_users.indexOf(user) == -1) { // пушим пользователей в общий массив для переиспользования (2)
                               init_users.push(user);
                           }

                       });

                       resolve();
                   }).catch(error => {
                       console.log(error);
                   });
               }));

           });

           Promise.all(userLoadPromises).then(value => { // *1 дожидаемся когда все пользователи загружены и рендерим
               init_users.forEach(user => {
                   renderUsers(user);
               })
           });
       }).catch(error => {
           console.log(error);
       })
    }



    function onInput(value) {
        axios({
            url: searchUrl,
            method: 'GET',
            params: {
                query: value || '',
                post_id: postID
            }
        }).then(response => {
            if (value == '' || value == ' ') {
                clearGroups();
                let users = init_users.slice(0); // *2 переиспользуем массив с изначальными пользователями при пустом запросе
                users.forEach(user => {
                    renderUsers(user);
                });
            } else {
                let users = response.data;
                clearGroups();
                users.forEach(user => {
                    renderUsers(user);
                });
            }

        }).catch(err => {
            console.log(err);
        });

        let $checkboxes = $(module).find('.form-block input[type="checkbox"], [data-check-all]');
        $checkboxes.prop('checked', false).prop('disabled', false);
    }

    function renderGroups() {
        init_groups.forEach((group) => {
            let inputTmpl = `<label class="users-section__checkbox">
                                    <input hidden type="checkbox" name="roles[${group.id}]" value="${group.title}" data-check-all/>
                                    <span class="checkbox-custom"></span>
                                </label>`;

            if (group.checked) {
                inputTmpl = `<label class="users-section__checkbox">
                                    <input hidden type="checkbox" name="roles[${group.id}]" value="${group.title}" checked data-check-all/>
                                    <span class="checkbox-custom"></span>
                                </label>`
            }

            let sectionTmpl = $('<div>', {
                class: 'users-section is-active',
                'data-group-id': group.id,
                append: $('<p>', {
                    class: 'users-section__title',
                    text: group.title,
                    click: (e) => {
                        $(e.target.parentNode).toggleClass('is-active');
                        $(e.target.parentNode).find('.form-block, .no-found').slideToggle(200);
                    },
                    prepend: $(inputTmpl)
                })
            });
            $usersContainer.append(sectionTmpl);
        });
        $usersContainer.find('[data-check-all]').on('change', (e) => {
            let $checkboxes = $(e.target).closest('[data-group-id]').find('.form-block input[type="checkbox"]');
            console.log($(e.target).closest('[data-group-id]'));
            if ($(e.target).prop('checked') == true) {
                $checkboxes.prop('checked', true)
            } else {
                $checkboxes.prop('checked', false)
            }
        });
    }

    function renderUsers(user) {
        let $group = $usersContainer.find(`[data-group-id="${user.role_id}"]`);

        let inputTmpl = `<input class="form-block__checkbox"
                                                   type="checkbox" name="${user.role}[${user.id}]" value="${user.login}">`;
        if (user.checked) {
            inputTmpl =  `<input class="form-block__checkbox"
                                                   type="checkbox" name="${user.role}[${user.id}]" value="${user.login}" checked>`;
        }

        let userTmpl = `<div class="form-block">
                                        <label class="form-block__checkbox-wrap">
                                            ${inputTmpl}
                                            <span class="checkbox-custom"></span>
                                            <span class="form-block__checkbox-text">${user.login}</span>
                                        </label>
                                    </div>`;

        $group.find('.no-found').remove();
        $group.append(userTmpl);

        $group.find('input[type="checkbox"]').on('change', (e) => {
            let name = e.target.name;
            if ($(e.target).prop('checked') == true) {
                if (checked_users.indexOf(name) == -1) {
                    checked_users.push(name);
                }
            } else {
                if (checked_users.indexOf(name) != -1) {
                    let idx = checked_users.indexOf(name);
                    checked_users.splice(idx, 1);
                }
            }
        });

        checked_users.forEach(value => {
            if(value == `${user.role}[${user.id}]`) {
                $group.find(`input[name='${user.role}[${user.id}]'`).attr('checked', true).prop('checked', true);
            }
        });
    }

    function clearGroups() {
        let $group = $usersContainer.find(`[data-group-id]`);
        $group.find('.form-block').remove();
        $group.find('.no-found').remove();
        $group.append($('<p class="no-found">Не найдено</p>'));
    }
}