<?php
/**
 * Template Name: Reports
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

?>

<main id="tackle-reports-main" class="tackle-reports-main">
	<nav id="tackle-reports-nav" class="tackle-reports-nav">
		<ul id="tackle-reports-list" class="tackle-reports-list tackle-wrapper">
			<li>Time</li>
			<li>Detailed Time</li>
			<li>Uninvoiced</li>
			<li>Expenses</li>
		</ul>
	</nav>
	<div class="tackle-wrapper">
		<span id="tackle-reports-toggle-time-button" class="tackle-reports-toggle-time-button">
			<i class="fa fa-angle-left" aria-hidden="true"></i>
			<i class="fa fa-angle-right" aria-hidden="true"></i>
		</span>

		<span id="tackle-reports-week" class="tackle-reports-week">This Week</span>
		<span id="tackle-reports-date">0<?php echo date( 'N - d M Y' ); ?></span>



	</div>
</main>

<?php tackle_get_footer(); ?>
