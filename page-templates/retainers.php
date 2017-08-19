<?php
/**
 * Template Name: Retainers
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

?>

<main id="tackle-retainers-template-main" class="tackle-retainers-template-main">
	<div class="grid-container">

		<!--Section 1-->
		<div class="tackle-invoices-template-section-1 grid-x grid-padding-x">
			<nav class="large-12 cell">
				<ul class="menu">
					<li><a href="<?php echo home_url() . '/tackle/invoices'; ?>">Overview</a></li>
					<li><a href="<?php echo home_url() . '/tackle/report'; ?>">Report</a></li>
					<li><a href="<?php echo home_url() . '/tackle/recurring'; ?>">Recurring</a></li>
					<li><a href="<?php echo home_url() . '/tackle/retainers'; ?>">Retainers</a></li>
					<li><a href="<?php echo home_url() . '/tackle/configure'; ?>">Configure</a></li>
				</ul>
			</nav>
		</div>

		<!--Section 2-->
		<div class="tackle-retainers-template-section-2 grid-x grid-padding-x">
			<div class="large-12 cell">
				<h2>Retainers</h2>
			</div>
		</div>

		<!--Section 3-->
		<div class="grid-x grid-padding-x">
			<div class="tackle-retainers-template-section-3 large-12 cell">
				<a href="" class="tackle-retainers-template-add-new-retainer-invoice">
					<i class="fa fa-plus" aria-hidden="true"></i>
					New Retainers
				</a>
			</div>
		</div>

		<!--Section 4-->
		<div class="grid-x grid-padding-x">
			<div class="tackle-retainers-template-section-4 large-12 cell">
				<p class="tackle-retainers-template-info">
					There are no retainers in your account.<br>
					<a href="">Create your first retainer now.</a>
				</p>
			</div>
		</div>

	</div>
</main>

<?php tackle_get_footer(); ?>
