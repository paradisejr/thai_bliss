$(function() {

	$(window).resize(function (){
		if ( $(window).width() > 320 ) {
			$('.main-nav.menu-respon').removeAttr('style');
		}
	})

	$('span.nav-btn').click(function () {
		$('.main-nav.menu-respon').slideToggle();
	})

});