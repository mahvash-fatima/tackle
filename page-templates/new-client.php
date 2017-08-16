<?php
/**
 * Template Name: New Client
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

?>

<main id="tackle-new-client-template-main" class="tackle-new-client-template-main">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">

			<!--Section 1-->
			<div class="tackle-new-client-template-section-1 grid-x grid-padding-x">
				<nav class="large-12 cell">
					<ul class="menu">
						<li><a href="">Client</a></li>
						<li><a href="">Tasks</a></li>
						<li><a href="">Expenses Categories</a></li>
					</ul>
				</nav>
			</div>

			<!--Section 2-->
			<div class="tackle-new-client-template-section-2 large-12 cell">
				<h2>New Client</h2>
				<p>Once you’ve added a client, you can add projects and contacts.</p>
			</div>

			<!--Section 3-->
			<div class="tackle-new-client-template-section-3 large-12 cell">

				<div class="grid-x grid-padding-x">
					<div class="large-2 medium-2 cell">
						<p>Client Name</p>
					</div>

					<div class="large-10 medium-10 cell">
						<p>
							<label for="tackle-client-name">
								<input type="text" id="tackle-client-name">
							</label>
						</p>
					</div>
				</div>

				<div class="grid-x grid-padding-x">
					<div class="large-2 medium-2 cell">
						<p>Address</p>
					</div>

					<div class="large-10 medium-10 cell">
						<p>
							<label for="tackle-address">
								<textarea name="" id="tackle-address" cols="30" rows="10"></textarea>
							</label>
						</p>
					</div>
				</div>

				<div class="grid-x grid-padding-x">
					<div class="large-2 medium-2 cell">
						<p>Preferred Currency</p>
					</div>

					<div class="large-10 medium-10 cell">
						<p>
							<label for="tackle-budget">
								<select name="" id="tackle-budget">
									<option value="">Account default(Indian Rupee - INR)</option>
									<option value="">United States Dollar - USD</option>
								</select>
							</label>
						</p>
						<span>
							<a href="">Save Client</a>
							<a href="">Cancel</a>
						</span>
					</div>
				</div>

			</div>

		</div>
	</div>
</main>

<?php tackle_get_footer(); ?>
