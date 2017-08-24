<?php
/**
 * Template Name: Invoices
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

?>

<main id="tackle-invoices-template-main" class="tackle-invoices-template-main">
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
		<div class="grid-x grid-padding-x">
			<div class="tackle-invoices-template-section-2 margin-bottom large-12 cell">
				<a href="" class="tackle-invoices-template-add-new-Invoice">
					<i class="fa fa-plus" aria-hidden="true"></i>
					New Invoice
				</a>
			</div>
		</div>

		<!--Section 3-->
		<div class="grid-x grid-padding-x">
			<div class="tackle-invoices-template-section-3 margin-bottom large-12 cell">
				<p class="tackle-invoices-template-info">
					Create customized (and handsome!) invoices in <br>
					under a minute. With online payment, you’ll <br>
					get paid twice as fast.
				</p>
			</div>
		</div>
	</div>
</main>

<?php tackle_get_footer(); ?>
