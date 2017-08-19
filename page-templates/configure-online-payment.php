<?php
/**
 * Template Name: Configure Online Payment
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

?>

<main id="tackle-configure-online-payment-template-main" class="tackle-configure-online-payment-template-main">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">

			<!--Section 1-->
			<div class="tackle-configure-online-payment-template-section-1 large-12 cell">
				<div class="grid-x grid-padding-x">

					<div class="large-3 medium-3 cell">
						<nav>
							<ul class="vertical menu">
								<li><a href="<?php echo home_url() . '/tackle/configure'; ?>">Company Information</a></li>
								<li><a href="<?php echo home_url() . '/tackle/default-values'; ?>">Default Values</a></li>
								<li><a href="<?php echo home_url() . '/tackle/appearance'; ?>">Appearance</a></li>
								<li><a href="<?php echo home_url() . '/tackle/messages'; ?>">Message</a></li>
								<li><a href="<?php echo home_url() . '/tackle/translations'; ?>">Translations</a></li>
								<li><a href="<?php echo home_url() . '/tackle/item-types'; ?>">Item Types</a></li>
								<li><a href="<?php echo home_url() . '/tackle/online-payment'; ?>">Online Payment</a></li>
							</ul>
						</nav>
					</div>

					<div class="large-7 medium-7 cell">
						<h2>Configure Online Payment</h2>
						<h5>PayPal Settings</h5>
						<p>
							Set up integration with PayPal and receive payments faster.
							<span><a href="">Transaction limits apply.</a></span>
						</p>

						<div class="grid-x grid-padding-x">
							<div class="large-3 medium-3 cell">
								<p>PayPal Email</p>
							</div>

							<div class="large-7 medium-7 cell">
								<p>
									<label for="tackle-paypal-email">
										<input type="text" id="tackle-paypal-email">
									</label>
								</p>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-3 medium-3 cell">
								<p>Payment Mode</p>
							</div>

							<div class="large-7 medium-7 cell">
								<p>
									<label for="tackle-payment-mode">
										<input type="radio" id="tackle-payment-mode">
										<span>PayPal Standard</span>
										<span>Lets your clients use their credit card, bank account, or PayPal balance to pay you. Your client does not need a PayPal account. You pay from 2.2 to 2.9% of the invoice per transaction, plus $0.30.</span>
									</label>
								</p>

								<p>
									<label for="tackle-paypal-business-payments">
										<input type="radio" id="tackle-paypal-business-payments">
										<span>PayPal Business Payments</span>
										<span>Offers a cheaper alternative with a flat fee of just $0.50 per transaction. Note that your client must have a PayPal account and both of you must have US accounts. Credit cards are not accepted—payments must be made by PayPal balance or eCheck.</span>
									</label>
								</p>

								<p>
									<span><a href="">Save</a></span>
									<span><a href="">Cancel</a></span>
								</p>
							</div>
						</div>

					</div>

				</div>
			</div>

		</div>
	</div>
</main>

<?php tackle_get_footer(); ?>
