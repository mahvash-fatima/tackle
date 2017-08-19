<?php
/**
 * Template Name: Referrals
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

?>

<main id="tackle-referrals-template-main" class="tackle-referrals-template-main">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">

			<div class="tackle-referrals-template large-12 cell">

				<div class="grid-x grid-padding-x">
					<div class="large-12">
						<h2>Invite Your Friends to Try Harvest</h2>
						<p>
							They’ll save $10 off their first month and you’ll receive a $10 credit for each referral.
							<a href="">Learn more</a>
						</p>
					</div>
				</div>

				<div class="grid-x grid-padding-x">
					<div class="large-3">
						<p>0</p>
						<p>Total Trials</p>
					</div>
					<div class="large-3">
						<p>0</p>
						<p>Referred Customers</p>
					</div>
					<div class="large-3">
						<p>$0</p>
						<p>Total Earned Credits</p>
					</div>
					<div class="large-3">
						<p>$0</p>
						<p>Remaining Credits</p>
					</div>
				</div>

				<div class="grid-x grid-padding-x">
					<div class="large-3">
						<p>Invitation Link</p>
					</div>
					<div class="large-9">
						<p>
							<label for="tackle-invitation-link">
								<input type="text" id="tackle-invitation-link" value="http://try.hrv.st/1-823706">
							</label>
						</p>
					</div>
				</div>

				<div class="grid-x grid-padding-x">
					<div class="large-3">
						<p>Share Invitation</p>
					</div>
					<div class="large-9">
						<p>
							<a href=""><i class="fa fa-twitter" aria-hidden="true"></i>Share on Twitter</a>
							<a href=""><i class="fa fa-facebook-official" aria-hidden="true"></i>Share on Facebook</a>
						</p>
					</div>
				</div>

				<div class="grid-x grid-padding-x">
					<div class="large-3">
						<p>Invite by Email</p>
					</div>
					<div class="large-9">
						<p>
							<label for="tackle-invite-by-email">
								<textarea name="" id="tackle-invite-by-email" cols="30" rows="4"></textarea>
							</label>
							<span>Separate email addresses with a comma.</span>
						</p>
						<p><a href="">Send Invitations</a></p>
					</div>
				</div>

				<div class="grid-x grid-padding-x">
					<div class="large-3">
						<p>Your Testimonial</p>
					</div>
					<div class="large-9">
						<p>
							<label for="tackle-your-testimonial">
								<textarea name="" id="tackle-your-testimonial" cols="30" rows="2" placeholder="Optionally, tell us why you love Tackle."></textarea>
							</label>
							<span>200 characters remaining.</span>
						</p>
						<p><a href="">Save Testimonial</a></p>
					</div>
				</div>

			</div>

		</div>
	</div>
</main>

<?php tackle_get_footer(); ?>
