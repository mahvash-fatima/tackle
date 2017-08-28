<?php
/**
 * Template Name: Home
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

?>

<main id="tackle-home-template-main" class="tackle-home-template-main margin-vertical">
	<div class="grid-container">

		<div class="grid-x grid-padding-x">

			<!--Section 1a-->
			<div class="tackle-home-template-section-1a-primary large-8 medium-8 cell">
				<?php require_once( dirname( __FILE__ ) . '/../template-parts/home-slider.php' ); ?>
			</div>

			<!--Section 1b-->
			<div class="tackle-home-template-section-1b-secondary large-4 medium-4 cell">
				<div class="tackle-home-template-section-1b-secondary-inner-1">
					<div class="tackle-home-template-section-1b-secondary-inner-2">
						<h2 class="tackle-home-template-title">Welcome to Tackle, Mahvash!</h2>
						<p class="tackle-home-template-paragraph">Here's how to get started</p>
						<p><i class="fa fa-long-arrow-left" aria-hidden="true"></i></p>
						<p class="tackle-home-template-time-icon"><i class="fa fa-clock-o" aria-hidden="true"></i></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<?php tackle_get_footer(); ?>
