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
					<li><a href="">Overview</a></li>
					<li><a href="">Report</a></li>
					<li><a href="">Recurring</a></li>
					<li><a href="">Retainers</a></li>
					<li><a href="">Configure</a></li>
				</ul>
			</nav>
		</div>

		<!--Section 2-->
		<div class="grid-x grid-padding-x">
			<div class="tackle-invoices-template-section-2 large-12 cell">
				<a href="" class="tackle-invoices-template-add-new-Invoice">
					<i class="fa fa-plus" aria-hidden="true"></i>
					New Expense
				</a>
			</div>
		</div>

		<!--Section 3-->
		<div class="grid-x grid-padding-x">
			<div class="tackle-invoices-template-section-3 large-12 cell">
				<p class="tackle-expenses-template-expense-info">
					Looks a little empty here! <br>
					<a href="" class="tackle-expenses-template-expense-link">Create your first expense</a> to get started.
				</p>
			</div>
		</div>
	</div>
</main>

<?php tackle_get_footer(); ?>
