<header id="main-header">

	<div class="pattern header"></div>
	<div class="container">
		<div class="row mg0">
			<div class="box-logo">
				<div class="col-xs-12 col-sm-5 col-md-3">
					<div class="logo">
						<a href="index.php"><img src="img/logo.png" alt=""></a>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-7 col-md-9">
				<div class="row">
					<div class="contact">
						<ul>
							<li><p>Tel: 02-6262-9297</p><i class="icon tel"></i></li>
							<li><a class="fancybox" href="#maps-details">Maps</a><i class="icon maps"></i></li>
							<li class="check"><a href="javascript:" data-set="0" onClick='over_click($(this))'>Sound</a><img src="img/icon/icon-sound.png" alt=""></li>
							<li>
								<a href="">
									<img class="facebook" src="img/icon/icon-facebook.png" alt="">
									<img class="facebook mini" src="img/icon/icon-mini-facebook.png" alt="">
								</a>
							</li>
						</ul>
					</div>

					<!-- Start FancyBox Maps -->
					<div id="maps-details">
						<div class="fancy-wrapper">
							<h3>thai bliss Map</h3>

							<div class="col-md-7 col-sm-7">
								<div class="maps-area">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3257.0814953148415!2d149.12435100000002!3d-35.2791!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b164d42fb5efdf5%3A0xdecdb04bfea6b5e3!2sThai+Bliss+Therapeutic+Massage!5e0!3m2!1sth!2sth!4v1414926416343" width="800" height="260" frameborder="0" style="border:0"></iframe>
								</div>
							</div>
							<div class="col-md-5 col-sm-5">
								<div class="address-area">
									<h4>thaiblissmassage</h4>
									<p>
										Shop 2, Childers Square (University Avenue Side)
										14 Childers Street, Canberra City  ACT
									</p>
									<span class="text">Phone :</span>
									<p>02 6262 9297</p> <br>
									<span class="text">Email :</span>
									<p>info@thaiblissmassage.com.au</p>

									<div class="trading-hourse">
										<span>Trading Hours</span>
										<p>10am- 10pm</p>
										<p>Open 7 days a week</p> <br>
										<span>Please call us in advance to avoid any disappointment</span>
									</div>
								</div>
							</div>
						</div> <!-- end fancy-wrapper -->
					</div> <!-- end maps details -->
					<!-- end FancyBox Maps -->

				</div> <!-- end row -->

				<div class="row">
					<div class="address">
						<span>Shop 2, Childers Square (University Avenue Side) 14 Childers Street, Canberra City ACT</span>
					</div>
				</div>
				<div class="row" style="margin-right: -6px;">
					<div class="main-nav">
						<ul>
							<li class="nav-bar <?php if ( $page_name == 'home') { echo 'active'; } ?>"><a href="index.php">Home</a></li>
							<li class="nav-bar <?php if ( $page_name == 'about') { echo 'active'; } ?>"><a href="about.php">About Us</a></li>
							<li class="nav-bar <?php if ( $page_name == 'treatments') { echo 'active'; } ?>"><a href="treatments.php">TreatMents</a></li>
							<li class="nav-bar <?php if ( $page_name == 'products') { echo 'active'; } ?>"><a href="products.php">Products</a></li>
							<li class="nav-bar <?php if ( $page_name == 'gallery') { echo 'active'; } ?>"><a href="gallery.php">Gallery</a></li>
							<li class="nav-bar <?php if ( $page_name == 'testimony') { echo 'active'; } ?>"><a href="testimony.php">Testimony</a></li>
							<li class="nav-bar submenu <?php if ( $page_name == 'offers') { echo 'active'; } ?>"><a href="offers-gift.php">Offers</a>
								<ul class="sub-menu">
									<li class="<?php if ( $page_name == 'offers') { echo 'active'; } ?>"><a href="offers-gift.php">Buy Gift Certificates</a></li>
									<li class="<?php if ( $page_name == 'offers-special') { echo 'active'; } ?>"><a href="offers-special.php">Special Offers </a></li>
									<li class="<?php if ( $page_name == 'offers-membership') { echo 'active'; } ?>"><a href="offers-membership.php">Membership</a></li>
								</ul>
							</li>
							<li class="nav-bar <?php if ( $page_name == 'faqs') { echo 'active'; } ?>"><a href="faqs.php">FAQ</a></li>
							<li class="nav-bar <?php if ( $page_name == 'contact') { echo 'active'; } ?>"><a href="contact.php">ContactUs</a></li>
						</ul>
					</div>
				</div>
				<div class="btn-home">
					<a href="index.php"><img src="img/home-icon.png" alt=""></a>
				</div>
			</div>

			<span class="nav-btn">
				<i class="ico-bar"></i>
			</span>
			<div class="main-nav menu-respon">
				<ul>
					<li class="nav-bar <?php if ( $page_name == 'home') { echo 'active'; } ?>"><a href="index.php">Home</a></li>
					<li class="nav-bar <?php if ( $page_name == 'about') { echo 'active'; } ?>"><a href="about.php">About Us</a></li>
					<li class="nav-bar <?php if ( $page_name == 'treatments') { echo 'active'; } ?>"><a href="treatments.php">TreatMents</a></li>
					<li class="nav-bar <?php if ( $page_name == 'products') { echo 'active'; } ?>"><a href="products.php">Products</a></li>
					<li class="nav-bar <?php if ( $page_name == 'gallery') { echo 'active'; } ?>"><a href="gallery.php">Gallery</a></li>
					<li class="nav-bar <?php if ( $page_name == 'testimony') { echo 'active'; } ?>"><a href="testimony.php">Testimony</a></li>
					<li class="nav-bar submenu <?php if ( $page_name == 'offers') { echo 'active'; } ?>"><a href="offers-gift.php">Offers</a>
						<ul class="sub-menu-2">
							<li class="<?php if ( $page_name == 'offers') { echo 'active'; } ?>"><a href="offers-gift.php">Buy Gift Certificates</a></li>
							<li class="<?php if ( $page_name == 'offers-special') { echo 'active'; } ?>"><a href="offers-special.php">Special Offers </a></li>
							<li class="<?php if ( $page_name == 'offers-membership') { echo 'active'; } ?>"><a href="offers-membership.php">Membership</a></li>
						</ul>
					</li>
					<li class="nav-bar <?php if ( $page_name == 'faqs') { echo 'active'; } ?>"><a href="faqs.php">FAQ</a></li>
					<li class="nav-bar <?php if ( $page_name == 'contact') { echo 'active'; } ?>"><a href="contact.php">ContactUs</a></li>
				</ul>
			</div>
		</div> <!-- end row -->
	</div> <!-- end container -->
	<div id='youtube-player-container'> </div>

	<script>
		function over_click (a) {
			var v = a.attr( 'data-set' );
			if ( v == 0 ) {
				jQuery("#youtube-player-container").tubeplayer("pause");
				a.attr( 'data-set', 1 );
			$('.check img').attr( 'src' ,'img/icon/icon-sound-off.png' ); // pause
		} else {
			jQuery("#youtube-player-container").tubeplayer("play");
			a.attr( 'data-set', 0 )
			$('.check img').attr( 'src' ,'img/icon/icon-sound.png' ); // play
		}
	}
</script>
</header>