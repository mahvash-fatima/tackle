<?php
/**
 * Template Name: Time
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

tackle_functions();

?>

<main id="tackle-time-template-main" class="tackle-time-template-main">
	<div class="container mt-3 mb-3">
		<div class="row">
			<div class="col-md-6 d-flex justify-content-between mb-3 mb-lg-0">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2" data-whatever="@mdo"><i class="fas fa-plus"></i> New Expense</button>
				<div>
					<span><?php echo date( 'l' ); ?></span>
					<span><?php echo date( 'd M' ); ?></span>
				</div>
			</div>

			<div class="text-right col-md-6">
				<div class="btn-group btn-group-toggle" data-toggle="buttons">
					<label class="btn btn-light">
						<input type="radio" name="options" id="option1" autocomplete="off"> <i class="fa fa-angle-left" aria-hidden="true"></i>
					</label>
					<label class="btn btn-light">
						<input type="radio" name="options" id="option2" autocomplete="off"> Today
					</label>
					<label class="btn btn-light">
						<input type="radio" name="options" id="option3" autocomplete="off"> <i class="fa fa-angle-right" aria-hidden="true"></i>
					</label>
					<label class="btn btn-light">
						<input type="radio" name="options" id="option4" autocomplete="off"> <i class="fa fa-calendar" aria-hidden="true"></i>
					</label>
					<label class="btn btn-light">
						<input type="radio" name="options" id="option5" autocomplete="off"> Day
					</label>
					<label class="btn btn-light">
						<input type="radio" name="options" id="option6" autocomplete="off"> Week
					</label>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModal2Label" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModal2Label">New Time Entry</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form>
							<div class="form-group">
								<label for="choose-a-project" class="d-none"></label>
								<select class="form-control" id="choose-a-project">
									<option>Fixed Fee Project</option>
									<option>Non Billable Project</option>
									<option>Monthly Retainer</option>
									<option>Time & Materials Project</option>
								</select>
							</div>
							<div class="form-group">
								<label for="choose-a-category" class="d-none"></label>
								<select class="form-control" id="choose-a-category">
									<option>Design</option>
									<option>Marketing</option>
									<option>Programming</option>
									<option>Project Management</option>
									<option>Business Development</option>
								</select>
							</div>
							<div class="form-group">
								<label for="notes" class="col-form-label d-none"></label>
								<textarea class="form-control" id="notes" placeholder="Notes (optional)"></textarea>
							</div>
							<div class="form-group">
								<label for="time" class="col-form-label d-none"></label>
								<input type="number" class="form-control" id="time" placeholder="0:00">
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
						<button type="button" class="btn btn-primary">Start Timer</button>
					</div>
				</div>
			</div>
		</div>
		<div class="card text-center">
			<div class="card-header">
				<ul class="nav nav-tabs card-header-tabs">
					<li class="nav-item">
						<a class="nav-link active" href="#">M<span class="d-block">0:00</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">T<span class="d-block">0:00</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">W<span class="d-block">0:00</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Th<span class="d-block">0:00</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">F<span class="d-block">0:00</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">S<span class="d-block">0:00</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Su<span class="d-block">0:00</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Total: <span>0:00</span></a>
					</li>
				</ul>
			</div>

			<div class="card-body">
				<table class="table table-hover">
					<tbody>
					<tr>
						<th scope="row" class="text-left">
							<span class="d-block">Task name</span>
							<span class="d-block">Mark</span>
						</th>
						<td class="text-right">
							<input type="checkbox" aria-label="Checkbox for following text input" class="mr-2">
							<button type="button" class="btn btn-primary mr-2">Stop</button>
							<span>8:00</span>
						</td>
					</tr>
					<tr>
						<th scope="row" class="text-left">
							<span class="d-block">Task name</span>
							<span class="d-block">Mark</span>
						</th>
						<td class="text-right">
							<input type="checkbox" aria-label="Checkbox for following text input" class="mr-2">
							<button type="button" class="btn btn-primary mr-2">Stop</button>
							<span>8:00</span>
						</td>
					</tr>
					<tr>
						<th scope="row"></th>
						<td colspan="2" class="text-right">Total: 16:00</td>
					</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</main>

<?php tackle_get_footer(); ?>
