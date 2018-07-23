
//====CUSTOM JS FOR WEBSITE (We can add any custom js for this website======
//======================================================
//=====================================================

$(document).ready(function () {
    _bindTestimonial();
    _bindHomeslider();
    _bindOfferSlider();
    _bindModelColor();
    _heightNav();
    _floaticon()
    _bindTab();
    _bindFormStep();
    _bindcount();
    _bindTFeatured();
   // _bindGallerySlider();
    _bindReadLeaa();
});

//== Homepage Slider ==============
function _bindTestimonial() {
    var owl = $('#home_slider');
    owl.owlCarousel({
        //center: true,
        items: 1,
        autoplay: true,
        loop: true,
        nav: true,
        margin: 10,
        dots: true,
        responsive: {
            680: {
                items: 1
            },
            1268: {
                items: 1
            }
        }
    })
}


//== Image Gallery =======
// function _bindGallerySlider(){
//     $('#imageGallery').lightSlider({
//         gallery:true,
//         item:1,
//         loop:true,
//         thumbItem:6,
//         slideMargin:0,
//         enableDrag: true,
//         currentPagerPosition:'left',
//         onSliderLoad: function(el) {
//             el.lightGallery({
//                 selector: '#imageGallery .lslide',
//                 share: false,
//                 pager: false
//             });
//         }   
//     });
// }

//== Read More =======
function _bindReadLeaa(){
    //var tempScrollTop = $(window).scrollTop();
    $("#toggle").click(function() {
        var elem = $("#toggle").text();
        if (elem == "Read More") {
        //Stuff to do when btn is in the read more state
        $("#toggle").text("Read Less");
            $("#more-text").slideDown(500);
        } 
        else {
        //Stuff to do when btn is in the read less state
        $("#toggle").text("Read More");
            $("#more-text").slideUp(500);
            $('html, body').animate({
                scrollTop: $("#read").offset().top
            }, 1);
        }
    });
}

//== Featured Car Slider ==============
function _bindTFeatured(){
    var offerslider = $('.featured_used_car');
    offerslider.owlCarousel({
        //center: true,
        items: 1,
        autoplay: true,
        loop: false,
        nav: true,
        margin: 20,
        dots: false,
        responsive: {
            680: {
                items: 1
            },
            1268: {
                items: 3
            }
        }
    })
}

function _heightNav(){
    $().ready(function(){
        ch = $('#step-element-form').height();
        $('.step-element-container').css({
            height : ch + 100 + 'px'
        })
    });
}
function _floaticon(){
    $('.floating-icons').mouseover(function() {
        $(this).stop().animate({
            width: 220
        }, 300)
    }).mouseout(function() {
        $(this).stop().animate({
            width: 49
        }, 300)
    });
}




function _bindTab(){
    $("#on_next").click(function() {
        $("#add_active").addClass('active');
        $("#remove_active").removeClass('active');
        $("#on_next").removeClass('active');
    });
    $("#remove_active").click(function() {
        $("#on_next").removeClass('active');
    });
}

//== To show New and Renewal Form ==================
function _bindFormStep(){
    $("#if_renew").on('click', function() {
        $(".form_renewal").fadeIn();
        $(".form_new").fadeOut();
    });
    $("#if_new").on('click', function() {
        $(".form_new").fadeIn();
        $(".form_renewal").fadeOut();
    });
}

//== Offer Cards Slider ==================
function _bindOfferSlider(){
    var offerslider = $('.loop');
    offerslider.owlCarousel({
        center: true,
        items: 1,
        autoplay: true,
        loop: true,
        nav: true,
        margin: 48,
        dots: false,
        responsive: {
            680: {
                items: 1
            },
            1268: {
                items: 4
            }
        }
    })
}



//== Home slider  ==============
function _bindHomeslider() {
    var owl = $('#home_slider');
    owl.owlCarousel({
        margin: 10,
        nav: false,
        animateOut: 'slideOutLeft',
        animateIn: 'slideInRight',
        items: 1,
        loop: true,
        //default settings:
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:false,
        responsive: {
            600: {
                items: 1
            }
        }
    })
}
//== Home slider  ==============
function _bindcount() {
    var owl = $('#count_slider');
    owl.owlCarousel({
        margin: 10,
        nav: false,
        animateOut: 'slideOutLeft',
        animateIn: 'slideInRight',
        items: 1,
        loop: true,
        //default settings:
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:false,
        responsive: {
            600: {
                items: 1
            }
        }
    })
}

