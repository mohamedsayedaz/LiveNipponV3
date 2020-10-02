<?php get_header(); ?>
<div class="jumbotron" id="contact-us">
	<div class="row">
		<div class="col-md-6 col-sm-6 col-lg-6 center-d">
			<h2 class="text-center" id="contact-title">Contact Us</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 col-sm-6 col-lg-6 center-d" id="contact-form">
			<form method="POST" action="">
				<input type="text" name="name" class="form-control contact-txt" placeholder="Enter Your Name">
				<input type="email" name="email" class="form-control contact-txt" placeholder="Enter Your Email">
				<input type="text" name="mobile" class="form-control contact-txt" placeholder="Enter Your Mobile Number">
				<textarea class="form-control contact-txt" placeholder="Enter Your Message"></textarea>
				<input type="submit" name="sendmail" value="Send" class="send-btn">
			</form>
		</div>
	</div>
</div>
<?php get_footer(); ?>
