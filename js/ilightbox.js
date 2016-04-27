    imglist = []
    captionlist = []

    /*$("body").find("a.overlay").each(function() { */
    $( ".wp-caption" ).each(function() {
        caption = $( this ).find('img').attr('alt');
        $(this).find('a').each(function() {
            $(this).attr('data-lightbox', 'icarousel');
            $(this).attr('data-title', caption);
        });
    });