//== MODEL COLOR SLIDER ==================
function _bindModelColor(){
    var offerslider = $('#model_color_slider');
    offerslider.owlCarousel({
        items: 2,
        autoplay: true,
        loop: false,
        nav: true,
        margin: 10,
        dots: false,
        responsive: {
            680: {
                items: 5
            },
            1268: {
                items: 5
            }
        }
    })
}

function _heightNav(){
    $().ready(function(){
        ch = $('#step-element-form').height();
        $('.step-element-container').css({
            height : ch + 100 + 'px'
        })
    });
}





// function initMap() {
//     var uluru = {lat: 18.9952635, lng: 72.82452650000005};
//     var map = new google.maps.Map(document.getElementById('map'), {
//       zoom: 18,
//       center: uluru
//     });
//     var marker = new google.maps.Marker({
//       position: uluru,
//       map: map
//     });
//   }

//Bind click event on left and right arrow to scroll the category tabs
// function _bindCategoryEvents(){
//     var scrollTo = 0;
//     $('#abc').on('click', "a", function () {
//         var activeItem = $('li.active');
//         var selectedItem = $(this).parent()

//         var activeIndex = $('li').index(activeItem);
//         var selectedIndex = $('li').index(selectedItem);

//         if (selectedIndex > activeIndex) {
//             scrollTo -= selectedItem.position().left - activeItem.position().left;
//             console.log('Scroll right');
//         } else {
//             scrollTo += Math.abs(selectedItem.position().left - activeItem.position().left);
//             console.log('Scroll left');
//             if (scrollTo >= 0) {
//                 scrollTo = 0;
//             }
//         }

//         $('ul').css('transform', 'translateX(' + scrollTo + 'px)');
//         activeItem.removeClass('active');
//         selectedItem.addClass('active');

//     });
// }



// Hide Header on on scroll down


//Fix Main Navigation after scroll
// function _bindNav(){
//     $(window).bind('scroll', function() {
//     var navHeight = $( window ).height() - 200;
//           if ($(window).scrollTop() > navHeight) {
//               $('#fix_navigation').addClass('fixed_main_navigation');
//           }
//           else {
//               $('#fix_navigation').removeClass('fixed_main_navigation');
//           }
//      });
//  }





// function animationHover(element, animation){
//     element = $(element);
//     element.hover(
//         function() {
//             element.addClass('animated ' + animation);
//         },
//         function(){
//             //wait for animation to finish before removing classes
//             window.setTimeout( function(){
//                 element.removeClass('animated ' + animation);
//             }, 2000);
//         });
// }

//Bind click event on left and right arrow to scroll the category tabs
// var _bindCategoryEvents = function(){
// 	var initialLeft = $(".search-list-content:first").offset().left;
// 	var initialRight = $(".search-list-content:last").offset().left;

// 	//To scroll the category tabs on click of the left arrow
// 	$(".scroll-left-arrow").unbind('click');
// 	$(".scroll-left-arrow").bind('click',function(event){
// 		if(-(parseInt($('.search-list-header-container').scrollLeft()) < maxScroll))
// 		{
// 			var currentLeft = parseInt($('.search-list-header-container').scrollLeft());
// 			$('.search-list-header-container').animate({scrollLeft: currentLeft+100}, 200);
// 			//$(".search-list-container").animate({"left": currentLeft-100+"px"},500);
// 		}
// 		else
// 		{
// 			$('.search-list-header-container').animate({scrollLeft: 682}, 200);;
// 			//$(".search-list-container").animate({"left": "-682px"},500);
// 		}
// 	});

// 	//To scroll the category tabs on click of the right arrow
// 	$(".scroll-right-arrow").unbind('click');
// 	$(".scroll-right-arrow").bind('click',function(event){
// 		if(parseInt($('.search-list-header-container').scrollLeft()) > 0)
// 		{
// 			var left = 100;
// 			var currentLeft = parseInt($('.search-list-header-container').scrollLeft());
// 			console.log(currentLeft);
// 			if(currentLeft < 100)
// 			{
// 				left = parseInt($('.search-list-header-container').scrollLeft());
// 			}
// 			$('.search-list-header-container').animate({scrollLeft: currentLeft-left}, 200);
// 			//$(".search-list-header-container").animate({"left": currentLeft-left+"px"},500);
// 		} else {
// 			$('.search-list-header-container').animate({scrollLeft: 0}, 200);
// 		}
// 	});
// }

