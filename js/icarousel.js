$(document).ready(function() {

    imglist = []

    $(".imggrid").find("a.overlay").each(function() {
        url = $(this).attr("href");
        if (url != "undefined") {
            imglist.push(url);
        }

    });

    numitems = imglist.length;

    $("body").append('<div id="carouselbg" style="position: fixed; top: 0px; left: 0px; bottom: 0px; right: 0px; background-color: #FFF;"></div>')

    $("#carouselbg").append('<div id="imgcarousel" class="carousel slide" data-ride="carousel"></div>');
    $("#imgcarousel").append('<ol class="carousel-indicators"></ol>')

    $("#imgcarousel").append('<div class="carousel-inner" role="listbox">')

    for (i = 0; i < numitems; i++) {
        active = ""
        if (i == 0) {
            active = "active"
        }
        $(".carousel-indicators").append('<li data-target="#imgcarousel" data-slide-to="' + i + '" class="' + active + '"></li>')

        $(".carousel-inner").append('<div class="' + active + '" role="listbox"')
        $(".carousel-inner").append('<center><img src="' + imglist[i] + '" style="max-width: 60%; max-height: 60%"></center>')
        $(".carousel-inner").append('</div>')
    }

    $("#imgcarousel").append('</div>')

    $("#imgcarousel").append('<a class="left carousel-control" href="#imgcarousel" role="button" data-slide="prev">')
    $("#imgcarousel").append('<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>')
    $("#imgcarousel").append('<span class="sr-only">Previous</span>')
    $("#imgcarousel").append('</a>')
    $("#imgcarousel").append('<a class="right carousel-control" href="#imgcarousel" role="button" data-slide="next">')
    $("#imgcarousel").append('<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>')
    $("#imgcarousel").append('<span class="sr-only">Next</span>')
    $("#imgcarousel").append('</a>')


    $(".imggrid").find("a").each(function() {
        $(this).click(function(event) {
            event.preventDefault();
            alert($(this).attr("href"))
        });
    });
});
