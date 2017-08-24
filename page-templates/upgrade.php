<?php
/**
 * Template Name: Upgrade
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

?>

<main id="tackle-upgrade-template-main" class="tackle-upgrade-template-main margin-vertical">
	<div class="grid-container">

		<!--Section 1-->
		<div class="tackle-upgrade-template-section-1 grid-x grid-padding-x">
			<div class="large-12 cell">
				<h2>Upgrade Your Harvest Plan</h2>
				<p>You are currently in a <strong>free trial</strong>. For full access to Tackle, upgrade to a paid plan.</p>
			</div>
		</div>

		<!--Section 2-->
		<div class="tackle-upgrade-template-section-2 grid-x grid-padding-x">
			<div class="large-12 cell">
				<p>Billing Cycle</p>
				<p>
					<span><a href="">Monthly</a></span>
					<span><a href="">Yearly(Save 10%)</a></span>
				</p>

				<div class="grid-x grid-padding-x">
					<div class="large-3 medium-3 cell">
						<p>Total People</p>
						<p>
							<label for="tackle-total-people"></label>
							<input type="text" id="tackle-total-people">
						</p>
					</div>
					<div class="large-1 medium-1 cell">
						<p>X</p>
					</div>
					<div class="large-3 medium-3 cell">
						<p>Price Per Person</p>
						<p>$12</p>
					</div>
					<div class="large-1 medium-1 cell">
						<p>=</p>
					</div>
					<div class="large-3 medium-3 cell">
						<p>Total Amount</p>
						<p>$12</p>
					</div>
				</div>
			</div>
		</div>

		<!--Section 3-->
		<div class="tackle-upgrade-template-section-3 grid-x grid-padding-x">
			<div class="large-12 cell">
				<span>
					<a href="">Continue to Billing</a>
					<a href="">Cancel</a>
				</span>
				<p>or switch to the free version which provides<br>1 person, 2 projects, and unlimited invoices.</p>
			</div>
		</div>

	</div>
</main>
<?php tackle_get_footer(); ?>
