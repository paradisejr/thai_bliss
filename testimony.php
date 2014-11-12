<?php
$page_name = 'testimony';
include 'inc/meta.php';
include 'inc/header.php';
?>
<div class="page-wrapper">
	<div class="pattern"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="header-page">
					<h4>Testimony</h4>
				</div>
			</div>
		</div>
	</div>

	<div class="row mg0">
		<div class="col-md-12">

			<div id="container">

				&nbsp;

				<div id="main">

					<div id='features'>
						<div id='cover'>
						</div>
						<div class="wrap-book">
							<div class='page-design'>
								<img src="img/testimony-1.jpg" alt="">
							</div>
						</div>

						<div class="wrap-book">
							<div class='page-design'>
								<img src="img/testimony-1.jpg" alt="">
							</div>
						</div>

						<div class="wrap-book">
							<div class='page-design'>
								<img src="img/testimony-1.jpg" alt="">
							</div>
						</div>

						<div class="wrap-book">
							<div class='page-design'>
								<img src="img/testimony-1.jpg" alt="">
							</div>
						</div>

						<div class="wrap-book">
							<div class='page-design'>
								<img src="img/testimony-1.jpg" alt="">
							</div>
						</div>

						<div class="wrap-book">
							<div class='page-design'>
								<img src="img/testimony-1.jpg" alt="">
							</div>
						</div>



					</div> <!-- features -->

				</div> <!-- end #main -->

				<nav class="nav-control">
					<ul>
						<li><a id='first'     href="#" title='goto first page'   >First page</a></li>
						<li><a id='back'      href="#" title='go back one page'  >Back</a></li>
						<li><a id='next'      href="#" title='go foward one page'>Next</a></li>
						<li><a id='last'      href="#" title='goto last page'    >last page</a></li>
						<li><a id='zoomin'    href="#" title='zoom in'           >Zoom In</a></li>
						<li><a id='zoomout'   href="#" title='zoom out'          >Zoom Out</a></li>
						<li><a id='slideshow' href="#" title='start slideshow'   >Slide Show</a></li>
						<!-- <li><a id='flipsound' href="#" title='flip sound on/off' >Flip sound</a></li> -->
					</ul>
				</nav>

			</div>

		</div>
	</div>
</div> <!-- end page-wrapper -->

<?php include 'inc/footer.php'; ?>

<script type="text/javascript">
	$(document).ready(function() {
		$('#features').wowBook({
			height : 350
			,width  : 950
			,centeredWhenClosed : true
			,hardcovers : true
			,turnPageDuration : 1000
			,numberedPages : [1,-2]
			,controls : {
				zoomIn    : '#zoomin',
				zoomOut   : '#zoomout',
				next      : '#next',
				back      : '#back',
				first     : '#first',
				last      : '#last',
				slideShow : '#slideshow',
				flipSound : '#flipsound'
			}
		}).css({'display':'none', 'margin':'auto'}).fadeIn(1000);

		$("#cover").click(function(){
			$.wowBook("#features").advance();
		});

	});
</script>
