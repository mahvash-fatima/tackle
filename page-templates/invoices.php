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
					<a class="nav-link" href="#">Overview <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Report</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Recurring</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Retainers</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Configure</a>
				</li>
			</ul>
		</div>
	</div>
</nav>

<div class="container pt-3 pb-3">
	<h2>New Invoice for [SAMPLE] Client A</h2>
	<p>What projects would you like to invoice?</p>
	<table class="table">
		<thead>
		<tr>
			<th scope="col">
				<span>Select</span>
				<a href="">All</a>
				<span>/</span>
				<a href="">None</a>
			</th>
			<th scope="col">Uninvoiced Fees</th>
			<th scope="col">Uninvoiced Expenses</th>
			<th scope="col">Last Invoice</th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<td>Sample Fixed Fee Project <span class="badge badge-dark">FIXED FEE</span></td>
			<td>₹70.00</td>
			<td>₹67.00</td>
			<td>N/A</td>
		</tr>
		</tbody>
	</table>
	<div class="invoices">
		<h4>What expenses would you like to invoice?</h4>
		<div class="invoices__form d-flex justify-content-start mb-3">
			<span class="invoices__title">Expenses</span>
			<form>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
					<label class="form-check-label" for="exampleRadios1">
						All uninvoiced billable expenses
					</label>
				</div>
				<div class="form-check d-inline-block">
					<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" checked>
					<label class="form-check-label" for="exampleRadios2">
						Include uninvoiced billable expenses from
					</label>
				</div>
				<div class="form-group d-inline-block mb-0">
					<label for="exampleFormControlSelect1" class="d-none"></label>
					<select class="form-control" id="exampleFormControlSelect1">
						<option>This month (March)</option>
						<option selected>Last month (February)</option>
						<option>This Quarter</option>
						<option>Last Quarter</option>
						<option>This Year</option>
						<option>Last Year</option>
						<option>Custom</option>
					</select>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
					<label class="form-check-label" for="exampleRadios3">
						Do not include any expenses
					</label>
				</div>
			</form>
		</div>
		<div class="invoices__form d-flex justify-content-start mb-3">
			<span class="invoices__title">How to Display Expenses</span>
			<form>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
					<label class="form-check-label" for="exampleRadios1">
						By Category: Combine all expenses for one category into one line
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
					<label class="form-check-label" for="exampleRadios2">
						By Person: Combine all expenses for one person into one line
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
					<label class="form-check-label" for="exampleRadios3">
						By Project: Combine all expenses for one project into one line
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option3">
					<label class="form-check-label" for="exampleRadios4">
						Detailed: Display each expense entry as one line
					</label>
				</div>
			</form>
		</div>
		<div class="invoices__form d-flex justify-content-start">
			<span class="invoices__title">Receipts</span>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
				<label class="form-check-label" for="defaultCheck1">
					Attach expense report with receipts
				</label>
				<p>You can review the report on your saved invoice.</p>
			</div>
		</div>
	</div>
	<button type="button" class="btn btn-primary">Review Invoice</button>
	<button type="button" class="btn btn btn-light">Cancel</button>
</div>

<?php tackle_get_footer(); ?>
