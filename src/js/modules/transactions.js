import axios from "axios";
import modulesLoader from '../utils/module-loader';

const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
});

export default (container) => {
    let $refreshBtn = $(container).find('[data-refresh]');
    let $containerTo = $(container).find('[data-transactions-container]');

    $refreshBtn.on('click', (e) =>{
        e.preventDefault();
        refresh();
    });

    function refresh() {
        axios({
            method: 'GET',
            url: $refreshBtn.data('url'),
            params: {
                action: 'refresh'
            }
        }).then((response) => {
            if (response.data.success) {
                //$containerTo.html('');

                $containerTo.prepend(response.data.html);

                $containerTo.find('*').off(); //отключить все слушатели событий

                modulesLoader($containerTo); //заного установить все слушатели
            } else {
                Toast.fire({
                    type: 'error',
                    title: response.data.title || 'Ошибка!'
                });
            }
        }).catch((error) => {
            Toast.fire({
                type: 'error',
                title: `Ошибка: ${error}`
            });
        });
    }
    
};