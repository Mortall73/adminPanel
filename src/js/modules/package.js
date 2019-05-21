import axios from 'axios';
import modulesLoader from '../utils/module-loader';

export default (container) => {
    let $container = $(container);

    let $optionsBtn = $container.find('[data-options]');
    let $detailBtn = $container.find('[data-detail]');

    $detailBtn.on('click', (e) => {
        let url = $(e.target).data('detail');

        axios({
            method: 'get',
            url: url
        }).then((res) => {
            Swal.fire({
                html: res.data.html,
                width: '80%',
                showCloseButton: true,
                showCancelButton: false,
                showConfirmButton: false,
                customClass: {
                    container: 'modal-container',
                    popup: 'modal modal--transparent',
                    content: 'modal-content',
                }
            });

            /*
            * вызываю загрузку модулей в pop-up
            */
            modulesLoader('.modal');

        });
    });

    $optionsBtn.on('click', (e) => {
        let url = $(e.target).data('options');
        axios({
            method: 'get',
            url: url
        }).then((res) => {
            Swal.fire({
                html: res.data.html,
                showCloseButton: true,
                showCancelButton: false,
                showConfirmButton: false,
                customClass: {
                    container: 'modal-container',
                    popup: 'modal',
                    content: 'modal-content',
                }
            });

            /*
            * вызываю загрузку модулей в pop-up
            */
            modulesLoader('.modal');

            /*
            * создаю инпут файл, url берется из action родительской формы
            */
            let formAction = $('#package-img-load').closest('form').attr('action');
            $('#package-img-load').dropzone({
                url: formAction,
                dictDefaultMessage: 'Перетащите файл сюда  или выберите с диска',
                maxFiles: $('#package-img-load').data('max-files') || 1,
                removedfile: function(file) {
                    let name = file.name;

                    $.ajax({
                         type: 'POST',
                         url: formAction,
                         data: {name: name, action: 'delete'},
                    });

                    let _ref;
                    return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
                },
                addRemoveLinks: true,
                success: function (res) {
                    console.log(res);
                }
            });

        });
    });
}
