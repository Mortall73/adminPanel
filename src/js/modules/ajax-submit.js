import axios from 'axios';
export default (form) => {
    let $form = $(form);
    let url = $form.attr('action');
    let method = 'POST';
    let $customSubmitButtons = $form.find('[data-submit]');

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

            }).catch((error) => {
                console.log(error);
            });
        }
    };

    $form.on('submit', (e) => {
        e.preventDefault();
        setTimeout(() => {
            methods.send();
        }, 200);
    });

    $customSubmitButtons.on('click', (e) => {
        e.preventDefault();
        methods.send();
    });


}
