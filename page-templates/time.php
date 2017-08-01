<?php
/**
 * Template Name: Time
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

?>

<main id="tackle-time-main" class="tackle-time-main" >

	<div class="tackle-wrapper">

		<div id="tackle-time-section-1" class="tackle-time-section-1">

			<span id="tackle-date" class="tackle-date"><?php echo date( 'l d F' ); ?></span>

			<div id="tackle-day-view" class="tackle-day-view">
				<a href=""><i class="fa fa-angle-left" aria-hidden="true"></i></a>
				<a href="">Today</a>
				<a href=""><i class="fa fa-angle-right" aria-hidden="true"></i></a>
				<a href=""><i class="fa fa-calendar" aria-hidden="true"></i></a>
				<a href="">Day</a>
				<a href="">Week</a>
			</div>

		</div><!--#tackle-time-section-1-->

		<div id="tackle-time-section-2" class="tackle-time-section-2">

			<span id="tackle-new-time-entry" class="tackle-new-time-entry">
				<a href=""><i class="fa fa-plus-square" aria-hidden="true"></i>
					<span id="tackle-new-time-entry-text" class="tackle-new-time-entry-text">New Entry</span>
				</a>
			</span>

			<div id="tackle-day-view-table" class="tackle-day-view-table">

				<ul id="tackle-day-view-week-nav" class="tackle-day-view-week-nav">
					<li class="tackle-current"><a href="">M <span class="tackle-time-count">0:00</span></a></li>
					<li><a href="">T <span class="tackle-time-count">0:00</span></a></li>
					<li><a href="">W <span class="tackle-time-count">0:00</span></a></li>
					<li><a href="">Th <span class="tackle-time-count">0:00</span></a></li>
					<li><a href="">F <span class="tackle-time-count">0:00</span></a></li>
					<li><a href="">S <span class="tackle-time-count">0:00</span></a></li>
					<li><a href="">Su <span class="tackle-time-count">0:00</span></a></li>
					<li id="day-view-week-nav-total" class="day-view-week-nav-total">
						<a href="">Total <span class="tackle-time-count">1:43</span></a>
					</li>
				</ul>

				<ul id="day-view-entry-list" class="day-view-entry-list">
					<li>
						<div id="tackle-project-client" class="tackle-project-client">
							<span id="tackle-project" class="tackle-project">JavaScript</span>
							<span id="tackle-client" class="tackle-client">Mahvash</span>
						</div>

						<div id="tackle-notes" class="tackle-notes">
							<span id="tackle-task" class="tackle-task">Programming</span>
							<span id="tackle-dash" class="tackle-dash">-</span>
							<span id="tackle-notes" class="tackle-notes">Add style in main</span>
						</div>
						<div id="tackle-time-settings" class="tackle-time-settings">
							<span id="tackle-entry-time" class="tackle-entry-time">1:43</span>
							<span id="tackle-start" class="tackle-start"><a href=""><i class="fa fa-spin fa-circle-o-notch" aria-hidden="true"></i>Stop</a></span>
							<span id="tackle-edit" class="tackle-edit"><a href=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></span>
						</div>
					</li>
				</ul>

				<div id="tackle-day-view-summary" class="tackle-day-view-summary">
					<span id="tackle-day-view-total" class="tackle-day-view-total">Total:</span>
					<span id="tackle-total-time" class="tackle-day-view-total-time">1:43</span>
				</div>

			</div>

		</div><!--#tackle-time-section-2-->
	</div><!--#tackle-wrapper-->
</main>

<?php tackle_get_footer(); ?>
