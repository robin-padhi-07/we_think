$(document).ready(function () {
    _bindhome_slider();
});

//== Featured Car Slider ==============
function _bindhome_slider() {
    var offerslider = $('#home_slider');
    offerslider.owlCarousel({
        //center: true,
        items: 1,
        autoplay: false,
        loop: false,
        nav: true,
        margin: 0,
        dots: false,
        autoplayHoverPause: true,
        responsive: {
            680: {
                items: 1,
                singleItem: true
            },
            1268: {
                //items: 3
                items: 1,
                singleItem: true
            }
        }
    });
}