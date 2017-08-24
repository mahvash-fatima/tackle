<?php
/**
 * Template Name: Home
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();
?>

<main id="tackle-home-template-main" class="tackle-home-template-main margin-vertical margin-vertical">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">

			<!--Section 1a-->
			<div class="tackle-home-template-section-1a-primary large-6 medium-6 cell">
				<h2 class="tackle-home-template-title">Welcome to Tackle, Mahvash!</h2>
				<p class="tackle-home-template-paragraph">Here's how to get started:</p>

				<ul class="tackle-home-template-get-started-list">
					<li><a href=""><i class="fa fa-play-circle-o" aria-hidden="true"></i>Learn the basics of time tracking</a></li>
					<li><a href="<?php echo home_url() . '/tackle/new-project'; ?>"><i class="fa fa-file-text-o" aria-hidden="true"></i>Create a project</a></li>
					<li><a href=""><i class="fa fa-clock-o" aria-hidden="true"></i>Track your first hour</a></li>
					<li><a href=""><i class="fa fa-mobile" aria-hidden="true"></i>Get the apps and browser extension</a></li>
				</ul>
			</div>

			<!--Section 1b-->
			<div class="tackle-home-template-section-1b-secondary large-6 medium-6 cell">
				<i class="fa fa-clock-o" aria-hidden="true"></i>
			</div>
		</div>
	</div>
</main>

<?php tackle_get_footer(); ?>
