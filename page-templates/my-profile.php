<?php
/**
 * Template Name: My Profile
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

?>

<div class="container pt-3 pb-3">
	<div class="row">
		<div class="col-md-4 col-sm-5 mb-3">
			<div class="media mb-3">
				<img src="<?php echo plugins_url() . '/tackle/images/profile.jpg'; ?>" class="mr-3" alt="...">
				<div class="media-body">
					<h5 class="mt-0">Mahvash Fatima</h5>
					ADMIN
				</div>
			</div>
			<div class="list-group" id="list-tab" role="tablist">
				<a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Projects</a>
				<a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Basic Info</a>
				<a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Notifications</a>
				<a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Security</a>
			</div>
		</div>
		<div class="col-md-8 col-sm-7">
			<div class="tab-content" id="nav-tabContent">
				<div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
					<h3 class="mb-3">Your Projects</h3>
					<p class="mb-0">You’re assigned to all projects. Sweet!</p>
					<a href="">Assign to all future projects, too.</a>
					<table class="table mt-5">
						<tbody>
							<tr class="bg-light">
								<th scope="row">[SAMPLE] Client A</th>
							</tr>
							<tr>
								<td>
									<button type="button" class="btn btn-light">
										<i class="far fa-times-circle"></i>
									</button>
									<a href="">[SAMPLE] Fixed Fee Project</a>
									<span class="badge badge-secondary">PM</span>
								</td>
							</tr>
							<tr>
								<td>
									<button type="button" class="btn btn-light">
										<i class="far fa-times-circle"></i>
									</button>
									<a href="">[SAMPLE] Non-Billable Project</a>
									<span class="badge badge-secondary">PM</span>
								</td>
							</tr>
							<tr class="bg-light">
								<th scope="row">[SAMPLE] Client B</th>
							</tr>
							<tr>
								<td>
									<button type="button" class="btn btn-light">
										<i class="far fa-times-circle"></i>
									</button>
									<a href="">[SAMPLE] Monthly Retainer</a>
									<span class="badge badge-secondary">PM</span></td>
							</tr>
							<tr>
								<td>
									<button type="button" class="btn btn-light">
										<i class="far fa-times-circle"></i>
									</button>
									<a href="">[SAMPLE] Time & Materials Project</a>
									<span class="badge badge-secondary">PM</span>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
					<h3 class="mb-3">Your Basic Info</h3>
					<form>
						<div class="form-group row">
							<label for="inputEmail3" class="col-sm-2 col-form-label">First Name</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="inputEmail3" placeholder="First Name">
							</div>
						</div>
						<div class="form-group row">
							<label for="inputPassword3" class="col-sm-2 col-form-label">Last Name</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="inputPassword3" placeholder="Last Name">
							</div>
						</div>
						<div class="form-group row">
							<label for="inputPassword3" class="col-sm-2 col-form-label">Work Email</label>
							<div class="col-sm-10">
								<input type="email" class="form-control" id="inputPassword3" placeholder="Work Email">
							</div>
						</div>
						<div class="form-group row">
							<label for="inputPassword3" class="col-sm-2 col-form-label">Roles</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="inputPassword3" placeholder="Roles">
								<p>Roles are just descriptors for your teammates, like Designer, Senior, NYC, etc. They’ll help organize your Team Overview and reports. Capacity</p>
							</div>
						</div>
						<div class="form-group row">
							<label for="inputPassword3" class="col-sm-2 col-form-label">Capacity</label>
							<div class="col-sm-10">
								<label for="formControlRange">hours per week</label>
								<input type="range" class="form-control-range" id="formControlRange" min="0" max="5" step="0.5">
							</div>
						</div>
						<div class="form-group row">
							<label for="inputPassword3" class="col-sm-2 col-form-label">Billable Rate</label>
							<div class="col-sm-10">
								<input type="number" class="form-control" id="inputPassword3" placeholder="₹ 175.00">
								<a href="">Edit billable rate</a>
								<p>The rate at which you bill clients for this person’s time. You can override this rate on each project. Only administrators and project managers with permission to view rates can see this <a href="">Learn more</a></p>
							</div>
						</div>
						<div class="form-group row">
							<label for="inputPassword3" class="col-sm-2 col-form-label">Cost Rate</label>
							<div class="col-sm-10">
								<input type="number" class="form-control" id="inputPassword3" placeholder="₹ 175.00">
								<a href="">Edit cost rate</a>
								<p>The internal cost that this person incurs on your business. Only administrators can see this rate.</p>
							</div>
						</div>
						<div class="form-group row">
							<label for="inputPassword3" class="col-sm-2 col-form-label">Timezone</label>
							<div class="col-sm-10">
								<label for="exampleFormControlSelect1">Example select</label>
								<select class="form-control" id="exampleFormControlSelect1">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label for="inputPassword3" class="col-sm-2 col-form-label">Photo</label>
							<div class="col-sm-10">
								<label for="exampleFormControlFile1" class="d-none"></label>
								<input type="file" class="form-control-file" id="exampleFormControlFile1">
								<p>Suggested size: 100x100</p>
								<button type="button" class="btn btn-primary">Update Info</button>
								<button type="button" class="btn btn-light">Cancel</button>
							</div>
						</div>
					</form>
				</div>
				<div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
					<h3>Notifications</h3>
					<form>
						<div class="form-group row">
							<label for="inputEmail3" class="col-sm-4 col-form-label">Time Tracking Reminders</label>
							<div class="col-sm-8 pl-4 pl-sm-0">
								<input type="checkbox" class="form-check-input" id="exampleCheck1">
								<label class="form-check-label" for="exampleCheck1">Help me track time with reminders</label>
							</div>
						</div>
						<div class="form-group row mb-5">
							<label for="inputEmail3" class="col-sm-4 col-form-label">Your Weekly Harvest</label>
							<div class="col-sm-8 pl-4 pl-sm-0">
								<input type="checkbox" class="form-check-input" id="exampleCheck2">
								<label class="form-check-label" for="exampleCheck2">Email me a weekly report of my time</label>
							</div>
						</div>
						<div class="form-group row">
							<label for="inputEmail3" class="col-sm-4 col-form-label">Other Notifications</label>
							<div class="col-sm-8 pl-4 pl-sm-0">
								<p>
									<input type="checkbox" class="form-check-input" id="exampleCheck3">
									<label class="form-check-label" for="exampleCheck3">Email me if people submit timesheets for projects I manage</label>
								</p>
								<p>
									<input type="checkbox" class="form-check-input" id="exampleCheck4">
									<label class="form-check-label" for="exampleCheck4">Email me occasional updates, tips, and interesting stories</label>
								</p>
								<button type="button" class="btn btn-primary">Update Notifications</button>
								<button type="button" class="btn btn-light">Cancel</button>
							</div>
						</div>
					</form>
				</div>
				<div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
					<h3>Change Your Password</h3>
					<p>You can change your password from your Harvest ID settings.</p>
					<button type="button" class="btn btn-light">Change Your Password</button>
				</div>
			</div>
		</div>
	</div>
</div>

<?php tackle_get_footer(); ?>
