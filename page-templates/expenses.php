<?php
/**
 * Template Name: Expenses
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

?>

<main id="tackle-expenses-template-main" class="tackle-expenses-template-main">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">

			<!--Section 1-->
			<div class="tackle-expenses-template-section-1 large-12 cell">
				<a href="" class="tackle-expenses-template-add-new-expense">
					<i class="fa fa-plus" aria-hidden="true"></i>
					New Expense
				</a>
			</div>

			<!--Section 2-->
			<div class="tackle-expenses-template-section-2 large-12 cell">
				<p class="tackle-expenses-template-expense-info">
					Looks a little empty here! <br>
					<a href="" class="tackle-expenses-template-expense-link">Create your first expense</a> to get started.
				</p>
			</div>
		</div>
	</div>
</main>

<?php tackle_get_footer(); ?>
