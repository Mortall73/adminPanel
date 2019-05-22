export default (container) => {
    let $subParants = $(container).find('[data-parent]');

    let methods = {
        init() {
            $subParants.each((i, item) => {
                $(item).addClass('has-submenu');
                let $subMenu = $(item).find('[data-submenu]');
                $subMenu.slideUp();
            });
            this.toggle();
        },
        toggle() {
            $subParants.find('[data-menu-trigger]').on('click', (e) => {
                e.preventDefault();
                let $subMenu = $subParants.find('[data-submenu]');
                $subMenu.slideToggle(200);
                $subParants.toggleClass('is-active');
            })
        }
    };
    methods.init();
};
