<?php
/**
 * Template Name: Reports
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

tackle_functions();

?>

<div class="container mt-3 mb-3">
	<div class="d-flex justify-content-between mb-5">
		<div class="">
			<button type="button" class="btn btn-light"><i class="fas fa-chevron-left"></i></button>
			<button type="button" class="btn btn-light"><i class="fas fa-chevron-right"></i></button>
			<span>This Week: <span>11-17 Mar 2019</span></span>
		</div>
		<div class="dropdown">
			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Week
			</button>
			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<a class="dropdown-item" href="#">Week</a>
				<a class="dropdown-item" href="#">Semimonth</a>
				<a class="dropdown-item" href="#">Month</a>
				<a class="dropdown-item" href="#">Quarter</a>
				<a class="dropdown-item" href="#">Year</a>
				<a class="dropdown-item" href="#">All Time</a>
				<a class="dropdown-item" href="#">Custom</a>
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
			<p><i class="fas fa-square"></i> 0.01 <span>Billable</span></p>
			<p><i class="far fa-square"></i> 0.00 <span>Non-Billable</span></p>
		</div>
		<div>
			<p>Billable Amount</p>
			<p>₹0.00</p>
			<form>
				<div class="form-group form-check">
					<input type="checkbox" class="form-check-input" id="include-fixed-fee-projects">
					<label class="form-check-label" for="include-fixed-fee-projects">Include fixed fee projects</label>
				</div>
			</form>
		</div>
		<div>
			<p>Uninvoiced Amount</p>
			<p>₹0.00</p>
			<p>Excludes fixed fee projects</p>
		</div>
	</div>
	<div class="card text-center">
		<div class="card-header">
			<ul class="nav nav-tabs card-header-tabs">
				<li class="nav-item">
					<a class="nav-link active" href="#">Clients</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Projects</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Tasks</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Team</a>
				</li>
			</ul>
		</div>

		<div class="card-body">
			<table class="table">
				<thead class="thead-light">
				<tr>
					<th scope="col">Name</th>
					<th scope="col">Hours</th>
					<th scope="col"></th>
					<th scope="col">Billable Hours</th>
					<th scope="col">Billable Amount</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td>[SAMPLE] Client A</td>
					<td>0.01</td>
					<td>
						<div class="progress">
							<div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</td>
					<td>0.01(100%)</td>
					<td>—</td>
				</tr>
				<tr>
					<td>[SAMPLE] Client B</td>
					<td>0.01</td>
					<td>
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</td>
					<td>0.01(0%)</td>
					<td>—</td>
				</tr>
				<tr>
					<td>[SAMPLE] Client C</td>
					<td>0.01</td>
					<td>
						<div class="progress">
							<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
						</div>
					</td>
					<td>0.01(0%)</td>
					<td>—</td>
				</tr>
				<tr>
					<td>Total</td>
					<td>0.03</td>
					<td></td>
					<td>0.03</td>
					<td>₹0.00</td>
				</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php tackle_get_footer(); ?>
