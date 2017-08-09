<?php
/**
 * Template Name: Expenses
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

?>

<main id="tackle-expenses-main" class="tackle-expenses-main">
	<div class="tackle-wrapper">
		<div id="tackle-add-new-expense" class="tackle-add-new-expense">
			<a href="">
				<i class="fa fa-plus" aria-hidden="true"></i>
				New Expense
			</a>
		</div>

		<div id="tackle-expense-container" class="tackle-expense-container">
			<p id="tackle-expense-empty-info" class="tackle-expense-empty-info">
				Looks a little empty here! <br>
				<a href="">Create your first expense</a> to get started.
			</p>
		</div>
	</div><!--.tackle-wrapper-->
</main>

<?php tackle_get_footer(); ?>
