import axios from "axios";

const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
});

export default (container) => {
    let $buttons = $(container).find('[data-submit]');
    let $idInput = $(container).find('[data-id]');
    let id = $idInput.val();
    let $form = $(container).closest('form');
    let url = $form.attr('action');

    $buttons.on('change', () => {
        $idInput.prop('checked', true);
        
        setTimeout(() => {
            let data = new FormData($form[0]);
            axios({
                method: 'post',
                url: url,
                data: data
            }).then((res) => {
                if (res.data.success) {
                    if (id == res.data.ID) {
                        Toast.fire({
                            type: 'success',
                            title: res.data.title
                        });
                        $(container).remove();
                    }

                }
            });
            
        }, 300);
    });


    
}
