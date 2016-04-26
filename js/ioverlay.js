$(document).ready(function() {

    $("a.overlay").each( function () {
        if (!$(this).parent().hasClass("wp-caption")) {
            $(this).wrap('<div class="wp-caption"></div>');
        }

        $("a.overlay").after('<p class="wp-caption-text">&nbsp;</p>');
    });

    $( ".wp-caption" ).each(function() {
        link = $( this ).find('a').attr('href');

        caption = $( this ).find('.wp-caption-text').html();
        $( this ).find('.wp-caption-text').html('<a href="' + link + '">' + caption + '</a>')
        console.log("moved link: " + link)
    }
