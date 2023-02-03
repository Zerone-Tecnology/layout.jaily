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
			alert("Thank you!");
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
		// stagePadding: 0,
		nav: true,
		responsiveClass:true,
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
	if ($(window).width() < 321) {
		$('.review-carousel').owlCarousel({
			stagePadding: 10,
		})
	 }
	$('.owl-carousel').owlCarousel({
		center: true,
		items: 1,
		loop: true,
		// autoplay: true,
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
});
