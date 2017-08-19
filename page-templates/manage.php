<?php
/**
 * Template Name: Manage
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

?>

<?php
/**
 * Template Name: Invoices
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

?>

<main id="tackle-manage-template-main" class="tackle-manage-template-main">
	<div class="grid-container">

		<!--Section 1-->
		<div class="tackle-manage-template-section-1 grid-x grid-padding-x">
			<nav class="large-12 cell">
				<ul class="menu">
					<li><a href="<?php echo home_url() . '/tackle/clients'; ?>">Clients</a></li>
					<li><a href="<?php echo home_url() . '/tackle/tasks'; ?>">Task</a></li>
					<li><a href="<?php echo home_url() . '/tackle/expense-categories'; ?>">Expense Categories</a></li>
				</ul>
			</nav>
		</div>

		<!--Section 2-->
		<div class="grid-x grid-padding-x">
			<div class="tackle-manage-template-section-2 large-12 cell">
				<a href="" class="tackle-manage-template-add-new-client">
					<i class="fa fa-plus" aria-hidden="true"></i>
					New Client
				</a>
				<a href="" class="tackle-manage-template-add-new-contact">
					<i class="fa fa-plus" aria-hidden="true"></i>
					Add Contact
				</a>
				<a href="" class="tackle-manage-template-add-new-import-export">
					<i class="fa fa-plus" aria-hidden="true"></i>
					Import/Export
				</a>
			</div>
		</div>

		<!--Section 3-->
		<div class="grid-x grid-padding-x">
			<div class="tackle-manage-template-section-3 large-12 cell">
				<p class="tackle-manage-template-client">
					Mahvash
					<a href="" class="tackle-manage-template-edit-link">Edit</a>
					<span>|</span>
					<a href="" class="tackle-manage-template-add-contact-link">Add Contact</a>
				</p>
			</div>
		</div>
	</div>
</main>

<?php tackle_get_footer(); ?>
