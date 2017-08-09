<?php
/**
 * Template Name: Projects
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

?>

<main id="tackle-projects-main" class="tackle-projects-main">
	<div id="tackle-add-new-project" class="tackle-add-new-project">
		<div class="tackle-wrapper">
			<span id="tackle-create-new-project" class="tackle-create-new-project">
				<a href="" class="tackle-add-new-project-button"><i class="fa fa-plus" aria-hidden="true"></i>New Project</a>
				<a href="" class="tackle-import-button">Import</a>
				<a href="" class="tackle-export-button">Export</a>
			</span>
			<span id="tackle-projects-search-bar" class="tackle-projects-search-bar">
				<i class="fa fa-search" aria-hidden="true"></i><input type="text" placeholder="Search by client or project name">
			</span>
		</div>
	</div>

	<div class="tackle-wrapper">
		<div id="tackle-active-projects" class="tackle-active-projects">
			<a href="" class="tackle-active-projects-button">Active Projects (3) <i class="fa fa-angle-down" aria-hidden="true"></i></a>
		</div>

		<table id="tackle-projects-table" class="tackle-projects-table">
			<tbody>
				<tr id="tackle-projects-table-head-row" class="tackle-projects-table-head-row">
					<th>Mahvash</th>
					<th>Budget</th>
					<th>Spent</th>
					<th>Meter</th>
					<th>Remaining</th>
					<th>Remaining Percent</th>
					<th>Costs</th>
					<th>Actions</th>
				</tr>
				<tr id="tackle-projects-table-data-row" class="tackle-projects-table-data-row">
					<td><a href="">Study</a></td>
					<td><a href="">Budget</a></td>
					<td><a href="">Spent</a></td>
					<td><a href="">Meter</a></td>
					<td><a href="">Remaining</a></td>
					<td><a href="">Remaining Percent</a></td>
					<td><a href="">Costs</a></td>
					<td><a href="" class="tackle-projects-table-data-actions">Actions <i class="fa fa-angle-down" aria-hidden="true"></i></a></td>
				</tr>
				<tr id="tackle-projects-table-data-row" class="tackle-projects-table-data-row">
					<td><a href="">JavaScript</a></td>
					<td><a href="">Budget</a></td>
					<td><a href="">Spent</a></td>
					<td><a href="">Meter</a></td>
					<td><a href="">Remaining</a></td>
					<td><a href="">Remaining Percent</a></td>
					<td><a href="">Costs</a></td>
					<td><a href="" class="tackle-projects-table-data-actions">Actions <i class="fa fa-angle-down" aria-hidden="true"></i></a></td>
				</tr>
				<tr id="tackle-projects-table-data-row" class="tackle-projects-table-data-row">
					<td><a href="">Plugin</a></td>
					<td><a href="">Budget</a></td>
					<td><a href="">Spent</a></td>
					<td><a href="">Meter</a></td>
					<td><a href="">Remaining</a></td>
					<td><a href="">Remaining Percent</a></td>
					<td><a href="">Costs</a></td>
					<td><a href="" class="tackle-projects-table-data-actions">Actions <i class="fa fa-angle-down" aria-hidden="true"></i></a></td>
				</tr>
			</tbody>
		</table>

	</div><!--.tackle-wrapper-->
</main>

<?php tackle_get_footer(); ?>
