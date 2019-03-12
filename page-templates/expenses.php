<?php
/**
 * Template Name: Expenses
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

?>

<section class="container">
	<div class="d-flex justify-content-between pt-5 pb-3">
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="fas fa-plus"></i> New Expense</button>
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">New Expense</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form>
							<div class="form-group">
								<label for="date" class="col-form-label d-none"></label>
								<input type="date" class="form-control" id="date">
							</div>
							<div class="form-group">
								<label for="choose-a-project" class="d-none"></label>
								<select class="form-control" id="choose-a-project">
									<option>Choose a project</option>
									<option>Fixed Fee Project</option>
									<option>Non Billable Project</option>
									<option>Monthly Retainer</option>
									<option>Time & Materials Project</option>
								</select>
							</div>
							<div class="form-group">
								<label for="choose-a-category" class="d-none"></label>
								<select class="form-control" id="choose-a-category">
									<option>Choose a category</option>
									<option>Entertainment</option>
									<option>Lodging</option>
									<option>Meals</option>
									<option>Mileage</option>
									<option>Other</option>
								</select>
							</div>
							<div class="form-group">
								<label for="notes" class="col-form-label d-none"></label>
								<textarea class="form-control" id="notes" placeholder="Notes (optional)"></textarea>
							</div>
							<div class="form-group">
								<label for="amount" class="col-form-label d-none"></label>
								<input type="number" class="form-control" id="amount" placeholder="Amount">
							</div>
							<div class="custom-file mb-3">
								<input type="file" class="custom-file-input" id="attach-receipt">
								<label class="custom-file-label" for="attach-receipt"><i class="fas fa-paperclip"></i> Attach receipt</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="billable">
								<label class="form-check-label" for="billable">
									This expense is billable
								</label>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
						<button type="button" class="btn btn-primary">Save Expense</button>
					</div>
				</div>
			</div>
		</div>
		<div class="dropdown">
			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				Teammates
			</button>
			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<form>
					<div class="form-group p-3">
						<label for="choose-a-project">See another person’s expenses:</label>
						<select class="form-control" id="choose-a-project">
							<option>Choose a project</option>
							<option>Fixed Fee Project</option>
							<option>Non Billable Project</option>
							<option>Monthly Retainer</option>
							<option>Time & Materials Project</option>
						</select>
					</div>
				</form>
			</div>
		</div>
	</div>
	<table class="table table-bordered">
		<tbody>
			<tr>
				<th scope="row">
					<span>11 – 17 Feb 2019</span>
					<p><a href="#">Submit for Approval</a></p>
				</th>
				<td>Fri, 15 Feb</td>
				<td>
					<span>[SAMPLE] Monthly Retainer</span>
					<span>([SAMPLE] Client B)</span>
					<p>
						<span>Billable</span>
						<span>Meals - </span>
						<span>This is a sample expense entry.</span>
					</p>
				</td>
				<td>₹33.00</td>
				<td><i class="fas fa-edit"></i></td>
			</tr>
			<tr>
				<th scope="row">
					<span>04 – 10 Feb 2019</span>
					<p><a href="#">Submit for Approval</a></p>
				</th>
				<td>Sat, 09 Feb</td>
				<td>
					<span>[SAMPLE] Time & Materials Project</span>
					<span>([SAMPLE] Client B)</span>
					<p>
						<span>Lodging - </span>
						<span>This is a sample expense entry.</span>
					</p>
				</td>
				<td>₹70.00</td>
				<td><i class="fas fa-edit"></i></td>
			</tr>
			<tr>
				<th scope="row"></th>
				<td></td>
				<td>Total: </td>
				<td>₹103.00</td>
				<td></td>
			</tr>
		</tbody>
	</table>
</section>

<?php tackle_get_footer(); ?>
