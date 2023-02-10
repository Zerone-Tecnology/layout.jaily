$(function () {

	//SVG Fallback
	if (!Modernizr.svg) {
		$("img[src*='svg']").attr("src", function () {
			return $(this).attr("src").replace(".svg", ".png");
		});
	};

	//E-mail Ajax Send
	//Documentation & Example: https://github.com/agragregra/uniMail
	$("form").submit(function () { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "mail.php", //Change
			data: th.serialize()
		}).done(function () {
			$(".call_back_success").css("display", "flex");
			$(".mailing_content").css("display", "none");
			setTimeout(function () {
				// Done Functions
				th.trigger("reset");
			}, 1000);
		});
		return false;
	});

	//Chrome Smooth Scroll
	try {
		$.browserSelector();
		if ($("html").hasClass("chrome")) {
			$.smoothScroll();
		}
	} catch (err) {

	};

	$("img, a").on("dragstart", function (event) { event.preventDefault(); });

});

$(window).load(function () {

	$(".loader_inner").fadeOut();
	$(".loader").delay(400).fadeOut("slow");

	$('.review-carousel').owlCarousel({
		loop: true,
		margin: 25,
		nav: true,
		responsiveClass: true,
		navText: ["<img src='img/nav_carousel_left.png'>", "<img src='img/nav_carousel_right.png'>"],
		responsive: {
			0: {
				items: 1
			},
			1440: {
				items: 2
			}
		}
	})
	$('.portfolio_carousel .owl-carousel').owlCarousel({
		loop: true,
		margin: 25,
		// stagePadding: 0,
		nav: true,
		responsiveClass: true,
		navText: ["<img src='img/nav_carousel_left.png'>", "<img src='img/nav_carousel_right.png'>"],
		items: 1
	})
	if ($(window).width() < 321) {
		$('.review-carousel').owlCarousel({
			stagePadding: 10,
		})
	}
	$('.owl-carousel').owlCarousel({
		center: true,
		items: 1,
		loop: true,
		autoplay: true,
		autoplayTimeout: 5000,
		autoplayHoverPause: true
	})
	$('.nav li a').on('click', function (e) {
		e.preventDefault();
		$('html, body').animate({
			scrollTop: $('#' + $(this).data('scroll')).offset().top,
		}, 800)
	});
	$('.footer_nav li a').on('click', function (e) {
		e.preventDefault();
		$('html, body').animate({
			scrollTop: $('#' + $(this).data('scroll')).offset().top,
		}, 800)
	});
	$(".review_show_more").each(function (i) {
		if ($(this).height() > 88) {
			$(this).addClass('line_clamp');
		}
	});
	$('.review_show_more').click(function(){
		if($(this).hasClass("line_clamp")){
			$(this).removeClass("line_clamp");
			$(this).addClass("remove_show_more");
		}else if($(this).hasClass("remove_show_more")){
			$(this).removeClass("remove_show_more");
			$(this).addClass("line_clamp");
		}
	});
});
