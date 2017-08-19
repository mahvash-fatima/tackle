<?php
/**
 * Template Name: Import from FreshBooks
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

?>

<main id="tackle-import-from-freshbooks-template-main" class="tackle-import-from-freshbooks-template-main">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">

			<div class="tackle-import-from-freshbooks-template-section-1 large-12 cell">

				<div class="grid-x grid-padding-x">
					<div class="large-12 cell">
						<h2>Import from FreshBooks</h2>
						<p>To import your invoices, clients, and client contacts from FreshBooks, you’ll need the API Token, which you can obtain by logging into your FreshBooks account and go to My Accounts > FreshBooks API.</p>
						<p>
							Note that you’ll need to
							<a href="">upload your timesheets and expenses</a> separately from a CSV file.
						</p>

						<div class="grid-x grid-padding-x">
							<div class="large-6 cell">
								<p>API Token</p>
							</div>
							<div class="large-6 cell">
								<p>
									<label for="tackle-api-token">
										<input type="text" id="tackle-api-token">
									</label>
								</p>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-6 cell">
								<p>FreshBooks URL</p>
							</div>
							<div class="large-3 cell">
								<p>
									<label for="tackle-freshbooks-url">
										<input type="text" id="tackle-freshbooks-url">
									</label>
								</p>
							</div>
							<div class="large-3 cell">
								<p>.freshbooks.com</p>
							</div>
						</div>
						<p>
							<a href="">Begin Import</a>
							<a href="">Cancel</a>
						</p>
					</div>
				</div>

			</div>

		</div>
	</div>
</main>

<?php tackle_get_footer(); ?>
