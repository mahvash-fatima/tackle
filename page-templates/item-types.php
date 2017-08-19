<?php
/**
 * Template Name: Item Types
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

?>

<main id="tackle-item-types-template-main" class="tackle-item-types-template-main">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">

			<!--Section 1-->
			<div class="tackle-item-types-template-section-1 large-12 cell">
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
						<h2>Item Types</h2>
						<p><a href=""><i class="fa fa-plus" aria-hidden="true"></i>New Type</a></p>

						<div class="grid-x grid-padding-x">
							<div class="large-12 cell">
								<p>
									<a href="">Edit</a>
									<span>Product (default item type for expenses)</span>
								</p>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-12 cell">
								<p>
									<a href="">Edit</a>
									<span>Product (default item type for expenses)</span>
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
