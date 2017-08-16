<?php
/**
 * Template Name: Retainer
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

?>

<main id="tackle-retainer-template-main" class="tackle-retainer-template-main">
	<div class="grid-container">

		<!--Section 1-->
		<div class="tackle-retainer-template-section-1 grid-x grid-padding-x">
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
		<div class="tackle-retainer-template-section-2 grid-x grid-padding-x">
			<div class="large-12 cell">
				<h2>Retainers</h2>
			</div>
		</div>

		<!--Section 3-->
		<div class="grid-x grid-padding-x">
			<div class="tackle-retainer-template-section-3 large-12 cell">
				<a href="" class="tackle-retainer-template-add-new-retainer-invoice">
					<i class="fa fa-plus" aria-hidden="true"></i>
					New Retainers
				</a>
			</div>
		</div>

		<!--Section 4-->
		<div class="grid-x grid-padding-x">
			<div class="tackle-retainer-template-section-4 large-12 cell">
				<p class="tackle-retainer-template-info">
					There are no retainers in your account.<br>
					<a href="">Create your first retainer now.</a>
				</p>
			</div>
		</div>

	</div>
</main>

<?php tackle_get_footer(); ?>
