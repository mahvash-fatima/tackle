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

<div class="container pt-3 pb-3">
	<div class="mb-5">
		<button type="button" class="btn btn-primary"><i class="fas fa-plus"></i> Add Person</button>
		<button type="button" class="btn btn-light">Import</button>
		<button type="button" class="btn btn-light">Export</button>
	</div>
	<div class="d-flex justify-content-between mb-5">
		<div class="">
			<button type="button" class="btn btn-light"><i class="fas fa-chevron-left"></i></button>
			<button type="button" class="btn btn-light"><i class="fas fa-chevron-right"></i></button>
			<span>This Week: <span>04-10 Mar 2019</span></span>
		</div>
		<div class="dropdown">
			<button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				All Roles
			</button>
			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<a class="dropdown-item" href="#">All Roles</a>
				<a class="dropdown-item" href="#">Web Design</a>
			</div>
		</div>
	</div>
	<div class="d-flex justify-content-between mb-3">
		<div>
			<p>Hours Tracked</p>
			<p>0.05</p>
		</div>
		<div>
			<p>Team Capacity</p>
			<p>140.00</p>
		</div>
		<div>
			<p><i class="fas fa-square"></i> Billable <span>0.05</span></p>
			<p><i class="far fa-square"></i> Non-Billable <span>0.00</span></p>
		</div>
	</div>
	<table class="table table-hover mb-5">
		<thead class="thead-light">
		<tr>
			<th scope="col">Employees (4)</th>
			<th scope="col">Total Hours</th>
			<th scope="col">Capacity</th>
			<th scope="col">Billable Hours</th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<td>Mahvash Fatima <span class="badge badge-light">ADMIN</span></td>
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
			<td>[SAMPLE] Hiromi Hourglass <span class="badge badge-light">PM</span></td>
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
			<td>[SAMPLE] Kiran Chronological <span class="badge badge-light">PM</span></td>
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
			<td>[SAMPLE] Tamara Timekeeper <span class="badge badge-light">ADMIN</span></td>
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
	<div class="alert alert-secondary alert-dismissible fade show" role="alert">
		<p>You’re all set! As your team tracks time, this section will become more powerful. Click on anyone to edit their profile or dive into the details of their week’s work!</p>
		<a href="">Learn more about Team</a>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
</div>

<?php tackle_get_footer(); ?>
