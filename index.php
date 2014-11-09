<?php
$page_name = 'home';
include 'inc/meta.php';
include 'inc/header.php';
?>

<script>

	jQuery(function() {

		jQuery('#bannerscollection_zoominout_opportune').bannerscollection_zoominout({
			skin: 'opportune',
			autoPlay: 10,
			responsive:true,
			width100Proc:true,
			width: 1920,
			height: 600,
			circleRadius:8,
			circleLineWidth:4,
			circleColor: "#ffffff", //849ef3
			circleAlpha: 50,
			behindCircleColor: "#000000",
			behindCircleAlpha: 10,
			thumbsWrapperMarginTop:25
		});


	});
</script>

<div class="page-wrapper">

	<div class="slide-banner">
		<div id="bannerscollection_zoominout_opportune">
			<div class="myloader"></div>
			<!-- CONTENT -->
			<ul class="bannerscollection_zoominout_list">
				<li data-bottom-thumb="img/thumbs/slide-01.jpg" data-initialZoom="1" data-finalZoom="0.77" data-horizontalPosition="center" data-verticalPosition="top" data-text-id="#bannerscollection_zoominout_photoText1" data-target="_blank" ><img src="img/banner-home-1.jpg" alt="" width="2500" height="782" /></li>
				<li data-bottom-thumb="img/thumbs/slide-02.jpg" data-initialZoom="1" data-finalZoom="0.77" data-horizontalPosition="left" data-verticalPosition="center" data-text-id="#bannerscollection_zoominout_photoText2" data-target="_blank" ><img src="img/banner-home-2.jpg" alt="" width="2500" height="782" /></li>
				<li data-bottom-thumb="img/thumbs/slide-03.jpg" data-initialZoom="1" data-finalZoom="0.77" data-horizontalPosition="right" data-verticalPosition="center" data-text-id="#bannerscollection_zoominout_photoText3" data-target="_blank" ><img src="img/banner-home-3.jpg" alt="" width="2500" height="782" /></li>
			</ul>
			<!-- ENDContent -->
			<!-- TEXTS -->
			<div id="bannerscollection_zoominout_photoText1" class="bannerscollection_zoominout_texts">
				<div class="bannerscollection_zoominout_text_line textElement22_opportuneFullWidth" data-initial-left="300" data-initial-top="180" data-final-left="300" data-final-top="50" data-duration="0.5" data-fade-start="0" data-delay="0.5"><h3>"Luxury For The</h3></div>
				<div class="bannerscollection_zoominout_text_line textElement21_opportuneFullWidth" data-initial-left="600" data-initial-top="150" data-final-left="450" data-final-top="130" data-duration="0.5" data-fade-start="0" data-delay="0"><h3>Body And Mind"</h3></div>
			</div>

			<div id="bannerscollection_zoominout_photoText2" class="bannerscollection_zoominout_texts">
				<div class="bannerscollection_zoominout_text_line textElement22_opportuneFullWidth" data-initial-left="300" data-initial-top="180" data-final-left="300" data-final-top="50" data-duration="0.5" data-fade-start="0" data-delay="0.5"><h3>"Luxury For The</h3></div>
				<div class="bannerscollection_zoominout_text_line textElement21_opportuneFullWidth" data-initial-left="600" data-initial-top="150" data-final-left="450" data-final-top="130" data-duration="0.5" data-fade-start="0" data-delay="0"><h3>Body And Mind" DEMO 2</h3></div>
			</div>

			<div id="bannerscollection_zoominout_photoText3" class="bannerscollection_zoominout_texts">
				<div class="bannerscollection_zoominout_text_line textElement22_opportuneFullWidth" data-initial-left="300" data-initial-top="180" data-final-left="300" data-final-top="50" data-duration="0.5" data-fade-start="0" data-delay="0.5"><h3>"Luxury For The</h3></div>
				<div class="bannerscollection_zoominout_text_line textElement21_opportuneFullWidth" data-initial-left="600" data-initial-top="150" data-final-left="450" data-final-top="130" data-duration="0.5" data-fade-start="0" data-delay="0"><h3>Body And Mind DEMO 3"</h3></div>
			</div>
			<!--EndTexts-->

		</div>
	</div>

	<div class="menu-link">

		<div class="pattern footer"></div>

		<div class="container">

			<div class="row">

				<div id="owl-demo" class="owl-carousel owl-theme">
					<div class="item"><span class="menu-bar active"><a href="">Massage Treatments</a></span></div>
					<div class="item"><span class="menu-bar"><a href="">Gift Certificates</a></span></div>
					<div class="item"><span class="menu-bar"><a href="">Special offers</a></span></div>
					<div class="item"><span class="menu-bar"><a href="">Memberships</a></span></div>
					<div class="item"><span class="menu-bar"><a href="">Products</a></span></div>
				</div>

				<!-- <ul>
					<li class="menu-bar active"><a href="">Massage Treatments</a></li>
					<li class="menu-bar"><a href="">Gift Certificates</a></li>
					<li class="menu-bar"><a href="">Special offers</a></li>
					<li class="menu-bar"><a href="">Memberships</a></li>
					<li class="menu-bar"><a href="">Products</a></li>
				</ul> -->

			</div>

		</div>

	</div>

</div> <!-- end page-wrapper -->

<?php include 'inc/footer.php'; ?>

