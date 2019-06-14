import 'lightgallery.js/dist/js/lightgallery.js';

export default (module) => {
    lightGallery(module, {
        thumbnail: true,
        animateThumb: false,
        showThumbByDefault: false 
    });
}