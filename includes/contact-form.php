<div class="row">
	<div class="column half">
		<?php if (getCurrentPage() == 'contact'): ?>
			<p>We know that finding the right tutor for your child can be a daunting task. We are here to help.</p>
		<?php endif; ?>
		<p>Fill out the form or contact us directly.<br>
		Paul Tryon will be in touch within 24 hours.</p>

	</div>
	<div class="column half">
		<div class="vertical-center-container">
			<div class="vertical-center-items">
				<a href="tel:(917) 819-2468" class="contact-link"><i class="fa fa-phone" alt="Call Us"></i><span>(917) 819-2468</span></a>
				<a href="mailto:buildingbrainiacs@gmail.com" class="contact-link"><i class="fa fa-envelope" alt="Email Us"></i><span>buildingbrainiacs@gmail.com</span></a>
			</div>
		</div>
	</div>
</div>


<form id="contactform" name="contactform" method="post" action="send_form_email.php">
	<div class="row">
		<div class="column half">
			<label for="first_name">Name</label>
			<input  type="text" name="first_name" id="first_name" required>
			<label for="email">Email</label>
			<input  type="email" name="email" id="email" required>
			<label for="phone">Phone</label>
			<input  type="text" name="phone" id="phone" required>
		</div>
		<div class="column half">
			<label for="comments">Message</label>
			<textarea  name="comments" id="comments" required></textarea>
			<input class="btn" type="submit" value="Get In Contact">
		</div>
	</div>
	<div class="listErrors"></div>
</form>

<div class="email-success-message">
	<div class="modalBackdrop"></div>
	<div class="success-container">
		<a href="#" class="close"><i class="fa fa-times" alt="close"></i></a>
		<p>Thank you for reaching out to us. Our founder, Paul Tryon, will be in touch within 24 hours.</p>
	</div>
</div>
