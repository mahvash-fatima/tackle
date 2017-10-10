<?php
/**
 * Template Name: Time
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

tackle_functions();

?>

<main id="tackle-time-template-main" class="tackle-time-template-main">

	<!--------------------------------------------------------------
	Time Template Section 1
	-------------------------------------------------------------->
	<div class="tackle-time-template-section-1">
		<div class="tackle-time-template-section-1a grid-container">

			<!--TIME TEMPLATE SECTION 1A STARTS-->
			<div class="grid-x grid-padding-x">

				<!--section 1a primary-->
				<div class="tackle-time-template-section-1a-primary large-1 medium-1 cell"></div><!--section 1a primary-->

				<!--section 1a secondary-->
				<div class="tackle-time-template-section-1a-secondary large-5 medium-5 cell">
					<span class="tackle-time-template-day"><?php echo date( 'l' ); ?></span>
					<span class="tackle-time-template-date"><?php echo date( 'd M' ); ?></span>
				</div><!--section 1a secondary-->

				<!--section 1a tertiary-->
				<div class="tackle-time-template-section-1a-tertiary large-6 medium-6 cell">
					<p>
						<a href="" class="tackle-time-template-nav-day-left"><i class="fa fa-angle-left" aria-hidden="true"></i></a><a href="" class="tackle-time-template-nav-today">Today</a><a href="" class="tackle-time-template-nav-day-right"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
						<a href="" class="tackle-time-template-nav-calendar"><i class="fa fa-calendar" aria-hidden="true"></i></a>
						<a href="" class="tackle-time-template-nav-day">Day</a><a href="" class="tackle-time-template-nav-week">Week</a>
					</p>
				</div><!--section 1a tertiary-->

			</div><!--tackle-time-template-section-1a-->

		</div><!--grid-container-->
		<!--TIME TEMPLATE SECTION 1A ENDS-->

		<!--TIME TEMPLATE SECTION 1B STARTS-->
		<div class="tackle-time-template-section-1b grid-container">
			<div class="grid-x grid-padding-x">

				<!--section 1b primary-->
				<div class="tackle-time-template-section-1b-primary large-1 medium-1 cell">
					<div class="tackle-add-new-time-entry-container">
						<i id="tackle-time-template-add-new-time-entry-close-button" class="fa fa-times" aria-hidden="true"></i>
						<p>Model Box</p>
						<h5>New Time Entry</h5>
						<span><?php echo date( 'l d M' ); ?></span>
						<p>Project / Task</p>
						<form action="" method="post">
							<p>
								<label for="tackle-time-template-project">
									<select id="tackle-time-template-project" name="tackle-time-template-project">
										<option value="Tackle">Tackle</option>
									</select>
								</label>
							</p>
							<p>
								<label for="tackle-time-template-task">
									<select id="tackle-time-template-task" name="tackle-time-template-task">
										<option value="Programming">Programming</option>
									</select>
								</label>
							</p>
							<p>
								<label for="tackle-time-template-notes">
									<textarea name="tackle-time-template-notes" id="tackle-time-template-notes" cols="30" rows="3"></textarea>
								</label>
							</p>
							<p>
								<label for="tackle-time-template-time-start">
									<input type="text" id="tackle-time-template-time-start" name="tackle-time-template-time-start">
									<span>to</span>
									<input type="text" id="tackle-time-template-time-stop" name="tackle-time-template-time-stop">
								</label>
							</p>
							<p>
								<input type="submit" value="Start Timer" id="tackle-time-template-start-timer">
								<button type="reset">Cancel</button>
							</p>
						</form>
					</div>
				</div><!--section 1b primary-->

				<!--section 1b secondary-->
				<div class="tackle-time-template-section-1b-secondary large-11 medium-11 cell">
					<div class="tackle-time-template-section-1b-secondary-inner">
						<a href=""><div class="tackle-time-template-week-day-container"><span class="tackle-time-template-week-day">M</span><p>0:00</p></div></a>
						<a href=""><div class="tackle-time-template-week-day-container"><span class="tackle-time-template-week-day">T</span><p>0:00</p></div></a>
						<a href=""><div class="tackle-time-template-week-day-container"><span class="tackle-time-template-week-day">W</span><p>0:00</p></div></a>
						<a href=""><div class="tackle-time-template-week-day-container"><span class="tackle-time-template-week-day">Th</span> <p>0:00</p></div></a>
						<a href=""><div class="tackle-time-template-week-day-container"><span class="tackle-time-template-week-day">F</span><p>0:00</p></div></a>
						<a href=""><div class="tackle-time-template-week-day-container"><span class="tackle-time-template-week-day">S</span><p>0:00</p></div></a>
						<a href=""><div class="tackle-time-template-week-day-container"><span class="tackle-time-template-week-day">Su</span> <p>0:00</p></div></a>
						<span class="tackle-time-template-total-time-container">
							<span>Total:</span>
							<span class="tackle-time-template-week-day-total-time-calc">0:00</span>
						</span>
					</div>
				</div><!--section 1b secondary-->

			</div>
		</div>
		<!--TIME TEMPLATE SECTION 1B ENDS-->

	</div><!--tackle-time-template-section-1-->

	<!--------------------------------------------------------------
	Time Template Section 2
	-------------------------------------------------------------->
	<div class="tackle-time-template-section-2 grid-container">
		<div class="grid-x grid-padding-x">

			<!--tackle-time-template-section-2-primary-->
			<div class="tackle-time-template-section-2-primary large-1 medium-1 cell">
				<i class="fa fa-plus" aria-hidden="true"></i>
				<p class="tackle-time-template-time-template-new-entry">New Entry</p>
			</div><!--tackle-time-template-section-2-primary-->

			<!--tackle-time-template-section-2-secondary-->
			<div class="tackle-time-template-section-2-secondary large-11 medium-11 cell">

				<!--tackle-time-template-section-2-secondary-1-->
				<div class="tackle-time-template-section-2-secondary-1 grid-x grid-padding-x">

					<!--tackle-time-template-section-2-secondary-1a-->
					<div class="tackle-time-template-section-2-secondary-1a large-7 medium-7 cell">
						<span class="tackle-time-template-project">Tackle</span>
						<span class="tackle-time-template-project-client">(Mahvash)</span>
						<div class="tackle-time-template-task-notes">
							<span class="tackle-time-template-task">Create Plugin</span>
							<span class="tackle-time-template-dash">-</span>
							<span class="tackle-time-template-task-note">Write a note here.</span>
						</div>
					</div><!--tackle-time-template-section-2-secondary-1a-->

					<!--tackle-time-template-section-2-secondary-1b-->
					<div class="tackle-time-template-section-2-secondary-1b large-5 medium-5 cell">
						<p class="tackle-time-template-section-2-secondary-ii-inner">
							<a href="" class="tackle-time-template-entry-time-edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
							<a href="" class="tackle-time-template-stop"><i class="fa fa-spin fa-circle-o-notch" aria-hidden="true"></i>Stop</a>
							<span class="tackle-time-template-entry-time">8:00</span>
						</p>
					</div><!--tackle-time-template-section-2-secondary-1b-->
				</div><!--tackle-time-template-section-2-secondary-1-->

				<!--tackle-time-template-section-2-secondary-2-->
				<div class="tackle-time-template-section-2-secondary-2 grid-x grid-padding-x">
					<div class="large-12 medium-12 cell">
						<span class="tackle-time-template-total">Total:</span>
						<span class="tackle-time-template-total-time">8:00</span>
					</div>
				</div><!--tackle-time-template-section-2-secondary-2-->

			</div><!--tackle-time-template-section-2-secondary-->

		</div>
	</div>

</main>

<?php tackle_get_footer(); ?>
