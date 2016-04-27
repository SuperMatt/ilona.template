/*
    $("a.overlay").each( function () {
        if (!$(this).parent().hasClass("wp-caption")) {
            $(this).wrap('<div class="wp-caption alignnone" style="width:410px"></div>');
            $(this).after('<p class="wp-caption-text">&nbsp;</p>');
        }
    });

    $(".imggrid").each( function () {
        pContent = $(this).find('p').html();
        $(this).html(pContent);
    });

*/

$(".wp-caption-text").each(function() {
    if ($(this).text() == "null") {
        $(this).text('');
    }
});

$( ".wp-caption" ).each(function() {
    link = $( this ).find('a').attr('href');

    caption = $( this ).find('.wp-caption-text').html();
    $( this ).find('.wp-caption-text').html('<a href="' + link + '">' + caption + '</a>')
    console.log("moved link: " + link)
});
