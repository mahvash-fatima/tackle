<?php
/**
 * Template Name: Referrals
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

?>

<div class="container pt-3 pb-3">
	<h3>Invite Your Friends to Try Harvest</h3>
	<p>They’ll save $10 off their first month and you’ll receive a $10 credit for each referral.
		<a href="">Learn more</a>
	</p>
	<div class="row text-center mt-3 mb-3">
		<div class="col-3">
			<h6>0</h6>
			<p>Total Trials</p>
		</div>
		<div class="col-3">
			<h6>0</h6>
			<p>Referred Customers</p>
		</div>
		<div class="col-3">
			<h6>$0</h6>
			<p>Total Earned Credits</p>
		</div>
		<div class="col-3">
			<h6>$0</h6>
			<p>Remaining Credits</p>
		</div>
	</div>
	<form>
		<form>
			<div class="form-group row">
				<label for="inputEmail1" class="col-sm-2 col-form-label">Invitation Link</label>
				<div class="col-sm-10">
					<input type="url" class="form-control" id="inputEmail3" value="http://try.hrv.st/2-571910" disabled="">
				</div>
			</div>
			<div class="form-group row">
				<label for="inputEmail2" class="col-sm-2 col-form-label">Share Invitation</label>
				<div class="col-sm-10">
					<button type="button" class="btn btn-light"><i class="fab fa-twitter"></i> Share on Twitter</button>
					<button type="button" class="btn btn-light"><i class="fab fa-facebook"></i> Share on Facebook</button>
				</div>
			</div>
			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">Invite by Email</label>
				<div class="col-sm-10">
					<textarea class="form-control" id="inputEmail3" rows="3"></textarea>
					<p>Enter up to 5 email addresses. Separate them with a comma.</p>
					<button type="button" class="btn btn-primary">Send Invitation</button>
				</div>
			</div>
			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">Your Testimonial</label>
				<div class="col-sm-10">
					<textarea class="form-control" id="inputEmail3" rows="3"></textarea>
					<p>200 characters remaining.</p>
					<button type="button" class="btn btn-primary">Save Testimonials</button>
				</div>
			</div>
		</form>
	</form>
</div>

<?php tackle_get_footer(); ?>
