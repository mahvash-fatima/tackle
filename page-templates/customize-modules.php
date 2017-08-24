<?php
/**
 * Template Name: Customize Modules
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

?>

<main id="tackle-customize-modules-template-main" class="tackle-customize-modules-template-main margin-vertical">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">

			<!--Section 1-->
			<div class="tackle-customize-modules-template-section-1 large-12 cell">

				<div class="grid-x grid-padding-x">
					<div class="large-12 cell">
						<h2>Choose Modules</h2>
						<p>You can come back to update your modules at any time. Note that the Team module can only be turned off if you have only one person in your account. Hiding a module will not remove any data, nor will it affect the price of your account.</p>
						<p>
							<label for="tackle-timesheets">
								<input type="checkbox" id="tackle-timesheets">
								<span>Timesheets</span><br>
							</label>
							<span>Track your time with this simple, intuitive tool from Harvest. This is included by default, and cannot be disabled.</span>
						</p>
						<p>
							<label for="tackle-team">
								<input type="checkbox" id="tackle-team">
								<span>Team</span><br>
							</label>
							<span>Report on and manage the people in your account, and set and track capacity.</span>
						</p>
						<p>
							<label for="tackle-expense-tracking">
								<input type="checkbox" id="tackle-expense-tracking">
								<span>Expense Tracking</span><br>
							</label>
							<span>Track expenses towards projects, the same way you track hours. Enter expenses in the forms under Timesheets > Expenses; and customize expense categories via Manage > Expense Categories.</span>
						</p>
						<p>
							<label for="tackle-invoices">
								<input type="checkbox" id="tackle-invoices">
								<span>Invoices</span><br>
							</label>
							<span>Bill your clients for all of the hours and expenses tracked in Harvest with our simple yet powerful invoicing feature. The invoices overview lets you quickly see the status of invoices still not sent or overdue, and you can customize your invoice with your logo and preferred phrasing. Send invoices and reminder emails, and receive payments via PayPal, all within Harvest.</span>
						</p>
						<p>
							<label for="tackle-estimates">
								<input type="checkbox" id="tackle-estimates">
								<span>Estimates</span><br>
							</label>
							<span>Create and send estimates and proposals to clients, and then easily turn accepted estimates into invoices. The estimates feature works just like the invoicing feature does, and you can attach additional files to each estimate. Your client will be able to access the estimate via a private URL, where they can view, accept, or decline the estimate online.</span>
						</p>
						<p>
							<label for="tackle-client-dashboard">
								<input type="checkbox" id="tackle-client-dashboard">
								<span>Client Dashboard</span><br>
							</label>
							<span>Allow your clients to view all of their unpaid invoices and recent payments in a single view. Each client will have a unique URL used to access the page, and it can also be accessed from the top of each invoice. Currently, the Client Dashboard is English-only and does not support translations.</span>
						</p>
						<p>
							<a href="">Save Changes</a>
							<a href="">Cancel</a>
						</p>
					</div>
				</div>



			</div>

		</div>
	</div>
</main>

<?php tackle_get_footer(); ?>
