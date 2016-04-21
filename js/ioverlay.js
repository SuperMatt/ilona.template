$(document).ready(function() {

    $( ".wp-caption" ).each(function() {
        link = $( this ).find('a').attr('href');

        caption = $( this ).find('.wp-caption-text').html();
        $( this ).find('.wp-caption-text').html('<a href="' + link + '">' + caption + '</a>')
        console.log("moved link: " + link)
    });
});

