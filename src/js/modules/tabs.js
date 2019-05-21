export default (container) => {
    let $container = $(container);
    let $btns = $container.find('[data-tab-button]');
    let $tabsContent = $container.find('[data-tab-content]');

    $btns.on('click', (e) => {
        e.preventDefault();
        $btns.each((i, btn) => {
            $(btn).removeClass('is-active');
        });
        $(e.target).addClass('is-active');

        let $tabTarget = $(e.target).attr('href');

        $tabsContent.each((i, tab) => {
            let $tab = $(tab);
            if($tab.data('tab-content') == $tabTarget ) {
                $tab.slideDown(200);
            } else {
                $tab.slideUp(200);
            }
        });

    });
};
