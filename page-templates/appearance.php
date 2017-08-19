<?php
/**
 * Template Name: Appearance
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

?>

<main id="tackle-appearance-template-main" class="tackle-appearance-template-main">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">

			<!--Section 1-->
			<div class="tackle-appearance-template-section-1 large-12 cell">
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
						<h2>Customize Appearance</h2>
						<p>Configure your invoices to your liking.</p>

						<div class="grid-x grid-padding-x">
							<div class="large-3 medium-3 cell">
								<p>Logo</p>
							</div>

							<div class="large-7 medium-7 cell">
								<p>
									<a href="">Choose file</a>
									<span>No file chosen</span>
								</p>
								<p>Your logo will be displayed on the top left corner of invoices. For best print result, please make sure your logo image is at least 1500 pixels wide. Logos may be JPG, GIF, or PNG images.</p>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-3 medium-3 cell">
								<p>Snail-Mail Friendly</p>
							</div>

							<div class="large-7 medium-7 cell">
								<p>
									<label for="tackle-snail-mail-friendly">
										<input type="checkbox" id="tackle-snail-mail-friendly">
										<span>Show the client’s address on the left for the envelope window.</span>
									</label>
								</p>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-3 medium-3 cell">
								<p>Hide Column</p>
							</div>

							<div class="large-7 medium-7 cell">
								<p>
									<label for="tackle-hide-column">
										<input type="checkbox" id="tackle-hide-column">
										<span>Hide Item Type Column</span>
									</label>
									<label for="tackle-hide-quantity-column">
										<input type="checkbox" id="tackle-hide-quantity-column">
										<span>Hide Quantity Column</span>
									</label>
									<label for="tackle-hide-unit-price-column">
										<input type="checkbox" id="tackle-hide-unit-price-column">
										<span>Hide Unit Price Column</span>
									</label>
								</p>
								<p><a href="">Save Default Values</a></p>
							</div>
						</div>

					</div>

				</div>
			</div>

		</div>
	</div>
</main>

<?php tackle_get_footer(); ?>
