<?php
/**
 * Template Name: Import Timesheets From CSV
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

?>

<main id="tackle-import-timesheets-from-csv-template-main" class="tackle-import-timesheets-from-csv-template-main">
	<div class="grid-container">

		<div class="grid-x grid-padding-x">
			<div class="tackle-import-timesheets-from-csv-template-section-1 large-12 cell">

				<div class="grid-x grid-padding-x">
					<div class="large-12 cell">
						<h2>Import Timesheets From CSV</h2>
						<p>To prepare the file, use Excel (or your favorite spreadsheet program), and organize your timesheet data into the following 8 columns:</p>
						<p>Date, Client, Project, Task, Notes, Hours, First Name, Last Name</p>
						<p>
							Column names and order must match exactly for the import to work, and be sure to include the header row. Here’s a
							<a href="">sample file</a> you can use as a starting point.
						</p>
						<p>After formatting the file, export it to a CSV file and import it below.</p>
						<p><a href="">Choose file <span>No file chosen</span></a></p>
						<p>
							<a href="">Upload and Import Timesheets</a>
							<a href="">Cancel</a>
						</p>
					</div>
				</div>

			</div>
		</div>

	</div>
</main>

<?php tackle_get_footer(); ?>
