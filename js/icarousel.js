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

    $("body").append('<div id="carouselbg" style="position: fixed; top: 0px; left: 0px; bottom: 0px; right: 0px; background-color: #FFF;"></div>')
    $("#carouselbg").hide();

    $("#carouselbg").append('<div id="imgcarousel" class="carousel slide" data-ride="carousel" style="position: fixed; top: 10%; bottom: 10%; left: 0px; right: 0px"></div>');

    $("#imgcarousel").append('<div class="carousel-inner" role="listbox"></div>')

    for (i = 0; i < numitems; i++) {
        active = ""
        if (i == 0) {
            active = "active"
        }

        $(".carousel-inner").append('<div id="item' + i + '" class="item ' + active + '"></div>')
        $("#item" + i).append('<center><img style="max-width: 970px; height: 100%;" src="' + imglist[i] + '" class="" ></center>')
    }

    $("#imgcarousel").append('<a class="left carousel-control" style="background-image: none;" href="#imgcarousel" role="button" data-slide="prev"></a>')
    $(".left").append('<span style="color: #333" class="glyphicon glyphicon-chevron-left" aria-hidden="false"></span>')
    $(".left").append('<span class="sr-only">Previous</span>')
    $("#imgcarousel").append('<a class="right carousel-control" style="background-image: none;" href="#imgcarousel" role="button" data-slide="next"><a>')
    $(".right").append('<span style="color: #333" class="glyphicon glyphicon-chevron-right" aria-hidden="false"></span>')
    $(".right").append('<span class="sr-only">Next</span>')

    $("#carouselbg").append('<div id="carouselclose" style="font-size: 30px" class="caoursel-control"><span class="glyphicon glyphicon-remove" style="position: fixed; top: 50px; left: 91px"></span></div>')

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

