<?php
/**
 * Template Name: Report
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

?>

<main id="tackle-report-template-main" class="tackle-report-template-main">
	<div class="grid-container">

		<!--Section 1-->
		<div class="tackle-report-template-section-1 grid-x grid-padding-x">
			<div class="large-12 cell">
				<h2>Invoice Report</h2>
			</div>
		</div>

		<!--Section 2-->
		<div class="grid-x grid-padding-x">
			<div class="tackle-report-template-section-2 large-12 cell">
				<p class="tackle-report-template-info">
					There are no invoices in your account.<br>
					<a href="<?php echo home_url() . '/tackle/invoices'; ?>">Create your first invoice now.</a>
				</p>
			</div>
		</div>

	</div>
</main>

<?php tackle_get_footer(); ?>
