import axios from 'axios';
export default (container) => {
    let $container = $(container);
    let $searchTrigger = $container.find('[data-open-search]');
    let $searchBlock = $container.find('[data-search-block]');

    let methods = {
        init() {
            this.toggleSearch();
        },
        toggleSearch() {
            let searchIsOpen = false;

            $searchTrigger.on('click', (e) => {
                e.preventDefault();
                $searchBlock.toggle(100);
                $container.toggleClass('is-active');
                searchIsOpen = !searchIsOpen;
            });
        }
    };

    methods.init();
};
