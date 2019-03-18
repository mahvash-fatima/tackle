<?php

/**
 * Template Name: Team
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

tackle_functions();

?>

	<div class="container mt-3 mb-3">
		<div class="">
			<button type="button" class="btn btn-primary"><i class="fas fa-plus"></i> Add Person</button>
			<button type="button" class="btn btn-light">Import</button>
			<button type="button" class="btn btn-light">Export</button>
		</div>
		<div class="d-flex justify-content-between">
			<div class="">
				<button type="button" class="btn btn-light"><i class="fas fa-chevron-left"></i></button>
				<button type="button" class="btn btn-light"><i class="fas fa-chevron-right"></i></button>
				<span>This Week: <span>04-10 Mar 2019</span></span>
			</div>
			<div class="dropdown">
				<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					All Roles
				</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<form>
						<div class="form-group p-3">
							<label for="choose-a-project">See another person’s expenses:</label>
							<select class="form-control" id="choose-a-project">
								<option>All Roles</option>
							</select>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="d-flex justify-content-between">
			<div>
				<p>Hours Tracked</p>
				<p>0.01</p>
			</div>
			<div>
				<p>Billable Hours</p>
				<p>0.01 <span>Billable</span></p>
				<p>0.00 <span>Non-Billable</span></p>
			</div>
			<div>
				<p>Billable Amount</p>
				<p>₹0.00</p>
				<p>Include fixed fee projects</p>
			</div>
			<div>
				<p>Uninvoiced Amount</p>
				<p>₹0.00</p>
				<p>Excludes fixed fee projects</p>
			</div>
		</div>
		<div class="progress">
			<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
		</div>
		<table class="table">
			<thead>
			<tr>
				<th scope="col">Employees (4)</th>
				<th scope="col">Total Hours</th>
				<th scope="col">Capacity</th>
				<th scope="col">Billable Hours</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>Mahvash Fatima (ADMIN)</td>
				<td>
					<span>0.00</span>
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</td>
				<td>35.00</td>
				<td>0.00</td>
			</tr>
			<tr>
				<td>[SAMPLE] Hiromi Hourglass [PM]</td>
				<td>
					<span>0.00</span>
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</td>
				<td>35.00</td>
				<td>0.00</td>
			</tr>
			<tr>
				<td>[SAMPLE] Kiran Chronological [PM]</td>
				<td>
					<span>0.00</span>
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</td>
				<td>35.00</td>
				<td>0.00</td>
			</tr>
			<tr>
				<td>[SAMPLE] Tamara Timekeeper [ADMIN]</td>
				<td>
					<span>0.00</span>
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
				</td>
				<td>35.00</td>
				<td>0.00</td>
			</tr>
			</tbody>
		</table>
	</div>

<?php tackle_get_footer(); ?>
