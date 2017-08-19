<?php
/**
 * Template Name: Online Payment
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

?>

<main id="tackle-online-payment-template-main" class="tackle-online-payment-template-main">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">

			<!--Section 1-->
			<div class="tackle-online-payment-template-section-1 large-12 cell">
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
						<p>
							Let your clients pay you via Stripe or PayPal.
							<span><a href="">Learn More</a></span>
						</p>

						<div class="grid-x grid-padding-x">
							<div class="large-1 medium-1 cell">
								<p>
									<label for="tackle-stripe">
										<input type="radio" id="tackle-stripe">
									</label>
								</p>
							</div>

							<div class="large-8 medium-8 cell">
								<h2>Stripe</h2>
								<span>Integrate with Stripe. Once set up, your clients can pay directly on the Web Invoice with credit cards.</span>
							</div>
							
							<div class="large-3 medium-3 cell">
								<span><a href="">Connect with Stripe</a></span>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-1 medium-1 cell">
								<p>
									<label for="tackle-stripe">
										<input type="radio" id="tackle-stripe">
									</label>
								</p>
							</div>

							<div class="large-8 medium-8 cell">
								<h2>PayPal</h2>
								<span>Integrate with PayPal and let your clients pay invoices with their PayPal account or credit cards.</span>
							</div>

							<div class="large-3 medium-3 cell">
								<span>
									<a href="">
										Activate
										<i class="fa fa-angle-right" aria-hidden="true"></i>
									</a>
								</span>
							</div>
						</div>

					</div>

				</div>
			</div>

		</div>
	</div>
</main>

<?php tackle_get_footer(); ?>
