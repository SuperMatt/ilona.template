$(document).ready(function() {

    $("a.overlay").each( function () {
        if (!$(this).parent().hasClass("wp-caption")) {
            $(this).wrap('<div class="wp-caption"></div>')
            $(this).after('<p class="wp-caption-text"></p>')
        }
    });

    $( ".wp-caption" ).each(function() {
        link = $( this ).find('a').attr('href');

        caption = $( this ).find('.wp-caption-text').html();
        $( this ).find('.wp-caption-text').html('<a href="' + link + '">' + caption + '</a>')
        console.log("moved link: " + link)
    });
});
