<?php
/**
 * Template Name: Recurring
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

?>

<main id="tackle-recurring-template-main" class="tackle-recurring-template-main">
	<div class="grid-container">

		<!--Section 1-->
		<div class="tackle-recurring-template-section-1 grid-x grid-padding-x">
			<nav class="large-12 cell">
				<ul class="menu">
					<li><a href="">Overview</a></li>
					<li><a href="">Report</a></li>
					<li><a href="">Recurring</a></li>
					<li><a href="">Retainers</a></li>
					<li><a href="">Configure</a></li>
				</ul>
			</nav>
		</div>

		<!--Section 2-->
		<div class="tackle-recurring-template-section-2 grid-x grid-padding-x">
			<div class="large-12 cell">
				<h2>Recurring Invoices</h2>
			</div>
		</div>

		<!--Section 3-->
		<div class="grid-x grid-padding-x">
			<div class="tackle-recurring-template-section-3 large-12 cell">
				<a href="" class="tackle-recurring-template-add-new-recurring-invoice">
					<i class="fa fa-plus" aria-hidden="true"></i>
					New Recurring Invoice
				</a>
			</div>
		</div>

		<!--Section 4-->
		<div class="grid-x grid-padding-x">
			<div class="tackle-recurring-template-section-4 large-12 cell">
				<p class="tackle-recurring-template-info">
					There are no recurring invoices in your account.<br>
					<a href="">Create your first recurring invoice now.</a>
				</p>
			</div>
		</div>

	</div>
</main>

<?php tackle_get_footer(); ?>
