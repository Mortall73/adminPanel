import axios from 'axios';
import modulesLoader from '../utils/module-loader';

export default (container) => {
    let url = $(container).data('url');
    let params = $(container).data('params') || {};
    let hasTarget = $(container)[0].hasAttribute('data-target') || false;

    if (hasTarget) {
        let target = $(container).data('target');
        $(container).on('click', (e) => {
            e.preventDefault();
            Swal.close();
            Swal.fire({
                showCloseButton: true,
                html: $(target),
                showCancelButton: false,
                showConfirmButton: false,
                customClass: {
                    container: 'modal-container',
                    popup: 'modal ajax-modal',
                    content: 'modal-content',
                }
            });
            modulesLoader('.ajax-modal');
        });
    } else {
        $(container).on('click', (e) => {
            e.preventDefault();
            loadModal();
        });

        function loadModal() {

            axios({
                method: 'GET',
                url: url,
                params: params
            }).then((response) => {
                Swal.close();

                if(response.data.success) {
                    Swal.fire({
                        html: response.data.html,
                        showCloseButton: true,
                        showCancelButton: false,
                        showConfirmButton: false,
                        customClass: {
                            container: 'modal-container',
                            popup: 'modal ajax-modal',
                            content: 'modal-content',
                        }
                    });
                    modulesLoader('.ajax-modal');
                } else {
                    Swal.fire({
                        type: 'error',
                        title: 'Ошбка при загрузке',
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
                }

            }).catch((error) => {
                console.log(error);
                Swal.fire({
                    type: 'error',
                    html: `<div class="modal-inner">
                        <p class="modal-title">Ошибка</p>
                        <p class="modal-text">${error}</p>
                    </div>`,
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
            });
        };
    }

};