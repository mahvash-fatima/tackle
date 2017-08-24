<?php
/**
 * Template Name: Manage Tasks
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

?>

<main id="tackle-manage-tasks-template-main" class="tackle-manage-tasks-template-main margin-vertical">
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
				<h2>Manage Tasks</h2>
				<p>
					<span><a href=""><i class="fa fa-plus" aria-hidden="true"></i>New Task</a></span>
					<span><a href=""><i class="fa fa-plus" aria-hidden="true"></i>Export to Excel</a></span>
					<span><a href=""><i class="fa fa-plus" aria-hidden="true"></i>Export to CSV</a></span>
				</p>

				<h5>Common tasks <span>(automatically added to new projects)</span></h5>
				<p>Billable by default</p>
				<p>
					<a href="">Edit</a>
					<a href="">Graphic Design</a>
				</p>
				<p>
					<a href="">Edit</a>
					<a href="">Marketing</a>
				</p>
				<p>
					<a href="">Edit</a>
					<a href="">Project Management</a>
				</p>
				<p>Non-Billable by default</p>
				<p>
					<a href="">Edit</a>
					<a href="">Business Development</a>
				</p>
				<h5>Other tasks</h5>
				<p>Non-Billable by default</p>
				<p>
					<a href="">Edit</a>
					<a href="">Vacation</a>
				</p>
			</div>
		</div>

	</div>

</main>

<?php tackle_get_footer(); ?>
