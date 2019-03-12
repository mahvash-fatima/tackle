<?php
/**
 * Template Name: Projects
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

?>

<nav class="navbar-light bg-light">
	<div class="container pt-3 pb-3 d-md-flex justify-content-md-between">
		<div class="mb-2 mb-md-0">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2" data-whatever="@mdo"><i class="fas fa-plus"></i> New Expense</button>
			<button type="button" class="btn btn-outline-secondary">Import</button>
			<button type="button" class="btn btn-outline-secondary">Export</button>
		</div>
		<div class=""><?php get_search_form(); ?></div>
	</div>
</nav>

<section class="container">
	<div class="pt-5 pb-3">
		<div class="dropdown">
			<button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Active Projects (4)
			</button>
			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<a class="dropdown-item" href="#">Active Projects(4)</a>
				<a class="dropdown-item" href="#">Budgeted Projects(4)</a>
				<a class="dropdown-item" href="#">Archived Projects(4)</a>
			</div>
		</div>
	</div>
	<div class="table-responsive">
		<table class="table table-bordered">
			<thead class="thead-light">
			<tr>
				<th scope="col">[SAMPLE] CLIENT A</th>
				<th scope="col">Budget</th>
				<th scope="col">Spent</th>
				<th scope="col">Remaining</th>
				<th>Costs</th>
				<th>Actions</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<th scope="row">[SAMPLE] Fixed Fee Project</th>
				<td>₹70.00</td>
				<td>
					<span>₹21,699.25</span>
					<div class="progress" style="height: 2px;">
						<div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<span>-₹21,629.25</span>
				</td>
				<td>-30,899%</td>
				<td>₹8,658.40</td>
				<td>
					<div class="dropdown">
						<button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Actions
						</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<a class="dropdown-item" href="#">Edit</a>
							<a class="dropdown-item" href="#">Duplicate</a>
							<a class="dropdown-item" href="#">Archive</a>
							<a class="dropdown-item" href="#">Delete</a>
						</div>
					</div>
				</td>
			</tr>
			<tr>
				<th scope="row">[SAMPLE] Non-Billable Project</th>
				<td>200.00</td>
				<td>
					<span>157.83</span>
					<div class="progress" style="height: 2px;">
						<div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
					</div>
					<span>42.17</span>
				</td>
				<td>21%</td>
				<td>₹8,125.80</td>
				<td>
					<div class="dropdown">
						<button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Actions
						</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<a class="dropdown-item" href="#">Edit</a>
							<a class="dropdown-item" href="#">Duplicate</a>
							<a class="dropdown-item" href="#">Archive</a>
							<a class="dropdown-item" href="#">Delete</a>
						</div>
					</div>
				</td>
			</tr>
			</tbody>
			<thead class="thead-light">
			<tr>
				<th scope="col">[SAMPLE] CLIENT B</th>
				<th scope="col">Budget</th>
				<th scope="col">Spent</th>
				<th scope="col">Remaining</th>
				<th>Costs</th>
				<th>Actions</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<th scope="row">[SAMPLE] Monthly Retainer</th>
				<td>₹10,000.00</td>
				<td>
					<span>₹10,250.50</span>
					<div class="progress" style="height: 2px;">
						<div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="95"></div>
					</div>
					<span>-₹250.50</span>
				</td>
				<td>-3%</td>
				<td>₹7,606.40</td>
				<td>
					<div class="dropdown">
						<button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Actions
						</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<a class="dropdown-item" href="#">Edit</a>
							<a class="dropdown-item" href="#">Duplicate</a>
							<a class="dropdown-item" href="#">Archive</a>
							<a class="dropdown-item" href="#">Delete</a>
						</div>
					</div>
				</td>
			</tr>
			<tr>
				<th scope="row">[SAMPLE] Time & Materials Project</th>
				<td>127.00</td>
				<td>
					<span>140.87</span>
					<div class="progress" style="height: 2px;">
						<div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="90"></div>
					</div>
					<span>-13.87</span>
				</td>
				<td>-11%</td>
				<td>₹7,369.80</td>
				<td>
					<div class="dropdown">
						<button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Actions
						</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<a class="dropdown-item" href="#">Edit</a>
							<a class="dropdown-item" href="#">Duplicate</a>
							<a class="dropdown-item" href="#">Archive</a>
							<a class="dropdown-item" href="#">Delete</a>
						</div>
					</div>
				</td>
			</tr>
			</tbody>
		</table>
	</div>
</section>

<?php tackle_get_footer(); ?>
