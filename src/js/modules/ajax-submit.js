import axios from 'axios';
import validate from '../utils/validate';
export default (form) => {
    let $form = $(form);
    let url = $form.attr('action');
    let method = 'POST';
    let $customSubmitButtons = $form.find('[data-submit]');

    let isValid = true;

    let defaultConfig = {
        // class of the parent element where the error/success class is added
        classTo: 'form-block',
        errorClass: 'has-error',
        successClass: 'has-success',
        // class of the parent element where error text element is appended
        errorTextParent: 'form-block',
        // type of element to create for the error text
        errorTextTag: 'div',
        // class of the error text element
        errorTextClass: 'text-error'
    };

    if (form.hasAttribute('data-validate')) {
        new Pristine(form, defaultConfig);
    }

    let methods = {
        send() {
            let data = new FormData(form);
            data.append('action', 'submit');
            axios({
                method: method,
                url: url,
                data: data
            }).then((response) => {
                Swal.close();

                let type = response.data.success ? 'success' : 'error';

                if (response.data.success) {
                    let event = new CustomEvent('ajax:submit', {
                        'detail': response
                    });
                    window.dispatchEvent(event);
                }

                Swal.fire({
                    html: `
                    <div class="modal-inner">
                        <p class="modal-title">${response.data.title || 'Ошибка'}</p>
                        <p class="modal-text">${response.data.message}</p>
                    </div>`,
                    type: type,
                    timer: 2500,
                    showCloseButton: true,
                    showCancelButton: false,
                    showConfirmButton: false,
                    customClass: {
                        container: 'modal-container',
                        popup: 'modal',
                        content: 'modal-content',
                    }
                });

                form.reset();

            }).catch((error) => {
                console.log(error);
                form.reset();
            });
        }
    };

    $form.on('submit', (e) => {
        e.preventDefault();

        if (form.hasAttribute('data-validate')) {
            isValid = validate($form[0]);
        }

        if (isValid) {
            setTimeout(() => {
                methods.send();
            }, 200);
        }
    });

    $customSubmitButtons.on('click', (e) => {
        e.preventDefault();
        methods.send();
    });


}
