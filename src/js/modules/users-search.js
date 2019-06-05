import axios from 'axios';

export default (module) => {
    let $container = $(module);
    let url = $(module).attr('action');
    let $input = $container.find('[data-search-input]');
    let $usersContainer = $container.find('[data-users-container]');
    let $checkAllBtn = $container.find('[data-check-all]');
    let initData = null;
    let dataIsLoaded = false;
    let allIsChecked = false;

    init();

    $input.on('input', (e) => {
        let data = new FormData();
        data.append('action', 'get');
        data.append('q', $.trim(e.target.value));
        sendQuery(data);
    });

    $checkAllBtn.on('click', (e) => {
        e.preventDefault();
        allIsChecked = !allIsChecked;

        allIsChecked == true ?
            $usersContainer.find('input[type="checkbox"]').prop('checked', true) :
            $usersContainer.find('input[type="checkbox"]').prop('checked', false);

        allIsChecked == true ? $checkAllBtn.html('Убрать всех') : $checkAllBtn.html('Выбрать всех');

    });

    function init() {
        let data = new FormData();
        data.append('action', 'init')
        sendQuery(data);
    }

    function changeLoader() {
        if(dataIsLoaded) {
            $usersContainer.removeClass('loading');
        } else {
            $usersContainer.addClass('loading');
        }
    }

    function sendQuery(value) {
        dataIsLoaded = false;
        changeLoader();

        axios({
            method: 'POST',
            url: url,
            data: value
        }).then((response) => {
            console.log(response.data);
            if(response.data.success) {
                if (value.get('action') == 'init') {
                    initData = response.data;
                    renderUsers(response.data);

                } else if (value.get('q').length === 0) {
                    renderUsers(initData);
                    console.log(initData);
                } else {
                    renderUsers(response.data);
                }
            }
            setTimeout(() => {
                dataIsLoaded = true;
                changeLoader();
            }, 500);

        }).catch(error => {
            console.log(error);
        })
    }

    /**
     *
     * @param data {Object} - объект с секциями и пользователями
     */

    function renderUsers(data) {
        $usersContainer.html('');
        let sections = data.sections;


        if (sections && sections.length) {

            sections.forEach((section) => {
                let users = section.users;

                let sectionTmpl = $('<div>', {
                    class: 'users-section is-active',
                    append: $('<p>', {
                        class: 'users-section__title',
                        text: section.title,
                        click: (e) => {
                            e.preventDefault();
                            $(e.target.parentNode).toggleClass('is-active');
                            $(e.target.parentNode).find('.form-block').slideToggle(200);
                        }
                    }).add()
                });
                $usersContainer.append(sectionTmpl);

                if (users && users.length) {

                    users.forEach(user => {
                        let inputTmpl = `<input class="form-block__checkbox"
                                                   type="checkbox" name="${user.inputName}" value="${user.name}">`;
                        if (user.select) {
                            inputTmpl =  `<input class="form-block__checkbox"
                                                   type="checkbox" name="${user.inputName}" value="${user.name}" checked>`;
                        }

                        let userTmpl = `<div class="form-block">
                                        <label class="form-block__checkbox-wrap">
                                            ${inputTmpl}
                                            <span class="checkbox-custom"></span>
                                            <span class="form-block__checkbox-text">${user.name}</span>
                                        </label>
                                    </div>`;

                        $(sectionTmpl).append(userTmpl);

                    });

                }

            });

        }

    }
}