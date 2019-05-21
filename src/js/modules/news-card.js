import axios from 'axios';

const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
});

export default (container) => {
    let $deleteBtn = $(container).find('[data-delete]');
    let url = $deleteBtn.data('url');
    let params = $deleteBtn.data('params');

    $deleteBtn.on('click' , (e) => {
        e.preventDefault();
        axios({
            method: 'GET',
            url: url,
            params: params || {}
        }).then((response) => {
            if(response.data.success) {
                Toast.fire({
                    type: 'success',
                    title: response.data.title || 'Новость успешно удалена!'
                });
                let el = container.parentElement.classList.contains('col') ? container.parentElement : container;

                $(el).addClass('start-delete');
                setTimeout(() => {
                    $(el).remove();
                }, 1000);
            } else {
                Toast.fire({
                    type: 'error',
                    title: `Ошибка!`
                });
            }
        }).catch((error) => {
            console.log(error);
            Toast.fire({
                type: 'error',
                title: `Ошибка: ${error}`
            });
        })
    });

};
