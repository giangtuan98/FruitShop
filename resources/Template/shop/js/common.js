(function($) {

"use strict";

$(document).ready(function() {

	// SMOOTH SCROLL
	$('.header a[href*="#"]:not([href="#"])').on('click', function() {
		if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if ($(window).width() <= 991) {
				$('.navbar-collapse').collapse('hide');
				if (target.length) {
					$('html, body').animate({
						scrollTop: target.offset().top - 60
					}, 1000);
					return false;
				}
			}
			if (target.length) {
				$('html, body').animate({
					scrollTop: target.offset().top - 90
				}, 1000);
				return false;
			}
		}
	});

	// PRODUCTS COUNT
	$('.less').on('click', function() {
		var $quantity = $(this).parent().find('input');
		var count = parseInt($quantity.val()) - 1;
		count = count < 1 ? 1 : count;
		$quantity.val(count);
		$quantity.change();
		return false;
	});
	$('.more').on('click', function() {
		var $quantity = $(this).parent().find('input');
		$quantity.val(parseInt($quantity.val()) + 1);
		$quantity.change();
		return false;
	});

	// PAGE-SCROLL ACTIONS
	var headerFixed;
	$('.scroll-top').hide();

	$(window).on('scroll', function() {
		if ($(window).scrollTop() >= 10){
			$('.navbar').addClass('scroll-header');
			$('.scroll-top').fadeIn();
		} else {
			$('.navbar').removeClass('scroll-header');
			$('.scroll-top').fadeOut();
		}
	});
	$('.scroll-top').on('click', function() {
		$('html, body').animate({ scrollTop: 0 }, 1000);
		return false;
	});

	// CLICK FUNCTIONS
	$("#search").on('click', function() {
		$(".search-form").toggleClass("on");
	});
	$(".navbar-toggler").on('click', function() {
		$(".navbar").toggleClass("header-up-bg");
	});

	$('.close-form').on('click', function() {
		$('.search-form').removeClass('on');
		return false;
	});

	$("#cart").on('click', function() {
		$(".cart-popup").toggleClass("on");
		return false;
	});

	$(window).on('scroll', function() {
		$(".cart-popup").removeClass("on");
		$('.search-form').removeClass('on');
	});

	//SLIDER PRODUCTS SLIDER
	if ($('.slider-products').length) {
		$('.slider-products').slick({
			infinite: true,
			slidesToShow: 4,
			nextArrow: '<div class="nextArrow"><i class="fa fa-angle-right"></i></div>',
			prevArrow: '<div class="prevArrow"><i class="fa fa-angle-left"></i></div>',
			responsive: [
			{
				breakpoint: 1199,
				settings: {
					slidesToShow: 3
				}
			},
			{
				breakpoint: 991,
				settings: {
					slidesToShow: 2
				}
			},
			{
				breakpoint: 575,
				settings: {
					infinite: true,
					slidesToShow: 1,
					nextArrow: '<div class="nextArrow"><i class="fa fa-angle-right"></i></div>',
					prevArrow: '<div class="prevArrow"><i class="fa fa-angle-left"></i></div>',
				}
			}
			]
		});
	}

	// NEWS SLIDER
	if ($('.news-slider').length) {
		$('.news-slider').slick({
			infinite: true,
			slidesToShow: 2,
			nextArrow: '<div class="nextArrowNews"><i class="fa fa-angle-right"></i></div>',
			prevArrow: '<div class="prevArrowNews"><i class="fa fa-angle-left"></i></div>',
			responsive: [
			{
				breakpoint: 767,
				settings: {
					infinite: true,
					slidesToShow: 1,
					nextArrow: '<div class="nextArrowNews"><i class="fa fa-angle-right"></i></div>',
					prevArrow: '<div class="prevArrowNews"><i class="fa fa-angle-left"></i></div>',
				}
			}
			]
		});
	}

	// TESTIMONIALS SLIDER
	$('.slider-for').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		asNavFor: '.slider-nav',
		swipe: false,
		autoplay: true,
		autoplaySpeed: 10000
	});
	$('.slider-nav').slick({
		slidesToShow: 3,
		asNavFor: '.slider-for',
		focusOnSelect: true,
		arrows: false,
		centerMode: true,
		swipe: false
	});

	//CARD ITEM SLIDER
	$('.shop-slider-for').slick({
		swipe: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		asNavFor: '.shop-slider-nav'
	});
	$('.shop-slider-nav').slick({
		slidesToShow: 5,
		asNavFor: '.shop-slider-for',
		focusOnSelect: true,
		arrows: false,
	});

	// SHOP SINGLE LIGHTBOX
	if ($('.card-item-modal-slider-for').length) {
		$('.card-item-modal-slider-for').slickLightbox({
			src: 'src',
			itemSelector: '.slider-for-img-wrap img'
		});
	}


	//CARD ITEM MODAL SLIDER
	if ($('#card-item-modal').length) {
		$('#card-item-modal').on('shown.bs.modal', function (e) {
			$('.modal-slider-for').slick("getSlick").refresh();
			$('.modal-slider-nav').slick("getSlick").refresh();
		})
		$('.modal-slider-for').slick({
			swipe: false,
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			fade: true,
			asNavFor: '.modal-slider-nav'
		});
		$('.modal-slider-nav').slick({
			slidesToShow: 5,
			asNavFor: '.modal-slider-for',
			focusOnSelect: true,
			arrows: false,
		});
	}

	// SHOP SHUFFLE
	if ($('#shuffle-grid').length) {
		var Shuffle = window.shuffle;
		var myShuffle = new Shuffle(document.getElementById('shuffle-grid'), {
			itemSelector: '.shuffle-item',
			sizer: '.shuffle-item',
			speed: 400,
			easing: 'ease',
		});
		myShuffle.update();
		$('.shuffle-buttons-list a').on('click' , function(){
			$('.shuffle-buttons-list a').removeClass('active');
			$(this).addClass('active');
			var catName = $(this).attr('data-group');
			myShuffle.filter(catName, Shuffle);
			myShuffle.update();
		});
	}

	// COUNTDOWN TIMER BIG
	if ($('.countdown_timer').length) {
		$('.countdown_timer').ClassyCountdown({
			theme: "white",
			end: $.now() + 322800 ,
			labelsOptions: {
				style: 'display:block; font-size:10px; line-height: 1; margin-top:5px'
			},
			style: {
				element: "",
				textResponsive: .5,
				days: {
					gauge: {
						thickness: .04,
						bgColor: "#787878",
						fgColor: "#bac570"
					},
					textCSS: 'font-family:\'Lato\'; font-size:10px; font-weight:900; color:#787878;'
				},
				hours: {
					gauge: {
						thickness: .05,
						bgColor: "#787878",
						fgColor: "#bac570"
					},
					textCSS: 'font-family:\'Lato\'; font-size:10px; font-weight:900; color:#787878;'
				},
				minutes: {
					gauge: {
						thickness: .05,
						bgColor: "#787878",
						fgColor: "#bac570"
					},
					textCSS: 'font-family:\'Lato\'; font-size:10px; font-weight:900; color:#787878;'
				},
				seconds: {
					gauge: {
						thickness: .05,
						bgColor: "#787878",
						fgColor: "#bac570"
					},
					textCSS: 'font-family:\'Lato\'; font-size:10px; font-weight:900; color:#787878;'
				}
			}
		});
	}

	// COUNTDOWN TIMER SMALL
	if ($('.countdown_timer_sm').length) {
		$('.countdown_timer_sm').ClassyCountdown({
			theme: "white",
			end: $.now() + 322800 ,
			labelsOptions: {
				style: 'display:block; font-size:8px; line-height: 1; margin-top:5px'
			},
			style: {
				element: "",
				textResponsive: .5,
				days: {
					gauge: {
						thickness: .1,
						bgColor: "#787878",
						fgColor: "#bac570"
					},
					textCSS: 'font-family:\'Lato\'; font-size:200px; font-weight:900; color:#787878;'
				},
				hours: {
					gauge: {
						thickness: .1,
						bgColor: "#787878",
						fgColor: "#bac570"
					},
					textCSS: 'font-family:\'Lato\'; font-size:200px; font-weight:900; color:#787878;'
				},
				minutes: {
					gauge: {
						thickness: .1,
						bgColor: "#787878",
						fgColor: "#bac570"
					},
					textCSS: 'font-family:\'Lato\'; font-size:200px; font-weight:900; color:#787878;'
				},
				seconds: {
					gauge: {
						thickness: .1,
						bgColor: "#787878",
						fgColor: "#bac570"
					},
					textCSS: 'font-family:\'Lato\'; font-size:200px; font-weight:900; color:#787878;'
				}
			}
		});
	}

	// CHECKOUT STEPS
	if ($('#checkout_steps').length) {
		var form = $("#checkout_steps").show();
		form.steps({
			headerTag: "h4",
			bodyTag: "fieldset",
			transitionEffect: "fade",
			labels: {
				cancel: "Cancel",
				current: "current step:",
				pagination: "Pagination",
				finish: "Place order",
				next: "Continue",
				previous: "Back",
				loading: "Loading ..."
			},
			onStepChanging: function(event, currentIndex, newIndex) {
				if (currentIndex > newIndex) {
					return true;
				}
				if (currentIndex < newIndex) {
					form.find(".body:eq(" + newIndex + ") label.error").remove();
					form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
				}
				form.validate().settings.ignore = ":disabled,:hidden";
				return form.valid();
			},
			onStepChanged: function(event, currentIndex, priorIndex) {
			},
			onFinishing: function(event, currentIndex) {
				form.validate().settings.ignore = ":disabled";
				return form.valid();
			},
			onFinished: function(event, currentIndex) {
				window.location.href = "order.html";
			}
		}).validate({
			errorPlacement: function errorPlacement(error, element) { element.before(error); },
			rules: {
				confirm: {
					equalTo: "#password-2"
				}
			}
		});
	}

	//CALENDAR
	if ($('#my-calendar').length) {
		$("#my-calendar").zabuto_calendar({
			language: "en",
			weekstartson: 0,
			today: true,
		});
	}

	// GOOGLE MAPS
	if ($('#map').length) {
		var map;
		map = new google.maps.Map(document.getElementById('map'), {
			center: {lat: 51.492548, lng: -0.1324631},
			zoom: 15
		});
		var marker = new google.maps.Marker({
			position: {lat: 51.494784, lng:  -0.159385},
			map: map,
			icon: 'img/map-marker.png'
		});
	}
});

})(jQuery);