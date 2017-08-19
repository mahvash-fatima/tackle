<?php
/**
 * Template Name: Import Data into Tackle
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

?>

<main id="tackle-import-data-into-tackle-template-main" class="tackle-import-data-into-tackle-template-main">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">

			<!--Section 1-->
			<div class="tackle-import-data-into-tackle-template-section-1 large-12 cell">

				<div class="grid-x grid-padding-x">
					<div class="large-12 cell">
						<h2>Import Data into Tackle</h2>
						<div class="import-timesheets-from-csv">
							<p><a href="">Import Timesheets From CSV</a></p>
							<p>
								Organize your old timesheet data in a spreadsheet program, save as a CSV file and import into Tackle.
								<a href="">How to prepare the file?</a>
							</p>
						</div>

						<div class="import-expenses-from-csv">
							<p><a href="">Import Expenses From CSV</a></p>
							<p>
								Organize your old expense data in a spreadsheet program, save as a CSV file and import into Tackle.
								<a href="">How to prepare the file?</a>
							</p>
						</div>

						<div class="import-from-freshbooks">
							<p><a href="">Import from FreshBooks</a></p>
							<p>Switching from Freshbooks to Tackle? You can import over all your past invoices (and all associated messages and payments), clients, and client contacts.</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</main>

<?php tackle_get_footer(); ?>
