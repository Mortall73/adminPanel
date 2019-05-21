import axios from 'axios';
export default (container) => {
    let $deleteBtn = $(container).find('[data-delete]');

    $deleteBtn.on('click', (e) => {
        e.preventDefault();
        let url = $(e.target).data('delete');
        axios({
            method: 'GET',
            url: url
        }).then((response) => {
            if (response.data.success) {
                $(container).remove();
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                });
                Toast.fire({
                    type: 'success',
                    title: 'Успешно удалено'
                });
            }
        }).catch((error) => {
            console.log(error);
        })
    });
};
