<!-- Contact -->
<section id="contact">
	<div class="container no-padding">
		<h2>Contact us <span></span></h2>
		<p class="title-sub">Have any questions? Want to keep in touch? We'd love to hear from you.</p>
		<h4>Get in touch</h4>
		<form class="contact-form" data-animated="0" id="contactForm" action="../php/contact.php" method="post">
			<div class="col-md-12 no-padding">
				<div class="col-md-4">
					<input type="text" name="senderName" id="senderName" placeholder="Name*" Required>
					<input type="email" name="senderEmail" id="senderEmail" placeholder="Email*" Required>
					<input type="text" name="subject" id="subject" placeholder="Subject">
				</div>
				<div class="col-md-8">
					<textarea name="message" id="message" placeholder="Message*" rows="5" Required></textarea>
				</div>
			</div>
			<div class="col-md-12">
				<div class="space10"></div>
				<button type="submit" id="about_pg_sendmessage_btn" >Send Message</button>
			</div>
		</form>
		<div id="successMessage" class="successmessage">
			<p><span class="success-ico"></span> Thanks for sending your message! We'll get back to you shortly.</p>
		</div>
		<div id="failureMessage" class="errormessage">
			<p><span class="error-ico"></span> There was a problem sending your message. Please try again.</p>
		</div>
		<div id="incompleteMessage" class="statusMessage">
			<p>Please complete all the fields in the form before sending.</p>
		</div>
	</div>
</section>
<!-- Contact -->