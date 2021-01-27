$(function () {
    try {
        $('.summernote').summernote({
            height: 200,
            minHeight: 100, // set minimum height of editor
            maxHeight: 300, // set maximum height of editor
            focus: true, // set focus to editable area after initializing summernote
            disableDragAndDrop: true,
            placeholder: 'e.g Passionate science teacher with 8+ years of experience and a track record of..',
            codeviewFilter: true,
            codeviewIframeFilter: true,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear', 'strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['insert', ['link']],
                ['misc', ['fullscreen', 'undo', 'redo', 'help']]
            ],
        });
    } catch (_) {
        console.warn("[INFO] ----> Element of Class (.summernote) not found");
    }
})
