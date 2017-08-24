<?php
/**
 * Template Name: Tasks
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

?>

<main id="tackle-tasks-template-main" class="tackle-tasks-template-main margin-vertical">
	<div class="grid-container">

		<!--Section 1-->
		<div class="tackle-tasks-template-section-1 margin-bottom grid-x grid-padding-x">
			<nav class="large-12 cell">
				<ul class="menu">
					<li><a href="">Clients</a></li>
					<li><a href="">Task</a></li>
					<li><a href="">Expense Categories</a></li>
				</ul>
			</nav>
		</div>

		<!--Section 2-->
		<div class="grid-x grid-padding-x">
			<div class="tackle-new-client-template-section-2 margin-bottom large-12 cell">
				<h2>Manage Tasks</h2>
			</div>
		</div>

		<!--Section 3-->
		<div class="grid-x grid-padding-x">
			<div class="tackle-new-client-template-section-3 margin-bottom large-12 cell">
				<a href="" class="tackle-new-client-template-add-new-task">
					<i class="fa fa-plus" aria-hidden="true"></i>
					New Task
				</a>
				<a href="" class="tackle-new-client-template-export-to-excel">
					<i class="fa fa-plus" aria-hidden="true"></i>
					Export to Excel
				</a>
				<a href="" class="tackle-new-client-template-add-export-to-csv">
					<i class="fa fa-plus" aria-hidden="true"></i>
					Export to CSV
				</a>
			</div>
		</div>

		<!--Section 4-->
		<div class="grid-x grid-padding-x">
			<div class="tackle-manage-template-section-4 large-12 cell">
				<p>
					Common tasks
					<span>(automatically added to new projects)</span>
				</p>
				<p>Billable by default</p>
				<p>
					<span><a href="">Edit</a></span>
					<span>Graphic Design</span>
				</p>
				<p>
					<span><a href="">Edit</a></span>
					<span>Marketing</span>
				</p>
				<p>
					<span><a href="">Edit</a></span>
					<span>Programming</span>
				</p>
				<p>
					<span><a href="">Edit</a></span>
					<span>Project Management</span>
				</p>
				<p>Non-Billable by default</p>
				<p>
					<span><a href="">Edit</a></span>
					<span>Business Development</span>
				</p>
				<p>Other Tasks</p>
				<p>Non-Billable by default</p>
				<p>
					<span><a href="">Edit</a></span>
					<span>Vacation</span>
				</p>
			</div>
		</div>
	</div>
</main>

<?php tackle_get_footer(); ?>
