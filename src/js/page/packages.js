import axios from 'axios';
const packages = {
    params: {
        $actionsForm: $('[data-packages-action]'),
        $customSubmitButtons: $('[data-packages-action] [data-submit]'),
        $sortingForm: $('[data-packages-sorting]'),
        $checkAll: $('[data-check-all]'),
        $packagesCheckboxes: $('[data-package-checkbox]'),
        $checkPackagesInput: $('[data-check-packages]'),
        checkedPackages: [],
        packagesChoose: false
    },
    init()  {
        require('sweet-dropdown/dist/min/jquery.sweet-dropdown.min.js');
        this.setPackageAction();
        this.setPackagesSorting();
        this.checkAllPackages();
        this.checkPackage();
        this.packagesIsChoose();
    },
    setPackageAction() {
        this.params.$customSubmitButtons.on('click', (e) => {
            if ($(e.target).hasClass('js-disabled')) {
                return false;
            }
            e.preventDefault();
            Swal.fire({
                html: `
                <div class="modal-inner">
                    <p class="modal-title">Вы уверены в действии?</p>
                </div>`,
                type: 'question',
                showCloseButton: true,
                showCancelButton: true,
                showConfirmButton: true,
                confirmButtonText: 'Да',
                cancelButtonText: 'Нет',
                customClass: {
                    container: 'modal-container',
                    popup: 'modal',
                    content: 'modal-content',
                }
            }).then((result) => {
                if (result.value) {
                    Swal.close();
                    this.params.$actionsForm[0].submit();
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    Swal.close();
                }
            });
        });
    },
    setPackagesSorting() {
        let select = this.params.$sortingForm.find('select');
        select.on('change', () => {
            this.params.$sortingForm.submit();
        });
    },
    checkAllPackages() {
        this.params.$checkAll.on('change', (e) => {
            if (e.target.checked) {
                this.params.$packagesCheckboxes.each((i, input) => {
                    $(input).prop("checked", true);
                    $(input).trigger('change');
                });
            } else {
                this.params.$packagesCheckboxes.each((i, input) => {
                    $(input).prop("checked", false);
                    $(input).trigger('change');
                });
            }
        });
    },
    checkPackage() {
        this.params.$packagesCheckboxes.on('change', (e) => {
            if (e.target.checked) {
                this.params.checkedPackages.push(e.target.value);
                this.params.$checkPackagesInput.val(this.params.checkedPackages);
            } else {
                let index = this.params.checkedPackages.indexOf(e.target.value);
                this.params.checkedPackages.splice(index, 1);
                this.params.$checkPackagesInput.val(this.params.checkedPackages);
            }
            this.packagesIsChoose();
        });
    },
    actionsAvalible() {
        this.params.$customSubmitButtons.each((i, btn) => {
            if(this.params.packagesChoose) {
                $(btn).removeClass('js-disabled');
            } else {
                $(btn).addClass('js-disabled');
            }
        });
    },
    packagesIsChoose() {
        this.params.checkedPackages.length > 0 ? this.params.packagesChoose = true : this.params.packagesChoose = false;
        this.actionsAvalible();
    }
};

export default packages;
