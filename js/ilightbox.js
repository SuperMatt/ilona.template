    imglist = []
    captionlist = []

    /*$("body").find("a.overlay").each(function() { */
    $( ".wp-caption" ).each(function() {
        caption = $( this ).find('img').attr('alt');
        link = $(this).find('a.overlay');
        link.attr('data-lightbox', 'icarousel');
        link.attr('data-title', caption);
    });
