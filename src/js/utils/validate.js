Pristine.addValidator("not-empty", function(value, param1, param2) {
    // here `this` refers to the respective input element
    
    return $.trim(value).length !== 0;

}, "Поле не должно быть пустым", 5, false);

Pristine.addValidator("select-required", function(value, param1, param2) {
    // here `this` refers to the respective input element
    
    return value != -1;

}, "Поле должно быть выбранно", 5, false);

export default (onceForm) => {
    let $formValidate = $('[data-validate]:not([data-is="ajax-submit"])');
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

    if (!onceForm) {
        $formValidate.each((i, form) => {
            let pristine = new Pristine(form, defaultConfig);

            $(form).on('submit', function (e) {
                e.preventDefault();
                // check if the form is valid
                let valid = pristine.validate(); // returns true or false
                if (valid) {
                    form.submit();
                }
            });
            console.log(`Validate form ${form.name} active.`)
        });
    } else {
        let pristine = new Pristine(onceForm, defaultConfig);
        console.log(`Validate once form ${onceForm.name} active.`);
        return pristine.validate(); // returns true or false
    }
}


