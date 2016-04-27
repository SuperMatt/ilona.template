imglist = []
captionlist = []

/*$("body").find("a.overlay").each(function() { */
$( ".wp-caption" ).each(function() {
    caption = $( this ).find('img').attr('alt');
    $(this).find('a').each(function() {

        albumname = "fullscreen"
        if($(this).hasClass('overlay')) {
            albumname = "touch"
        }
        $(this).attr('data-lightbox', albumname);
        $(this).attr('data-title', caption);
    });
});
