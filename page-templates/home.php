<?php
/**
 * Template Name: Home
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();
?>

<main id="tackle-home-main" class="tackle-home-main">
	<div id="tackle-wrapper" class="tackle-wrapper">
		<div id="tackle-home-content" class="tackle-home-content">
			<h2 id="tackle-home-title" class="tackle-home-title">Welcome to Tackle, Mahvash!</h2>
			<p id="tackle-home-paragraph" class="tackle-home-paragraph">Here's how to get started:</p>

			<ul id="tackle-home-get-started-list" class="tackle-home-get-started-list">
				<li><a href=""><i class="fa fa-play-circle-o" aria-hidden="true"></i>Learn the basics of time tracking</a></li>
				<li><a href=""><i class="fa fa-file-text-o" aria-hidden="true"></i>Create a project</a></li>
				<li><a href=""><i class="fa fa-clock-o" aria-hidden="true"></i>Track your first hour</a></li>
				<li><a href=""><i class="fa fa-mobile" aria-hidden="true"></i>Get the apps and browser extension</a></li>
			</ul>
		</div>

		<aside id="tackle-home-sidebar" class="tackle-home-sidebar">
			<i class="fa fa-clock-o" aria-hidden="true"></i>
		</aside>
	</div>
</main>

<?php tackle_get_footer(); ?>
