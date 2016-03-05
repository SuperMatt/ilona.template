$(document).ready(function() {

    $( ".wp-caption" ).each(function() {
        link = $( this ).find('a').attr('href');

        caption = $( this ).find('.wp-caption-text').html();
        $( this ).find('.wp-caption-text').html('<a href="' + link + '">' + caption + '</a>')
        console.log("moved link: " + link)
    });

    imglist = []

    $("body").find("a.overlay").each(function() {
        url = $(this).attr("href");
        if (url != "undefined") {
            imglist.push(url);
        }

    });

    numitems = imglist.length;

    $("body").append('<div id="carouselbg" class="icarousel" ></div>')
    $("#carouselbg").hide();

    $("#carouselbg").append('<div id="imgcarousel" class="carousel slide icarousel-slide" data-ride="carousel"></div>');

    $("#imgcarousel").append('<div class="carousel-inner" role="listbox"></div>')

    for (i = 0; i < numitems; i++) {
        active = ""
        if (i == 0) {
            active = "active"
        }

        $(".carousel-inner").append('<div id="item' + i + '" class="item ' + active + '"></div>')
        $("#item" + i).append('<center><img src="' + imglist[i] + '" class="icarousel-img" ></center>')
    }

    $("#imgcarousel").append('<a class="left carousel-control" href="#imgcarousel" role="button" data-slide="prev"></a>')
    $(".left").append('<span class="icarousel-glyph glyphicon glyphicon-chevron-left" aria-hidden="false"></span>')
    $(".left").append('<span class="sr-only">Previous</span>')
    $("#imgcarousel").append('<a class="right carousel-control" href="#imgcarousel" role="button" data-slide="next"><a>')
    $(".right").append('<span class="icarousel-glyph glyphicon glyphicon-chevron-right" aria-hidden="false"></span>')
    $(".right").append('<span class="sr-only">Next</span>')

    $("#carouselbg").append('<a id="carouselclose" class="caoursel-control left"><span class="icarousel-close glyphicon glyphicon-remove"></span></a>')

    $(".carousel").carousel('pause');
    $(".carousel").carousel({interval: false});

    $("#carouselclose").click(function() {
        $("#carouselbg").fadeOut();
    });

    $(".imggrid").find("a").each(function() {
        $(this).click(function(event) {
            event.preventDefault();
            for(i = 0; i < numitems; i++) {
                if(imglist[i] == $(this).attr("href"))
                {
                    number = i;
                    break;
                }
            }
            $(".carousel").carousel(number);
            $("#carouselbg").fadeIn();
        });
    });

    console.log(imglist)
});

