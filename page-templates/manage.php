<?php
/**
 * Template Name: Manage
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

?>

<?php
/**
 * Template Name: Invoices
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ml-0">
				<li class="nav-item active">
					<a class="nav-link" href="#">Clients <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Tasks</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Expense Categories</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Roles</a>
				</li>
			</ul>
		</div>
	</div>
</nav>

<div class="container pt-3 pb-3">
	<h2>Manage Clients</h2>
	<button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModal2" data-whatever="@mdo"><i class="fas fa-plus"></i> New Client</button>
	<button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModal2" data-whatever="@mdo"><i class="fas fa-plus"></i> Add Client</button>
	<div class="dropdown d-inline-block mb-2">
		<button class="btn btn-secondary dropdown-toggle mb-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			Import / Export
		</button>
		<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			<a class="dropdown-item" href="#">Import Clients From CSV</a>
			<a class="dropdown-item" href="#">Import Contact From CSV</a>
			<a class="dropdown-item" href="#">Export Clients to Excel</a>
			<a class="dropdown-item" href="#">Export Clients to CSV</a>
			<a class="dropdown-item" href="#">Export Contacts to Excel</a>
			<a class="dropdown-item" href="#">Export Contacts to CSV</a>
		</div>
	</div>
	<div class="table-responsive">
		<table class="table table-striped">
			<tbody>
			<tr>
				<th><button type="button" class="btn btn-light">Edit</button></th>
				<td>[SAMPLE] Client A</td>
				<td class="text-right"><button type="button" class="btn btn-light"><i class="fas fa-plus"></i> Add Contact</button></td>
			</tr>
			<tr>
				<th><button type="button" class="btn btn-light">Edit</button></th>
				<td>
					<span>[SAMPLE] Sophia Stopwatch</span>
					<p>sophia@harvestsample.com</p>
				</td>
				<td></td>
			</tr>
			<tr>
				<th><button type="button" class="btn btn-light">Edit</button></th>
				<td>[SAMPLE] Client B</td>
				<td class="text-right"><button type="button" class="btn btn-light"><i class="fas fa-plus"></i> Add Contact</button></td>
			</tr>
			<tr>
				<th><button type="button" class="btn btn-light">Edit</button></th>
				<td>
					<span>[SAMPLE] Morgan Minute</span>
					<p>morgan@harvestsample.com</p>
				</td>
				<td></td>
			</tr>
			</tbody>
		</table>
	</div>
</div>

<?php tackle_get_footer(); ?>
