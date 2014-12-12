$(function() {

	jQuery("#youtube-player-container").tubeplayer({
		autoPlay: true,
		width: 1, // the width of the player
		height: 1, // the height of the player
		allowFullScreen: "true", // true by default, allow user to go full screen
		initialVideo: "7YpZrylt8_E", // the video that is loaded into the player
		preferredQuality: "default",// preferred quality: default, small, medium, large, hd720
		onPlay: function(id){}, // after the play method is called
		onPause: function(){}, // after the pause method is called
		onStop: function(){}, // after the player is stopped
		onSeek: function(time){}, // after the video has been seeked to a defined point
		onMute: function(){}, // after the player is muted
		onUnMute: function(){} // after the player is unmuted
	});


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
		var owl2 = $("#owl-demo2");

		owl.owlCarousel({
			itemsCustom : [
			[0, 1],
			[450, 2],
			[600, 3],
			[700, 3],
			[1000, 1],
			[1200, 5],
			[1400, 5],
			[1600, 5]
			],
			navigation : false,
			pagination : false

		});

		owl2.owlCarousel({
			itemsCustom : [
			[0, 1],
			[450, 1],
			[600, 1],
			[700, 1],
			[1000, 1]
			],
			navigation : true,
			pagination : false
		});

		$('.fancybox').fancybox();

	});

});