export default (container) => {
    let $links = $(container).find('[data-sitemap-link]');
    let $frameBlock = $('[data-page-frame]');
    let otherLinHover = false;

    $links.on('mouseenter', (e) => {
        let url = e.target.href;
        let $frame = $('<iframe></iframe>');
        $frameBlock.append($frame);

        $frame.attr('src', url);
        let head = $frame.contents().find("head");
        let css =   '<style type="text/css">' +
                        'body {zoom: .5;}' +
                    '</style>';
        function injectCSS(){
            $frame.contents().find('head').append(
                $('<link/>', { rel: 'stylesheet', href: '/src/css/frame.css', type: 'text/css' })
            );
        }

        $frame.on('load', injectCSS);
        injectCSS();
    });

    $links.on('mouseleave', (e) => {
        $frameBlock.html('');

    });
}