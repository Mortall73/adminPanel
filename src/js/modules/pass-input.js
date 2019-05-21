export default (container) => {
    let $changeBtn = $(container).find('[data-change-type]');
    let $input = $(container).find('input');
    let passIsShow = false;

    $changeBtn.on('click', () => {
        if (!passIsShow) {
            $input.attr('type', 'text');
            $changeBtn.toggleClass('is-open');
        } else {
            $input.attr('type', 'password');
            $changeBtn.toggleClass('is-open');
        }
        passIsShow = !passIsShow;
    });
}