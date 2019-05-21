
export default (container) => {
    
    let formAction = $(container).closest('form').attr('action');

    $(container).dropzone({
        url: formAction,
        dictDefaultMessage: 'Перетащите файл сюда  или выберите с диска',
        maxFiles: $(container).data('max-files') || 1,
        removedfile: function(file) {
            let name = file.name;

            $.ajax({
                type: 'POST',
                url: formAction,
                data: {name: name, action: 'delete'},
            });

            let _ref;
            return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
        },
        addRemoveLinks: true,
        success: function (res) {
            console.log(res);
        }
    });
    
};
