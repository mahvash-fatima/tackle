<?php
/**
 * Template Name: Delete Account
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

?>

<main id="tackle-delete-account-template-main" class="tackle-delete-account-template-main">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">

			<!--Section 1-->
			<div class="tackle-delete-account-template-section-1">

				<div class="grid-x grid-padding-x">
					<div class="large-12 cell">
						<h2>Hold or Close Account</h2>
					</div>
				</div>

				<div class="grid-x grid-padding-x">
					<div class="large-12 cell">
						<h5>Put Account on Hold</h5>

						<p>You can temporarily suspend your Harvest account by putting it on hold. Here’s how it works:</p>

						<ul>
							<li>You will not be charged after you place your account on hold.</li>
							<li>Your data will be saved for up to 6 months.</li>
							<li>You can reactivate anytime within this 6-month period without missing a beat. Just re-enter your billing information.</li>
							<li>You can access your Reports section and run reports for time and expenses.</li>
							<li>You cannot export reports.</li>
							<li>You cannot access any other section in Harvest, including Timesheets and Invoices.</li>
							<li>After 6 months, your data will be permanently removed if you take no action.</li>
						</ul>

						<p>What’s the reason for placing your account on hold?</p>
						<p>
							<label for="tackle-delete-account-reason">
								<textarea name="" id="tackle-delete-account-reason" cols="30" rows="10"></textarea>
							</label>
						</p>
						<p>
							<a href="">Put Account on Hold</a>
							<a href="">Cancel</a>
						</p>
					</div>
				</div>

			</div><!--Section 1-->

			<!--Section 2-->
			<div class="grid-x grid-padding-x">
				<div class="large-12 cell">
					<h2>Close Account Permanently</h2>
					<p>We're sad to see you go. Before you close your account, we suggest you<a href="">export your account data.</a>It will be <span>permanently deleted</span> once the account is closed.</p>
					<p>If you’d like to help us make Harvest better for people like you, can you let us know what made you decide to cancel?</p>

					<p>
						<label for="tackle-is-missing-a-key-feature">
							<input type="radio" id="tackle-is-missing-a-key-feature">
							<span>Tackle is missing a key feature.</span>
						</label>
					</p>
					<p>
						<label for="it-did-not-meet-my-expectations">
							<input type="radio" id="it-did-not-meet-my-expectations">
							<span>It didn’t meet my expectations.</span>
						</label>
					</p>
					<p>
						<label for="my-team-was-not-using-it">
							<input type="radio" id="my-team-was-not-using-it">
							<span>My team wasn’t using it.</span>
						</label>
					</p>
					<p>
						<label for="i-am-using-another-tackle-account">
							<input type="radio" id="i-am-using-another-tackle-account">
							<span>I’m using another Harvest account.</span>
						</label>
					</p>
					<p>
						<label for="the-business-is-shutting-down">
							<input type="radio" id="the-business-is-shutting-down">
							<span>The business is shutting down.</span>
						</label>
					</p>
					<p>
						<label for="other">
							<input type="radio" id="other">
							<span>Other</span>
						</label>
					</p>

					<p>
						<label for="can-you-tell-us-why-you-chose-the-above">
							<span>Can you tell us why you chose the above?</span>
							<textarea name="" id="can-you-tell-us-why-you-chose-the-above" cols="30" rows="3"></textarea>
						</label>
					</p>

					<p>
						<label for="which-service-will-you-be-using-instead-of-tackle">
							<span>Which service (if any) will you be using instead of Harvest?</span>
							<input type="text" id="which-service-will-you-be-using-instead-of-tackle">
						</label>
					</p>

					<p>
						<label for="any-other-feedback-you-would-like-to-share">
							<span>Any other feedback you'd like to share?</span>
							<textarea name="" id="any-other-feedback-you-would-like-to-share" cols="30" rows="3"></textarea>
						</label>
					</p>

					<p>Thank you for your time!</p>

					<p>
						<a href="">Permanently Close This Account</a>
						<a href="">Cancel</a>
					</p>
					
				</div>
			</div><!--Section 2-->



		</div>

	</div>
</main>

<?php tackle_get_footer(); ?>
