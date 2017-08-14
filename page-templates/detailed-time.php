<?php
/**
 * Template Name: Expenses
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

?>

<?php
/**
 * Template Name: Detailed Time
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

?>

<main id="tackle-detailed-time-template-main" class="tackle-detailed-time-template-main">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">

			<!--Section 1-->
			<div class="tackle-detailed-time-template-section-1 large-12 cell">
				<h2>Detailed Time Report</h2>
			</div>

			<!--Section 2-->
			<div class="tackle-detailed-time-template-section-2 large-12 cell">

				<div class="grid-x grid-padding-x">
					<div class="large-2 medium-2 cell">
						<p>Timeframe</p>
					</div>

					<div class="large-10 medium-10 cell">
						<p>
							<label for="tackle-timeframe">
								<select name="" id="tackle-timeframe">
									<option value="">This week</option>
									<option value="">Last week</option>
									<option value="">This Semimonthly Period</option>
									<option value="">Last Semimonthly Period</option>
									<option value="">This Month (August)</option>
									<option value="">Last Month (July)</option>
									<option value="">This Quarter</option>
									<option value="">Last Quarter</option>
									<option value="">This Year</option>
									<option value="">This Year</option>
									<option value="">Custom</option>
								</select>
							</label>
						</p>
					</div>
				</div>

				<div class="grid-x grid-padding-x">
					<div class="large-2 medium-2 cell">
						<p>Clients</p>
					</div>

					<div class="large-10 medium-10 cell">
						<label for="tackle-clients">
							<input type="text" id="tackle-clients" placeholder="All Clients">
						</label>
					</div>
				</div>

				<div class="grid-x grid-padding-x">
					<div class="large-2 medium-2 cell">
						<p>Projects</p>
					</div>

					<div class="large-10 medium-10 cell">
						<label for="tackle-projects">
							<input type="text" id="tackle-projects" placeholder="All Projects">
						</label>
					</div>
				</div>

				<div class="grid-x grid-padding-x">
					<div class="large-2 medium-2 cell">
						<p>Tasks</p>
					</div>

					<div class="large-10 medium-10 cell">
						<label for="tackle-tasks">
							<input type="text" id="tackle-tasks" placeholder="All Tasks">
						</label>
					</div>
				</div>

				<div class="grid-x grid-padding-x">
					<div class="large-2 medium-2 cell">
						<p>Staff</p>
					</div>

					<div class="large-10 medium-10 cell">
						<p>
							<label for="tackle-staff">
								<input type="text" id="tackle-staff" placeholder="All Staff">
							</label>
						</p>

						<p>
							<label for="tackle-include-archived-items-in-filters">
								<input type="checkbox">
								<span>tackle-include-archived-items-in-filters</span>
							</label>
						</p>

						<span><a href="">Run Report</a></span>
					</div>
				</div>

			</div>

		</div>
	</div>
</main>

<?php tackle_get_footer(); ?>
