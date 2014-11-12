<?php
$page_name = 'faqs';
include 'inc/meta.php';
include 'inc/header.php';
?>

<script>
	$(function() {
		$( "#datepicker" ).datepicker();
	});
</script>

<div class="page-wrapper">
	<div class="pattern"></div>

	<div class="container">

		<div class="row">
			<div class="col-md-12">
				<div class="header-page">
					<h4>Contact Us</h4>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="form-box">
					<form class="form-horizontal" role="form">
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-4 control-label">First Name*</label>
							<div class="col-sm-8">
								<input type="email" class="form-control" id="inputEmail3" placeholder="First Name">
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-4 control-label">Last Name*</label>
							<div class="col-sm-8">
								<input type="email" class="form-control" id="inputEmail3" placeholder="Last Name">
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-4 control-label">Mobile number*</label>
							<div class="col-sm-8">
								<input type="email" class="form-control" id="inputEmail3" placeholder="Mobile number">
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-4 control-label">Email*</label>
							<div class="col-sm-8">
								<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-4 control-label">Type of massage</label>
							<div class="col-sm-8">
								<select class="selectpicker select-design">
									<option>Select Type of massage</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-4 control-label">Session time</label>
							<div class="col-sm-8">
								<select class="selectpicker select-design">
									<option>Select Session time</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-4 control-label">Date</label>
							<div class="col-sm-8">
								<div class="button-caret date"></div>
								<input type="text" id="datepicker" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-4 control-label">Appointment Time</label>
							<div class="col-sm-8">
								<select class="selectpicker select-design">
									<option>Select Appointment Time</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-4 control-label">Message*</label>
							<div class="col-sm-8">
								<textarea type="email" class="form-control" id="inputEmail3" placeholder="Message"></textarea>
							</div>
						</div>
					</form>
				</div>

			</div>
			<div class="col-md-6">
				<div class="contact-box">
					<div class="maps-area">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3257.0814953148415!2d149.12435100000002!3d-35.2791!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b164d42fb5efdf5%3A0xdecdb04bfea6b5e3!2sThai+Bliss+Therapeutic+Massage!5e0!3m2!1sth!2sth!4v1414926416343" width="800" height="200" frameborder="0" style="border:0"></iframe>
					</div>

					<div class="row">
						<div class="col-sm-12">
							<div class="address-area">
								<h4>thaiblissmassage</h4>
								<p>
									Shop 2, Childers Square (University Avenue Side)
									14 Childers Street, Canberra City  ACT
								</p>
								<span class="text">Phone :</span>
								<p>02 6262 9297</p>
								<span class="text">Email :</span>
								<p>info@thaiblissmassage.com.au</p>

								<div class="trading-hourse">
									<span>Trading Hours</span>
									<p>10am- 10pm</p>
									<p>Open 7 days a week</p>
									<span>Please call us in advance to avoid any disappointment</span>
								</div>
							</div>
						</div>
					</div>


				</div>
			</div>

		</div> <!-- end row -->

	</div> <!-- end container -->

</div> <!-- end page-wrapper -->

<?php include 'inc/footer.php'; ?>

