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

<div class="tackle-page">
	<div class="container mt-5 mb-5">
		<div class="row">
			<div class="col-md-6 d-flex justify-content-between mb-3 mb-lg-0">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2" data-whatever="@mdo"><i class="fas fa-plus"></i> New Expense</button>
				<div class="time__date">
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

	<div class="container mt-5 mb-5">
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
		<div class="time card text-center">
			<div class="card-header">
				<ul class="nav nav-tabs card-header-tabs">
					<li class="nav-item">
						<a class="nav-link active" href="#">M<span class="d-block">16:00</span></a>
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
						<a class="time__total-hours-a-week disabled nav-link d-flex align-items-center" href="#" tabindex="-1" aria-disabled="true">Total: <span>16:00</span></a>
					</li>
				</ul>
			</div>

			<div class="card-body">
				<table class="table table-hover">
					<tbody>
					<tr>
						<td scope="row" class="text-left w-100">
							<p class="mb-0">
								<strong>[SAMPLE] Fixed Fee Project</strong>
								<span>([SAMPLE] Client A)</span>
							</p>
							<p class="mb-0">Project Management</p>
						</td>
						<td class="time__hours text-left">8:00</td>
						<td>
							<button type="button" class="btn btn-light mr-2">Start</button>
						</td>
						<td>
							<button type="button" class="btn btn-light"><i class="fas fa-edit"></i></button>
						</td>
					</tr>
					<tr>
						<td scope="row" class="text-left w-100">
							<p class="mb-0">
								<strong>[SAMPLE] Fixed Fee Project</strong>
								<span>([SAMPLE] Client A)</span>
							</p>
							<p class="mb-0">Business Development</p>
						</td>
						<td class="time__hours text-left">8:00</td>
						<td>
							<button type="button" class="btn btn-light mr-2">Start</button>
						</td>
						<td>
							<button type="button" class="btn btn-light"><i class="fas fa-edit"></i></button>
						</td>
					</tr>
					<tr>
						<td scope="row" class="time__total text-black-50 text-right">Total:</td>
						<td colspan="2" class="time__total-hours text-left">16:00</td>
						<td></td>
					</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="text-center">
		<button type="button" class="btn btn-light">Submit Week for Approval</button>
	</div>
</div>

<?php tackle_get_footer(); ?>
