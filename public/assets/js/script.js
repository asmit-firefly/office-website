(function ($) {
	$(document).ready(function () {
	
		//Owl carousel
		//-----------------------------------------------

		$('.owl-carousel').owlCarousel({
			loop: true,
			// autoplay: true,
			margin: 10,
			responsiveClass: true,
			responsive: {
				0: {
					items: 1,
					nav: true
				},
				600: {
					items: 3,
					nav: false
				},
				1000: {
					items: 3,
					nav: true,
					navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
					loop: false,
					margin: 20
				}
			}
		})
		//Scroll totop
		//-----------------------------------------------
		$(window).scroll(function () {
			if ($(this).scrollTop() != 0) {
				$(".scrollToTop").fadeIn();
			} else {
				$(".scrollToTop").fadeOut();
			}
			/*var scroll = $(window).scrollTop();
			$("#inner_banner").css({
				width: (100 + scroll / 5) + "%",
				top: -(scroll / 10) + "%",
				//Blur suggestion from @janwagner: https://codepen.io/janwagner/ in comments
				"-webkit-filter": "blur(" - (scroll / 200) - "px)",
				filter: "blur(" + (scroll / 200) + "px)"
			});*/
		});

		$(".scrollToTop").click(function () {
			$("body,html").animate({
				scrollTop: 0
			}, 800);
		});
		$(function () { var b = "fadeInRight"; var c; var a; d($("#myTab a"), $(".tab-content")); function d(e, f, g) { e.click(function (i) { i.preventDefault(); $(this).tab("show"); var h = $(this).data("easein"); if (c) { c.removeClass(a); } if (h) { f.find("div.active").addClass("animated " + h); a = h; } else { if (g) { f.find("div.active").addClass("animated " + g); a = g; } else { f.find("div.active").addClass("animated " + b); a = b; } } c = f.find("div.active"); }); } $("a[rel=popover]").popover().click(function (f) { f.preventDefault(); if ($(this).data("easein") != undefined) { $(this).next().removeClass($(this).data("easein")).addClass("animated " + $(this).data("easein")); } else { $(this).next().addClass("animated " + b); } }); });
		$('a[href*="#"]').on('click', function (e) {
			e.preventDefault();
		
			$('html, body').animate({
				scrollTop: $($(this).attr('href')).offset().top
			}, 500, 'linear');
		});
	}); // End document ready

})(this.jQuery);



AOS.init();






