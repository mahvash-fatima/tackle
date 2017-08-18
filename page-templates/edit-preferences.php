<?php
/**
 * Template Name: Edit Preferences
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

?>

<main id="tackle-edit-preference-template-main" class="tackle-edit-preference-template-main">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">

			<!--Section 1-->
			<div class="tackle-edit-preference-template-section-1 large-12 cell">

				<div class="grid-x grid-padding-x">
					<div class="large-12 medium-12 cell">
						<h2>Edit Preferences</h2>
					</div>
				</div>

				<div class="grid-x grid-padding-x">
					<div class="large-6 medium-6 cell">
						<p>Company Name</p>
					</div>

					<div class="large-6 medium-6 cell">
						<p>
							<label for="tackle-company-name">
								<input type="text" id="tackle-company-name">
							</label>
						</p>
					</div>
				</div>

				<div class="grid-x grid-padding-x">
					<div class="large-6 medium-6 cell">
						<p>Account Owner</p>
					</div>

					<div class="large-6 medium-6 cell">
						<p>
							<label for="tackle-account-owner">
								<select name="" id="tackle-account-owner">
									<option value="">Mahvash Fatima (ball@gmail.com)</option>
								</select>
							</label>
						</p>
					</div>
				</div>

				<div class="grid-x grid-padding-x">
					<div class="large-6 medium-6 cell">
						<p>Fiscal Year</p>
					</div>

					<div class="large-6 medium-6 cell">
						<p>
							<label for="tackle-fiscal-year">
								<select name="" id="tackle-fiscal-year">
									<option value="">January</option>
									<option value="">February</option>
									<option value="">March</option>
									<option value="">April</option>
									<option value="">May</option>
									<option value="">June</option>
									<option value="">July</option>
									<option value="">August</option>
									<option value="">September</option>
									<option value="">October</option>
									<option value="">November</option>
									<option value="">December</option>
								</select>
							</label>
							<span>Customize your fiscal year by choosing the start month. This will add a “This fiscal year” option for all reports.</span>
						</p>
					</div>
				</div>

				<div class="grid-x grid-padding-x">
					<div class="large-6 medium-6 cell">
						<p>Timezone</p>
					</div>

					<div class="large-6 medium-6 cell">
						<p>
							<label for="tackle-timezone">
								<select name="" id="tackle-timezone">
									<option value="">(GMT+05:30)Kolkata</option>
									<option value="">(GMT+05:30)Chennai</option>
									<option value="">(GMT+05:30)Mumbai</option>
								</select>
							</label>
							<span>This will be the default timezone next time you add a user to your account. Changing this will not update everyone’s timezone (which can be updated in each user’s profile).</span>
						</p>
					</div>
				</div>

				<div class="grid-x grid-padding-x">
					<div class="large-6 medium-6 cell">
						<p>Date Format</p>
					</div>

					<div class="large-6 medium-6 cell">
						<p>
							<label for="tackle-timezone">
								<select name="" id="tackle-timezone">
									<option value="">DD/MM/YYYY (e.g.25/04/2017)</option>
									<option value="">DD/MM/YYYY (e.g. 25/04/2017)</option>
									<option value="">YYYY-MM-DD (e.g. 2017-04-25)</option>
									<option value="">DD.MM.YYYY (e.g. 25.04.2017)</option>
									<option value="">YYYY.MM.DD (e.g. 2017.04.25)</option>
									<option value="">YYYY/MM/DD (e.g. 2017/04/25)</option>
								</select>
							</label>
							<span>This will be the default timezone next time you add a user to your account. Changing this will not update everyone’s timezone (which can be updated in each user’s profile).</span>
						</p>
					</div>
				</div>

				<div class="grid-x grid-padding-x">
					<div class="large-6 medium-6 cell">
						<p>Time Format</p>
					</div>

					<div class="large-6 medium-6 cell">
						<p>
							<label for="tackle-12-hour-clock">
								<input type="radio" id="tackle-12-hour-clock">
								<span>12-hour clock</span>
								<span>(e.g. 4:20pm)</span>
							</label>
							<label for="tackle-24-hour-clock">
								<input type="radio" id="tackle-24-hour-clock">
								<span>24-hour clock</span>
								<span>(e.g. 16:20)</span>
							</label>
						</p>
					</div>
				</div>

				<div class="grid-x grid-padding-x">
					<div class="large-6 medium-6 cell">
						<p>Time Display</p>
					</div>

					<div class="large-6 medium-6 cell">
						<p>
							<label for="tackle-decimal">
								<input type="radio" id="tackle-decimal">
								<span>Decimal</span>
							</label>
							<label for="tackle-hh-mm">
								<input type="radio" id="tackle-hh-mm">
								<span>HH:MM</span>
							</label>
							<span>Note that “HH:MM” format will only show on timesheets. For accurate billing information on reports and invoices, time will be shown in decimal format.</span>
						</p>
					</div>
				</div>

				<div class="grid-x grid-padding-x">
					<div class="large-6 medium-6 cell">
						<p>Timer Mode</p>
					</div>

					<div class="large-6 medium-6 cell">
						<p>
							<label for="tackle-track-time-via-duration">
								<input type="radio" id="tackle-track-time-via-duration">
								<span>Track time via duration</span>
							</label>
							<label for="tackle-tackle-track-time-via-start-and-end-time">
								<input type="radio" id="tackle-track-time-via-start-and-end-time">
								<span>Track time via start and end time</span>
							</label>
							<span>By default, Harvest lets you track time by putting in a duration (such as “1.25 hours”). If you prefer, you can track with start and end times instead.</span>
						</p>
					</div>
				</div>

				<div class="grid-x grid-padding-x">
					<div class="large-6 medium-6 cell">
						<p>Currency</p>
					</div>

					<div class="large-6 medium-6 cell">
						<p>
							<label for="tackle-currency">
								<select name="" id="tackle-currency">
									<option value="">United States Dollar - USD</option>
									<option value="">Euro - EUR</option>
									<option value="">British Pound - GBP</option>
								</select>
							</label>
						</p>
					</div>
				</div>

				<div class="grid-x grid-padding-x">
					<div class="large-6 medium-6 cell">
						<p>Currency Format</p>
					</div>

					<div class="large-6 medium-6 cell">
						<p>
							<label for="tackle-currency-format-1">
								<input type="radio" id="tackle-currency-format-1">
								<span>$345</span>
								<span>(symbol before)</span>
							</label>

							<label for="tackle-currency-format-2">
								<input type="radio" id="tackle-currency-format-2">
								<span>345$</span>
								<span>(symbol after)</span>
							</label>

							<label for="tackle-currency-format-3">
								<input type="radio" id="tackle-currency-format-3">
								<span>345 USD</span>
								<span>(ISO code after)</span>
							</label>

							<label for="tackle-currency-format-4">
								<input type="radio" id="tackle-currency-format-4">
								<span>USD 345</span>
								<span>(ISO code before)</span>
							</label>

							<label for="tackle-currency-format-5">
								<input type="radio" id="tackle-currency-format-5">
								<span>$345 USD</span>
								<span>(symbol before, ISO code after)</span>
							</label>

							<label for="tackle-currency-format-6">
								<input type="radio" id="tackle-currency-format-6">
								<span>USD $345</span>
								<span>(ISO code before, symbol before)</span>
							</label>

							<label for="tackle-currency-format-7">
								<input type="radio" id="tackle-currency-format-7">
								<span>345$ USD</span>
								<span>(symbol after, ISO code after)</span>
							</label>

							<label for="tackle-currency-format-8">
								<input type="radio" id="tackle-currency-format-8">
								<span>USD 345$</span>
								<span>(ISO code before, symbol after)</span>
							</label>
						</p>
					</div>
				</div>

				<div class="grid-x grid-padding-x">
					<div class="large-6 medium-6 cell">
						<p>Number Format</p>
					</div>

					<div class="large-6 medium-6 cell">
						<p>
							<label for="tackle-number-format-1">
								<input type="radio" id="tackle-number-format-1">
								<span>1,234.56</span>
							</label>

							<label for="tackle-number-format-2">
								<input type="radio" id="tackle-number-format-2">
								<span>1.234,56</span>
							</label>

							<label for="tackle-number-format-3">
								<input type="radio" id="tackle-number-format-3">
								<span>1'234.56</span>
							</label>

							<label for="tackle-number-format-4">
								<input type="radio" id="tackle-number-format-4">
								<span>1 234,56</span>
							</label>
						</p>
					</div>
				</div>

				<div class="grid-x grid-padding-x">
					<div class="large-6 medium-6 cell">
						<p>Start Week On</p>
					</div>

					<div class="large-6 medium-6 cell">
						<p>
							<label for="tackle-start-week-on">
								<select name="" id="tackle-start-week-on">
									<option value="">Sunday</option>
									<option value="">Monday</option>
									<option value="">Saturday</option>
								</select>

								<span>Existing and approved timesheets will display the new start day if this setting is changed. Changing this setting on your account might take a few minutes, during which timesheet submission will be disabled.</span>
							</label>
						</p>
					</div>
				</div>

				<div class="grid-x grid-padding-x">
					<div class="large-6 medium-6 cell">
						<p>Show Project Notes</p>
					</div>

					<div class="large-6 medium-6 cell">
						<p>
							<label for="tackle-administrators-only">
								<input type="radio" id="tackle-administrators-only">
								<span>Administrators only</span>
							</label>

							<label for="tackle-administrators-and-project-managers">
								<input type="radio" id="tackle-administrators-and-project-managers">
								<span>Administrators and project managers</span>
							</label>

							<span>Project notes are displayed on project reports.</span>
						</p>
					</div>
				</div>

				<div class="grid-x grid-padding-x">
					<div class="large-6 medium-6 cell">
						<p>Time Rounding</p>
					</div>

					<div class="large-6 medium-6 cell">
						<p>
							<label for="tackle-time-rounding">
								<select name="" id="tackle-time-rounding">
									<option value="">No Rounding</option>
									<option value="">Round to nearest</option>
									<option value="">Round up to nearest</option>
								</select>

								<span>Controls rounding in summary time reports and invoices. Time is never rounded in Detailed Time Reports and Timesheets.</span>
							</label>
						</p>
					</div>
				</div>

				<div class="grid-x grid-padding-x">
					<div class="large-6 medium-6 cell">
						<p>Color Schemes</p>
					</div>

					<div class="large-6 medium-6 cell">
						<p>
							<label for="tackle-orange-color-scheme">
								<input type="radio" id="tackle-orange-color-scheme">
								<span>Orange</span>
							</label>

							<label for="tackle-red-color-scheme">
								<input type="radio" id="tackle-red-color-scheme">
								<span>Red</span>
							</label>

							<label for="tackle-yellow-color-scheme">
								<input type="radio" id="tackle-yellow-color-scheme">
								<span>Yellow</span>
							</label>

							<label for="tackle-purple-color-scheme">
								<input type="radio" id="tackle-purple-color-scheme">
								<span>Purple</span>
							</label>

							<label for="tackle-brown-color-scheme">
								<input type="radio" id="tackle-brown-color-scheme">
								<span>Brown</span>
							</label>

							<label for="tackle-green-color-scheme">
								<input type="radio" id="tackle-green-color-scheme">
								<span>Green</span>
							</label>

							<label for="tackle-pink-color-scheme">
								<input type="radio" id="tackle-pink-color-scheme">
								<span>Pink</span>
							</label>

							<label for="tackle-black-color-scheme">
								<input type="radio" id="tackle-black-color-scheme">
								<span>Black</span>
							</label>

							<label for="tackle-blue-color-scheme">
								<input type="radio" id="tackle-pink-blue-scheme">
								<span>Blue</span>
							</label>

							<label for="tackle-gray-color-scheme">
								<input type="radio" id="tackle-gray-color-scheme">
								<span>Gray</span>
							</label>
						</p>
						
						<p>
							<a href="">Save Preferences</a>
							<a href="">Cancel</a>
						</p>
					</div>
				</div>

			</div>

		</div>
	</div>
</main>

<?php tackle_get_footer(); ?>
