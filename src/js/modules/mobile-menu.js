export default (module) => {
    let $btn = $(module);

    $btn.on('click', (e) => {
        e.preventDefault();

        $btn.toggleClass('active');
        $('body').toggleClass('is-fixed');
        $('header').toggleClass('header--fh');
        $('.main-menu__item:not(.logo-wrap), .transaction-btn-wrap, .last-posts').slideToggle(200);
    })
}
