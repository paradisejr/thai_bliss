$(function() {



	$(window).resize(function (){
		if ( $(window).width() > 320 ) {
			$('.main-nav.menu-respon').removeAttr('style');
		}
	})

	$('span.nav-btn').click(function () {
		$('.main-nav.menu-respon').slideToggle();
	})



	$(document).ready(function() {

		var owl = $("#owl-demo");

		owl.owlCarousel({
			itemsCustom : [
			[0, 1],
			[450, 2],
			[600, 3],
			[700, 3],
			[1000, 3],
			[1200, 5],
			[1400, 5],
			[1600, 5]
			],
			navigation : false

		});

	});



});