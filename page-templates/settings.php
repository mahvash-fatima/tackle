<?php
/**
 * Template Name: Settings
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

?>

<div class="container pt-3 pb-3">
	<h2 class="mb-5">Account Settings</h2>
	<div class="mb-5">
		<h4>Billing Information</h4>
		<table class="table">
			<tbody>
			<tr>
				<th scope="row">Web Address</th>
				<td>doews.harvestapp.com <a href="">(Edit address)</a></td>
			</tr>
			<tr>
				<th scope="row">Member Since</th>
				<td>20 Feb 2019</td>
			</tr>
			<tr>
				<th scope="row">Free Trial</th>
				<td>4 days left in your free trial. <a href="">See upgrade options</a></td>
			</tr>
			<tr>
				<th scope="row">Additional Details</th>
				<td><a href="">Add details</a></td>
			</tr>
			</tbody>
		</table>
		<button type="button" class="btn btn-primary">Update Account</button>
		<button type="button" class="btn btn-light">Close Account</button>
	</div>
	<div class="mb-5">
		<h4>Billing Information</h4>
		<table class="table">
			<tbody>
				<tr>
					<th scope="row">Company Name</th>
					<td>Doews</td>
				</tr>
				<tr>
					<th scope="row">Account Owner</th>
					<td>Mahvash Fatima</td>
				</tr>
				<tr>
					<th scope="row">Sign In Security</th>
					<td>No Restrictions</td>
				</tr>
				<tr>
					<th scope="row">Fiscal Year</th>
					<td>Starts in January</td>
				</tr>
				<tr>
					<th scope="row">Timezone</th>
					<td>Kolkata</td>
				</tr>
				<tr>
					<th scope="row">Date Format</th>
					<td>25/04/2019</td>
				</tr>
				<tr>
					<th scope="row">Time Format</th>
					<td>12-hour clock</td>
				</tr>
				<tr>
					<th scope="row">Time Display</th>
					<td>HH:MM</td>
				</tr><tr>
					<th scope="row">Timer Mode</th>
					<td>Track time via duration</td>
				</tr>
				<tr>
					<th scope="row">Default Capacity</th>
					<td>35 hours per week</td>
				</tr>
				<tr>
					<th scope="row">Timesheet Deadline</th>
					<td>No Preference</td>
				</tr>
				<tr>
					<th scope="row">Currency</th>
					<td>Indian Rupee - INR</td>
				</tr>
				<tr>
					<th scope="row">Number Format</th>
					<td>1,234.56</td>
				</tr>
				<tr>
					<th scope="row">Start Week On</th>
					<td>Monday</td>
				</tr>
				<tr>
					<th scope="row">Currency Format</th>
					<td>₹345.00</td>
				</tr>
				<tr>
					<th scope="row">Show Project Notes</th>
					<td>Administrators</td>
				</tr>
				<tr>
					<th scope="row">Time Rounding</th>
					<td>No rounding</td>
				</tr>
				<tr>
					<th scope="row">Approval Confirmation</th>
					<td>No email alert</td>
				</tr>
				<tr>
					<th scope="row">Project Budget</th>
					<td>Compare <strong>both billable and non-billable hours</strong> to Total Project Hours budgets</td>
				</tr>
				<tr>
					<th scope="row">Color Scheme</th>
					<td>Orange</td>
				</tr>
			</tbody>
		</table>
		<button type="button" class="btn btn-primary">Edit Preferences</button>
	</div>
	<div class="mb-5">
		<h4>Integrations</h4>
		<table class="table">
			<tbody>
			<tr>
				<th scope="row">Forecast</th>
				<td><a href="">Connect to Forecast (Learn more about Forecast)</a></td>
			</tr>
			<tr>
				<th scope="row">Accounting</th>
				<td>Connect this account to <a href="">Xero</a> or <span class="badge badge-dark">Connect to QuickBooks</span></td>
			</tr>
			<tr>
				<th scope="row">Free Trial</th>
				<td>4 days left in your free trial. <a href="">See upgrade options</a></td>
			</tr>
			<tr>
				<th scope="row">Additional Details</th>
				<td><a href="">Add details</a></td>
			</tr>
			</tbody>
		</table>
		<button type="button" class="btn btn-light">Authorized OAuth2 API Clients</button>
		<button type="button" class="btn btn-light">View All Harvest Integration</button>
	</div>
	<div class="mb-5">
		<h4>Customize Modules</h4>
		<p>Harvest offers many features, and you can pick and choose which ones you’d like to use.</p>
		<button type="button" class="btn btn-light">Close Modules</button>
	</div>
	<div class="mb-5">
		<h4>Import / Export Data</h4>
		<p>Import data from a CSV file or FreshBooks. Export timesheet data as a CSV file or export invoices in PDF format.</p>
		<button type="button" class="btn btn-light">Import Date Into Tackle</button>
		<button type="button" class="btn btn-light">Export Time Data</button>
	</div>
</div>

<?php tackle_get_footer(); ?>
