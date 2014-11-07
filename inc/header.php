<header id="main-header">
	<div class="pattern header"></div>
	<div class="container">
		<div class="row">
			<div class="box-logo">
				<div class="col-xs-12 col-sm-5 col-md-4">
					<div class="logo">
						<img src="img/logo.png" alt="">
					</div>
					<div class="logo-text">
						<img src="img/logo-text.png" alt="">
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-7 col-md-8 ">
				<div class="row">
					<div class="contact">
						<ul>
							<li><a href="">Tel: 02-6262-9297</a><i class="icon tel"></i></li>
							<li><a href="">Maps</a><i class="icon maps"></i></li>
							<li><a href="">Sound</a><i class="icon sound"></i></li>
							<li>
								<a href="">
									<img class="facebook" src="img/icon/icon-facebook.png" alt="">
									<img class="facebook mini" src="img/icon/icon-mini-facebook.png" alt="">
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="address">
						<span>Shop 2, Childers Square (University Avenue Side) 14 Childers Street, Canberra City ACT</span>
					</div>
				</div>
				<div class="row">
					<div class="main-nav">
						<ul>
							<li class="nav-bar <?php if ( $page_name == 'home') { echo 'active'; } ?>"><a href="index.php">Home</a></li>
							<li class="nav-bar <?php if ( $page_name == 'about') { echo 'active'; } ?>"><a href="about.php">About Us</a></li>
							<li class="nav-bar <?php if ( $page_name == 'treatments') { echo 'active'; } ?>"><a href="treatments.php">TreatMents</a></li>
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
			</div>
			<span class="nav-btn">
				<i class="ico-bar"></i>
			</span>
			<div class="main-nav menu-respon">
				<ul>
					<li class="nav-bar <?php if ( $page_name == 'home') { echo 'active'; } ?>"><a href="index.php">Home</a></li>
					<li class="nav-bar <?php if ( $page_name == 'about') { echo 'active'; } ?>"><a href="about.php">About Us</a></li>
					<li class="nav-bar <?php if ( $page_name == 'treatments') { echo 'active'; } ?>"><a href="treatments.php">TreatMents</a></li>
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
		</div> <!-- end row -->
	</div> <!-- end container -->
</header>