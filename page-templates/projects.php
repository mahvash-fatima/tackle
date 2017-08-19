<?php
/**
 * Template Name: Projects
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

?>

<main id="tackle-projects-template-main" class="tackle-projects-template-main">
	<div class="grid-container">

		<!--Section 1-->
		<div class="tackle-projects-template-section-1 grid-x grid-padding-x">
			<!--Subsection 1a - primary-->
			<span class="tackle-projects-template-subsection-1a-primary large-9 medium-9 cell">
				<a href="<?php echo home_url() . '/tackle/new-project'; ?>" class="tackle-add-new-project-button"><i class="fa fa-plus" aria-hidden="true"></i>New Project</a>
				<a href="" class="tackle-import-button">Import</a>
				<a href="" class="tackle-export-button">Export</a>
			</span>
			<!--Subsection 1b - secondary-->
			<span class="tackle-projects-template-subsection-1b-secondary large-3 medium-3 cell">
				<i class="fa fa-search" aria-hidden="true"></i><input type="text" placeholder="Search by client or project name">
			</span>
		</div>

		<!--Section 2-->
		<div class="tackle-projects-template-section-2 grid-x grid-padding-x">
			<div class="large-12 cell">

				<!--Subsection 2a-->
				<div class="tackle-projects-template-section-2a large-12 cell">
					<nav class="tackle-projects-template-section-2a-nav">
						<ul class="dropdown menu" data-dropdown-menu>
							<li>
								<a href="" class="tackle-projects-table-data-actions">
									Active Projects(3)
									<i class="fa fa-angle-down" aria-hidden="true"></i>
								</a>
								<ul class="menu">
									<li><a href="">Active Projects(3)</a></li>
									<li><a href="">Budgeted Projects(3)</a></li>
									<li><a href="">Archived Projects(0)</a></li>
								</ul>
							</li>
						</ul>
					</nav>
				</div>

				<!--Subsection 2b-->
				<table class="tackle-projects-template-section-2b large-12 cell">
					<tbody>
						<tr>
							<th>Mahvash</th>
							<th>Budget</th>
							<th>Spent</th>
							<th>Meter</th>
							<th>Remaining</th>
							<th>Remaining Percent</th>
							<th>Costs</th>
							<th>Actions</th>
						</tr>
						<tr>
							<td><a href="">Study</a></td>
							<td><a href="">Budget</a></td>
							<td><a href="">Spent</a></td>
							<td><a href="">Meter</a></td>
							<td><a href="">Remaining</a></td>
							<td><a href="">Remaining Percent</a></td>
							<td><a href="">Costs</a></td>
							<td class="tackle-projects-table-actions-nav">
								<ul class="dropdown menu" data-dropdown-menu>
									<li>
										<a href="" class="tackle-projects-table-data-actions">
											Actions
											<i class="fa fa-angle-down" aria-hidden="true"></i>
										</a>
										<ul class="menu">
											<li><a href="">Edit</a></li>
											<li><a href="">Duplicate</a></li>
											<li><a href="">Archive</a></li>
											<li><a href="">Delete</a></li>
										</ul>
									</li>
								</ul>
							</td>
						</tr>
						<tr>
							<td><a href="">JavaScript</a></td>
							<td><a href="">Budget</a></td>
							<td><a href="">Spent</a></td>
							<td><a href="">Meter</a></td>
							<td><a href="">Remaining</a></td>
							<td><a href="">Remaining Percent</a></td>
							<td><a href="">Costs</a></td>
							<td class="tackle-projects-table-actions-nav">
								<ul class="dropdown menu" data-dropdown-menu>
									<li>
										<a href="" class="tackle-projects-table-data-actions">
											Actions
											<i class="fa fa-angle-down" aria-hidden="true"></i>
										</a>
										<ul class="menu">
											<li><a href="">Edit</a></li>
											<li><a href="">Duplicate</a></li>
											<li><a href="">Archive</a></li>
											<li><a href="">Delete</a></li>
										</ul>
									</li>
								</ul>
							</td>
						</tr>
						<tr>
							<td><a href="">Plugin</a></td>
							<td><a href="">Budget</a></td>
							<td><a href="">Spent</a></td>
							<td><a href="">Meter</a></td>
							<td><a href="">Remaining</a></td>
							<td><a href="">Remaining Percent</a></td>
							<td><a href="">Costs</a></td>
							<td class="tackle-projects-table-actions-nav">
								<ul class="dropdown menu" data-dropdown-menu>
									<li>
										<a href="" class="tackle-projects-table-data-actions">
											Actions
											<i class="fa fa-angle-down" aria-hidden="true"></i>
										</a>
										<ul class="menu">
											<li><a href="">Edit</a></li>
											<li><a href="">Duplicate</a></li>
											<li><a href="">Archive</a></li>
											<li><a href="">Delete</a></li>
										</ul>
									</li>
								</ul>
							</td>
						</tr>
					</tbody>
				</table>

			</div>
		</div>
	</div>
</main>

<?php tackle_get_footer(); ?>
