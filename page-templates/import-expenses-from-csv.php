<?php
/**
 * Template Name: Import Expenses From CSV
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

?>

<main id="tackle-import-expenses-from-csv-template-main" class="tackle-import-expenses-from-csv-template-main margin-vertical">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">

			<div class="tackle-import-expenses-from-csv-template-section-1 large-12 cell">

				<div class="grid-x grid-padding-x">
					<div class="large-12 cell">
						<h2>Import Expenses From CSV</h2>
						<p>To prepare the file, use Excel (or your favorite spreadsheet program), and organize your expense data into the following 10 columns:</p>
						<p>Date, Amount, Units, Client, Project, Category, Notes, First Name, Last Name, Billable</p>
						<p>
							Column names and order must match exactly for the import to work, and be sure to include the header row. Here’s a
							<a href="">sample file</a> you can use as a starting point.
						</p>
						<p>After formatting the file, export it to a CSV file and import it below.</p>
						<p><a href="">Choose file <span>No file chosen</span></a></p>
						<p>
							<a href="">Upload and Import Expenses</a>
							<a href="">Cancel</a>
						</p>
					</div>
				</div>

			</div>

		</div>
	</div>
</main>

<?php tackle_get_footer(); ?>
