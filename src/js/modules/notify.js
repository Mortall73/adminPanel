import axios from 'axios';
export default (container) => {
    let $notifiesBlock = $('[data-notifies]');
    let $notifiesContainer = $notifiesBlock.find('[data-notifies-inner]')
    let $closeBtn = $('[data-notifies]').find('[data-close-notifies]');
    let url = $(container).data('notifies');
    let timeout = $(container).data('timeout');

    $(container).on('click', (e) => {
        e.preventDefault();
        $notifiesBlock.toggleClass('is-active');
        $(container).removeClass('has-notify');
    });

    $closeBtn.on('click', (e) => {
        e.preventDefault();
        $notifiesBlock.toggleClass('is-active');
    });

    setInterval(() => {
        axios({
            method: 'GET',
            url: url
        }).then((response) => {
            if (response.data.success && response.data.hasNotify) {
                $notifiesContainer.append(response.data.html);
                $(container).addClass('has-notify');
            }
        });
    }, timeout);
};
