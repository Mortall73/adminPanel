export default (container) => {
    let $input = $(container).find('[data-number-input]');
    let inputValue = parseInt($input.val(), 10);
    let newValue = inputValue;
    let minValue = parseInt($input.data('min'), 10);
    let maxValue = parseInt($input.data('max'), 10);
    let step = parseInt($input.data('step'), 10);
    let $inputWrap = $(container).find('.form-block__input-wrap');
        $inputWrap.addClass('js-input-number');
    let $incBtn = null;
    let $descBtn = null;

    let methods = {
        init() {
            let actionsButtonsTemplate = `
                <div class="js-input-number__buttons">
                    <button class="js-input-number__button inc" type="button" data-increment></button>
                    <button class="js-input-number__button desc" type="button" data-descrement></button>
                </div>
            `;

            $inputWrap.append(actionsButtonsTemplate);

            $incBtn = $(container).find('[data-increment]');
            $descBtn = $(container).find('[data-descrement]');

            this.increment();
            this.descrement();
            this.onChange();
        },
        increment() {
            $incBtn.on('click', (e) => {
                e.preventDefault();
                if(newValue < maxValue) {
                    newValue = newValue + step;
                    $input.val(parseInt(newValue, 10));
                }
            });
        },
        descrement() {
            $descBtn.on('click', (e) => {
                e.preventDefault();
                if(newValue > minValue) {
                    newValue = newValue - step;
                    $input.val(parseInt(newValue, 10));
                }
            });
        },
        onChange() {
            $input.on('change input', (e) => {
                e.preventDefault();
                let val = e.target.value;
                if (val == '') {
                    $input.val(newValue);
                    return;
                }
                if (isNaN(val)) {
                    $input.val(newValue);
                    return;
                };
                if (val > maxValue) {
                    $input.val(maxValue);
                    return;
                };
                if (val <= minValue) {
                    $input.val(minValue);
                    return;
                };
                newValue = parseInt(val, 10);

            });
        }
    };

    methods.init();

};
