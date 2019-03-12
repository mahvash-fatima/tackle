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
	<div class="">
		<span>
			<span>Total Hours</span>
			<span>0.00</span>
		</span>
		<span>
			<span>Team Capacity</span>
			<span>140.00</span>
		</span>
		<span>Billable <span>0.00</span></span>
		<span>Non Billable <span>0.00</span></span>
	</div>
</div>

<?php tackle_get_footer(); ?>
