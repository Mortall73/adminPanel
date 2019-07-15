import axios from 'axios';
import isValide from '../utils/validate';

export default (form) => {
    let url = $(form).attr('action');
    let interval = parseInt($(form).data('interval'), 10);
    let enable_update = parseInt($(form).data('enable-update'), 0);
    let $containerMesages = $(form).find('[data-chat-dialog]');
    let $form = $(form);
    let isValid = false;
    let timeOutID = null;
    
    let instance = OverlayScrollbars(form.querySelector('[data-scroll]'), {
        className       : "os-theme-dark",
        sizeAutoCapable : true,
        paddingAbsolute : true,
        scrollbars : {
            clickScrolling : true
        },
        autoUpdate: true
    });

    instance.scroll({ y : "100%"  });

    if (! enable_update) {
        return;
    }

    $form.on('submit', (e) => {
        isValid = isValide(form);
        e.preventDefault();
        let data = new FormData(form);
        if (!isValid) {
            console.log('Form not is validate!');
            return false;
        }
        if (timeOutID != null) {
            clearTimeout(timeOutID);
        }
        timeOutID = setTimeout(() => {
            axios({
                method: 'POST',
                url: url,
                data: data
            }).then((response) => {
                if (response.data.success) {
                    $form.find('textarea').val('');
                    $form.find('input[type="file"]').val('');
                    if (response.data.messages && response.data.messages.length) {

                        response.data.messages.forEach((message) => {
                            renderMessage(message);
                        });

                    }
                }
            }).catch((error) => {
                console.log(error);
            });
        }, 1000);

    });

    setInterval(() => {
        axios({
            method: 'GET',
            url: url
        }).then((response) => {
            console.log(response.data);
            if (response.data.success) {
                if (response.data.messages && response.data.messages.length) {

                    response.data.messages.forEach((message) => {
                        renderMessage(message);
                        instance.scroll({ y : "100%"  });
                    });

                }
            }
        }).catch((error) => {
            console.log(error);
        });
    }, interval);

    function renderMessage(data) {
        let classMain = data.type == 1 ? 'chat-message chat-message--self' : 'chat-message';
        let nameSplit = () => {
            let splittingName = data.name.split(' ');

            if (splittingName.length > 1) {
                return `${data.name.split(' ')[0][0]}${data.name.split(' ')[1][0]}`;
            }
            return data.name[0];
        };
        let tmpl = $('<div>', {
            class: classMain,
            append: `<div class="chat-message__header">
                        <div class="person-icon">
                            <span>${nameSplit()}</span>
                        </div>
                        <p class="chat-message__person-name">
                            ${data.name}
                        </p>
                        <div class="chat-message__time">
                            ${data.time}
                        </div>
                    </div>
                    <div class="chat-message__text">
                        <p>
                            ${data.message}                            
                        </p>
                    </div>`
        });

        $containerMesages.append(tmpl);

        if (data.files && data.files.length) {
            tmpl.append(`<div class="chat-message__files"></div>`);
            data.files.forEach((file) => {
                tmpl.find('.chat-message__files')
                    .append(`<a href="${file.link}" download="${file.link}" class="chat-message__file">${file.title}</a>`);
            });
        }
    }

}