<?php
/**
 * Template Name: Time
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

?>

<main id="tackle-time-template-main" class="tackle-time-template-main">
	<div class="grid-container">

		<!--Section 1-->
		<div class="tackle-time-template-section-1 grid-x grid-padding-x">

			<!--Subsection 1a - primary-->
			<div class="tackle-time-template-subsection-1a-primary large-6 medium-6 cell">
				<span class="tackle-time-template-date"><?php echo date( 'l d M' ); ?></span>
			</div>

			<!--Subsection 1b - secondary-->
			<div class="tackle-time-template-subsection-1b-secondary large-6 medium-6 cell">
				<a href="" class="tackle-time-template-day-toggle-left"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
				<a href="" class="tackle-time-template-today">Today</a>
				<a href="" class="tackle-time-template-day-toggle-right"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
				<a href="" class="tackle-time-template-calendar"><i class="fa fa-calendar" aria-hidden="true"></i></a>
				<a href="" class="tackle-time-template-day">Day</a>
				<a href="" class="tackle-time-template-week">Week</a>
			</div>

		</div>

		<!--Section 2-->
		<div class="tackle-time-template-section-2 grid-x grid-padding-x">

			<!--Subsection 2a - primary-->
			<div class="tackle-time-template-subsection-2a-primary large-1 medium-1 cell">
				<a href="" class="tackle-time-template-new-entry">
					<i class="fa fa-plus-square" aria-hidden="true"></i>
					<span>New Entry</span>
				</a>
			</div>

			<!--Subsection 2b - secondary-->
			<div class="tackle-time-template-subsection-2b-secondary large-11 medium-11 cell">

				<!--Subsection 2b - subsection i-->
				<div class="tackle-time-template-subsection-2b-subsection-i grid-x grid-padding-x">
					<span class="large-1 medium-1 small-1 cell"><a href="">M <span>0:00</span></a></span>
					<span class="large-1 medium-1 small-1 cell"><a href="">T <span>0:00</span></a></span>
					<span class="large-1 medium-1 small-1 cell"><a href="">W <span>0:00</span></a></span>
					<span class="large-1 medium-1 small-1 cell"><a href="">Th <span>0:00</span></a></span>
					<span class="large-1 medium-1 small-1 cell"><a href="">F <span>0:00</span></a></span>
					<span class="large-1 medium-1 small-1 cell"><a href="">S <span>0:00</span></a></span>
					<span class="large-1 medium-1 small-1 cell"><a href="">Su <span>0:00</span></a></span>
					<span class="large-5 medium-5 small-5 cell">
						<a href="" class="tackle-time-template-total">Total
							<span class="tackle-time-template-total-time">1:43</span>
						</a>
					</span>
				</div>

				<!--Subsection 2b - subsection ii-->
				<div class="tackle-time-template-subsection-2b-subsection-ii grid-x grid-padding-x">

					<!--Subsection 2b - subsection ii primary-->
					<div class="tackle-time-template-subsection-2b-subsection-ii-primary large-6 medium-6 cell">
						<span class="tackle-time-template-project">JavaScript</span>
						<span class="tackle-time-template-project-client">(Mahvash)</span>
						<div class="tackle-time-template-task-notes">
							<span class="tackle-time-template-task">Programming</span>
							<span class="tackle-time-template-dash">-</span>
							<span class="tackle-time-template-task-note">Add style in main</span>
						</div>
					</div>

					<!--Subsection 2b - subsection ii secondary-->
					<div class="tackle-time-template-subsection-2b-subsection-ii-secondary large-6 medium-6 cell">
						<span class="tackle-time-template-entry-time">1:43</span>
						<span class="tackle-time-template-stop"><a href=""><i class="fa fa-spin fa-circle-o-notch" aria-hidden="true"></i>Stop</a></span>
						<span class="tackle-time-template-entry-time-edit"><a href=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></span>
					</div>
				</div>

				<!--Subsection 2b - subsection iii-->
				<div class="tackle-time-template-subsection-2b-subsection-iii large-12 medium-12 cell">
					<span class="tackle-time-template-total">Total:</span>
					<span class="tackle-time-template-total-time">1:43</span>
				</div>

			</div>

		</div>
	</div>
</main>

<?php tackle_get_footer(); ?>
