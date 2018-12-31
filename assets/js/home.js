var bannerHeight;

function wResizeHome() {
    $("#banner").height(0.4 * docWidth);
}

function initMap() {
    var location = {lat: 23.840836, lng: 91.267833};
    var map = new google.maps.Map(document.getElementById("map"), {
        zoom: 18,
        center: location
    });
}

$(window).resize(function() {
    wResizeHome();
});

$(document).ready(function() {
    wResizeHome();

    $(document).scroll(function() {
        scrollTop = $(this).scrollTop();

        if(scrollTop > nav1Top) {
            $("#banner").css({
                "margin-top": "3.5rem"
            });
        }
        else {
            $("#banner").css({
                "margin-top": "0"
            });
        }
    });
});
