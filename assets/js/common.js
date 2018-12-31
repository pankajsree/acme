var docWidth;
var nav1Top;
var scrollTop;

function wResize() {
    docWidth = $(document).width();
    nav1Top = $("#nav-1").offset().top;
    scrollTop = $(document).scrollTop();
}

$(window).resize(function() {
    wResize();
});

$(document).ready(function() {
    wResize();

    $('#nav-1 .item-level-0').hover(function() {
            $(this).find('.menu-level-0').stop(true, true).delay(200).fadeIn(500);
        }, function() {
            $(this).find('.menu-level-0').stop(true, true).delay(200).fadeOut(500);
    });

    $('#nav-1 .item-level-1').hover(function() {
            $(this).find('.menu-level-1').stop(true, true).delay(200).fadeIn(500);
        }, function() {
            $(this).find('.menu-level-1').stop(true, true).delay(200).fadeOut(500);
    });

    $('#nav-1 .item-level-2').hover(function() {
            $(this).find('.menu-level-2').stop(true, true).delay(200).fadeIn(500);
        }, function() {
            $(this).find('.menu-level-2').stop(true, true).delay(200).fadeOut(500);
    });

    $('#nav-1 .item-level-3').hover(function() {
            $(this).find('.menu-level-3').stop(true, true).delay(200).fadeIn(500);
        }, function() {
            $(this).find('.menu-level-3').stop(true, true).delay(200).fadeOut(500);
    });

    $(document).scroll(function() {
        scrollTop = $(this).scrollTop();

        if(scrollTop > nav1Top) {
            $("#nav-ul-1").css({
                "right": "calc(50% + 4rem)"
            });
            $("#nav-ul-2").css({
                "left": "calc(50% + 4rem)"
            });

            $("#nav-1").css({
                "position": "fixed"
            });

            $(".navbar-brand img").css({
                "height": "4rem"
            })
        }
        else {
            $("#nav-ul-1").css({
                "right": "50%"
            });
            $("#nav-ul-2").css({
                "left": "50%"
            });

            $("#nav-1").css({
                "position": "relative"
            });

            $(".navbar-brand img").css({
                "height": "0"
            })
        }

        // if(scrollTop > 1000) {
        //     $("#anchor-top").show();
        // }
        // else {
        //     $("#anchor-top").hide();
        // }
    });

    // $("#anchor-top").click(function() {
    //     $("html, body").animate({scrollTop:0}, 500);
    // });
});
