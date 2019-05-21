import axios from 'axios';
import modulesLoader from '../utils/module-loader';

const packagesEdit = {
    params: {
        $packageEditBlocks: $('[data-package-inputs]')
    },
    init()  {
        this.addRow();
    },
    addRow() {
        this.params.$packageEditBlocks.each((i, block) => {
            let $addBtn = $(block).find('[data-add-inputs]');

            $addBtn.on('click', (e) => {
                e.preventDefault();
                let url = $(e.target).data('add-inputs');
                axios({
                    method: 'GET',
                    url: url
                }).then((response) => {
                    if (response.data.success) {
                         $(response.data.html).insertBefore($addBtn);
                        modulesLoader(block); //инит модулей
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000
                        });
                        Toast.fire({
                            type: 'success',
                            title: 'Успешно добавлено'
                        });
                    }
                }).catch((err) => {
                    console.log(err);
                });
            })
        });
    }
};

export default packagesEdit;
