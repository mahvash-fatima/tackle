<?php
/**
 * Template Name: New Project
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();
?>
<main id="tackle-new-projects-template-main" class="tackle-new-projects-template-main">
	<div class="grid-container">

		<!--Section 1-->
		<div class="tackle-new-project-section-1 grid-x grid-padding-x">
			<div class="large-12 cell">
				<h2>New Project</h2>
			</div>
		</div>

		<!--Section 2-->
		<div class="tackle-new-project-section-2 grid-x grid-padding-x">
			<div class="large-12 cell">

				<div class="grid-x grid-padding-x">
					<div class="large-2 medium-2 cell">
						<p>Client</p>
					</div>
					<div class="large-10 medium-10 cell">
						<p class="tackle-choose-a-client-options">
							<label for="tackle-choose-a-client">
								<select name="" id="tackle-choose-a-client">
									<option value="">Mahvash</option>
									<option value="">Salman</option>
									<option value="">Imran</option>
									<option value="">Nazia</option>
								</select>
							</label>
						</p>
						<span>or</span>
						<span><a href=""><i class="fa fa-plus" aria-hidden="true"></i>New Client</a></span>
					</div>
				</div>

				<div class="grid-x grid-padding-x">
					<div class="large-2 medium-2 cell">
						<p>Project Name</p>
					</div>
					<div class="large-10 medium-10 cell">
						<label for="tackle-project-name">
							<input type="text" id="tackle-project-name">
						</label>
					</div>
				</div>

				<div class="grid-x grid-padding-x">
					<div class="large-2 medium-2 cell">
						<p>Project Code</p>
					</div>
					<div class="large-10 medium-10 cell">
						<label for="tackle-project-code">
							<input type="text" id="tackle-project-code">
						</label>
					</div>
				</div>

				<div class="grid-x grid-padding-x">
					<div class="large-2 medium-2 cell">
						<p>Dates</p>
					</div>
					<div class="large-10 medium-10 cell">
						<label for="tackle-start-date">
							<input type="date" id="tackle-start-date">
						</label>
						<span>to</span>
						<label for="tackle-end-date">
							<input type="date" id="tackle-end-date">
						</label>
					</div>
				</div>

				<div class="grid-x grid-padding-x">
					<div class="large-2 medium-2 cell">
						<p>Notes</p>
					</div>
					<div class="large-10 medium-10 cell">
						<label for="tackle-notes">
							<textarea name="" placeholder="Optional" id="" cols="80" rows="3"></textarea>
							<span>Notes can only be seen by administrators</span>
						</label>
					</div>
				</div>

				<div class="grid-x grid-padding-x">
					<div class="large-2 medium-2 cell">
						<p>Project Type</p>
					</div>
					<div class="large-10 medium-10 cell">
						<span><a href="">Time & Materials</a></span>
						<span><a href="">Fixed Fee</a></span>
						<span><a href="">Non-Billable</a></span>
						<div class="tackle-billing-method">
							<h4>Billing Method</h4>
							<p>Set hourly rates to track your project's billable amount.</p>
							<label for="tackle-billing-method">
								<select name="" id="tackle-billing-method">
									<option value="">No billing method selected</option>
									<option value="">Project hourly rate</option>
									<option value="">Person hourly rate</option>
									<option value="">Task hourly rate</option>
								</select>
							</label>

							<h4>Budget</h4>
							<label for="tackle-budget">
								<select name="" id="tackle-budget">
									<option value="">No budget selected</option>
									<option value="">Total project hours</option>
									<option value="">Total project fees</option>
									<option value="">Hours per task</option>
									<option value="">Hours per person</option>
									<option value="">Fees per task</option>
								</select>
							</label>
						</div>
					</div>
				</div>

				<div class="grid-x grid-padding-x">
					<div class="large-2 medium-2 cell">
						<p>Permissions</p>
					</div>
					<div class="large-10 medium-10 cell">
						<label for="tackle-permission-1">
							<input type="radio" id="tackle-permission-1">
							<span>
								Show project report to project managers on this project, and administrators.
								<a href="">What will people see?</a>
							</span>
						</label>
						<label for="tackle-permission-2">
							<input type="radio" id="tackle-permission-2">
							<span>
								Show project report to everyone on the project.
								<a href="">What will people see?</a>
							</span>
						</label>
					</div>
				</div>
				
			</div>
		</div>

		<!--Section 3-->
		<div class="tackle-new-project-section-3 grid-x grid-padding-x">
			<div class="large-12 cell">
				<div class="grid-x grid-padding-x">
					<div class="large-10 medium-10 cell">
						<i class="fa fa-times" aria-hidden="true"></i>
						<span>Business Development</span>
					</div>
					<div class="large-2 medium-2 cell">
						<label for="tackle-tasks">
							<input type="checkbox" id="tackle-tasks">
						</label>
					</div>
				</div>

				<div class="grid-x grid-padding-x">
					<div class="large-10 medium-10 cell">
						<i class="fa fa-times" aria-hidden="true"></i>
						<span>Graphic Design</span>
					</div>
					<div class="large-2 medium-2 cell">
						<label for="tackle-tasks">
							<input type="checkbox" id="tackle-tasks">
						</label>
					</div>
				</div>

				<div class="grid-x grid-padding-x">
					<div class="large-10 medium-10 cell">
						<i class="fa fa-times" aria-hidden="true"></i>
						<span>Marketing</span>
					</div>
					<div class="large-2 medium-2 cell">
						<label for="tackle-tasks">
							<input type="checkbox" id="tackle-tasks">
						</label>
					</div>
				</div>

				<div class="grid-x grid-padding-x">
					<div class="large-10 medium-10 cell">
						<i class="fa fa-times" aria-hidden="true"></i>
						<span>Programming</span>
					</div>
					<div class="large-2 medium-2 cell">
						<label for="tackle-tasks">
							<input type="checkbox" id="tackle-tasks">
						</label>
					</div>
				</div>

				<div class="grid-x grid-padding-x">
					<div class="large-10 medium-10 cell">
						<i class="fa fa-times" aria-hidden="true"></i>
						<span>Project Management</span>
					</div>
					<div class="large-2 medium-2 cell">
						<label for="tackle-tasks">
							<input type="checkbox" id="tackle-tasks">
						</label>
					</div>
				</div>

				<div class="grid-x grid-padding-x">
					<div class="large-12 cell">
						<label for="tackle-add-a-task">
							<input type="text" id="tackle-add-a-task" placeholder="Add a task...">
						</label>
					</div>
				</div>
			</div>
		</div>

		<!--Section-4-->
		<div class="tackle-new-project-section-4 grid-x grid-padding-x">
			<div class="large-12 cell">
				<div class="grid-x grid-padding-x">
					<div class="large-10 medium-10 cell">
						<h4>Team</h4>
					</div>
					<div class="large-2 medium-2 cell">
						<p>Project Manager</p>
						<p>
							Select
							<a href="">All</a>
							<span>/</span>
							<a href="">None</a>
						</p>
					</div>
				</div>
			</div>
		</div>

		<!--Section-5-->
		<div class="tackle-new-project-section-5 grid-x grid-padding-x">
			<div class="large-12 cell">
				<div class="grid-x grid-padding-x">
					<div class="large-10 medium-10 cell">
						<i class="fa fa-times" aria-hidden="true"></i>
						<img src="" alt="image">
						<span>Mahvash</span>
					</div>
					<div class="large-2 medium-2 cell">
						<label for="tackle-tasks">
							<input type="checkbox" id="tackle-tasks">
						</label>
					</div>
				</div>
			</div>
		</div>

		<!--Section-6-->
		<div class="tackle-new-project-section-5 grid-x grid-padding-x">
			<div class="large-12 cell">
				<span>
					Your whole team’s on this project.
					<a href="">Invite a new person</a>
					to Harvest!
				</span>
			</div>
		</div>

		<!--Section-7-->
		<div class="tackle-new-project-section-7 grid-x grid-padding-x">
			<div class="large-12 cell">
				<span>
					<a href="">Save Project</a>
					<a href="">Cancel</a>
				</span>
			</div>
		</div>

	</div>
</main>

<?php tackle_get_footer(); ?>
