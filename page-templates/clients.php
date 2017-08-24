<?php
/**
 * Template Name: Clients
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

?>

<main id="tackle-clients-template-main" class="tackle-clients-template-main margin-vertical">
	<div class="grid-container">

		<div class="grid-x grid-padding-x">
			<div class="large-12 medium-12 cell">
				<nav>
					<ul class="menu">
						<li><a href="#">Clients</a></li>
						<li><a href="#">Tasks</a></li>
						<li><a href="#">Expense Categories</a></li>
					</ul>
				</nav>
			</div>
		</div>

		<div class="grid-x grid-padding-x">
			<div class="large-12 medium-12 cell">
				<h2>Manage Clients</h2>
				<span><a href=""><i class="fa fa-plus" aria-hidden="true"></i>New Clients</a></span>
				<span><a href=""><i class="fa fa-plus" aria-hidden="true"></i>Add Contact</a></span>

				<div class="tackle-clients-template-nav nav-style">
					<ul class="dropdown menu" data-dropdown-menu>
						<li>
							<a href="">Import/Export<i class="fa fa-angle-down" aria-hidden="true"></i></a>
							<ul class="menu">
								<li><a href="">Import Clients From CSV</a></li>
								<li><a href="">Import Contacts From CSV</a></li>
								<li><a href="">Export Client to Excel</a></li>
								<li><a href="">Export Clkiets to CSV</a></li>
								<li><a href="">Export Contacts to Excel</a></li>
								<li><a href="">Export Contacts to CSV</a></li>
							</ul>
						</li>
					</ul>
				</div>

				<p>Mahvash ( <a href="">Edit</a> | <a href="">Add contact</a> )</p>

			</div>
		</div>

	</div>

</main>

<?php tackle_get_footer(); ?>
