<?php
/**
 * Template Name: Configure
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

?>

<main id="tackle-detailed-time-template-main" class="tackle-detailed-time-template-main">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">

			<!--Section 1-->
			<div class="tackle-detailed-time-template-section-1 large-12 cell">
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
						<h2>Configure Company Information</h2>
						<p>Information about your company, which automatically shows up on your next invoice.</p>

						<div class="grid-x grid-padding-x">
							<div class="large-3 medium-3 cell">
								<p>Name</p>
							</div>

							<div class="large-7 medium-7 cell">
								<p>
									<label for="tackle-name">
										<input type="text" id="tackle-name">
									</label>
								</p>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-3 medium-3 cell">
								<p>Address</p>
							</div>

							<div class="large-7 medium-7 cell">
								<p>
									<label for="tackle-name">
										<textarea name="" id="tackle-name" cols="30" rows="3"></textarea>
									</label>
								</p>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-3 medium-3 cell">
								<p>Send Messages As</p>
							</div>

							<div class="large-7 medium-7 cell">
								<p>
									Set up different email addresses to send your invoices and estimates.
									<span><a href="">Learn more</a></span>
								</p>
								<p><a href=""><i class="fa fa-plus" aria-hidden="true"></i>Add Email</a></p>
								<p><a href="">Save Company Information</a></p>
							</div>
						</div>

					</div>

				</div>
			</div>

		</div>
	</div>
</main>

<?php tackle_get_footer(); ?>
