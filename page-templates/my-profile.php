<?php
/**
 * Template Name: My Profile
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

?>

<main id="tackle-my-profile-template-main" class="tackle-my-profile-template-main margin-vertical">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">

			<!--Section 1-->
			<div class="tackle-my-profile-template-section-1 large-12 cell">

				<div class="grid-x grid-padding-x">
					<div class="large-3 medium-3 cell">

						<div class="grid-x grid-padding-x">
							<div class="large-3 medium-3 cell">
								<img src="" alt="Image">
							</div>
							<div class="large-9 medium-9 cell">
								<p>Mahvash <br>Fatima</p>
								<p>Admin</p>
							</div>
						</div>

						<nav>
							<ul class="vertical menu">
								<li><a href="<?php echo home_url() . '/tackle/your-projects'; ?>">Projects</a></li>
								<li><a href="<?php echo home_url() . '/tackle/my-profile'; ?>">Basic Info</a></li>
								<li><a href="<?php echo home_url() . '/tackle/security'; ?>">Security</a></li>
							</ul>
						</nav>
					</div>

					<div class="large-7 medium-7 cell">
						<h2>Your Basic Info</h2>

						<div class="grid-x grid-padding-x">
							<div class="large-3 medium-3 cell">
								<p>First Name</p>
							</div>

							<div class="large-7 medium-7 cell">
								<p>
									<label for="tackle-first-name">
										<input type="text" id="tackle-first-name" value="Mahvash">
									</label>
								</p>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-3 medium-3 cell">
								<p>Last Name</p>
							</div>

							<div class="large-7 medium-7 cell">
								<p>
									<label for="tackle-last-name">
										<input type="text" id="tackle-last-name" value="Fatima">
									</label>
								</p>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-3 medium-3 cell">
								<p>Email</p>
							</div>

							<div class="large-7 medium-7 cell">
								<p>
									<label for="tackle-email">
										<input type="text" id="tackle-email" value="tackle@gmail.com">
									</label>
									<span>
										Update your email from
										<a href="">your Harvest ID settings.</a>
									</span>
								</p>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-3 medium-3 cell">
								<p>Department</p>
							</div>

							<div class="large-7 medium-7 cell">
								<p>
									<label for="tackle-department">
										<input type="text" id="tackle-department">
									</label>
								</p>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-3 medium-3 cell">
								<p>Billable Rate</p>
							</div>

							<div class="large-7 medium-7 cell">
								<p>
									<label for="tackle-billable-rate">
										<span>₹</span>
										<input type="text" id="tackle-billable-rate">
										<span>per hour</span>
									</label>
								</p>
								<p>
									The rate that you bill to your clients. You can override this rate on each project.It can be seen by administrators and project managers with the permissionto view rates.
									<a href="">Learn more</a>
								</p>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-3 medium-3 cell">
								<p>Cost Rate</p>
							</div>

							<div class="large-7 medium-7 cell">
								<p>
									<label for="tackle-billable-rate">
										<span>₹</span>
										<input type="text" id="tackle-billable-rate">
										<span>per hour</span>
									</label>
								</p>
								<p>The internal cost that this person incurs on your business. Only administrators can see this rate.</p>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-3 medium-3 cell">
								<p>Timezone</p>
							</div>

							<div class="large-7 medium-7 cell">
								<p>
									<label for="tackle-timezone">
										<select name="" id="tackle-timezone">
											<option value="">(GMT+10:00) Canberra</option>
											<option value="">(GMT+10:00) Guam</option>
											<option value="">(GMT+10:00) Hobart</option>
										</select>
									</label>
								</p>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-3 medium-3 cell">
								<p>Photo</p>
							</div>

							<div class="large-7 medium-7 cell">
								<p>
									<a href="">Choose file</a>
									<span>No file chosen</span>
								</p>
								<p>Suggested size: 100x100</p>
								<p>
									<a href="">Update Info</a>
									<a href="">Cancel</a>
								</p>
							</div>
						</div>

					</div>

				</div>
			</div>

		</div>
	</div>
</main>

<?php tackle_get_footer(); ?>
