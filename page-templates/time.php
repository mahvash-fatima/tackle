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
<div class="tackle-time-template-section-1">
<div class="grid-container">
<div class="tackle-time-template-subsection-1a grid-x grid-padding-x">
<div class="large-1 medium-1 cell"></div>
<div class="tackle-time-template-subsection-1a-primary large-5 medium-5 cell">
<span class="tackle-time-template-day"><?php echo date( 'l' ); ?></span>'
<span class="tackle-time-template-date"><?php echo date( 'd M' ); ?></span>
</div>
<div class="tackle-time-template-subsection-1b-secondary large-6 medium-6 cell">
<div class="">
<a href="" class="tackle-time-template-day-toggle-left"><i class="fa fa-angle-left" aria-hidden="true"></i></a><a href="" class="tackle-time-template-today">Today</a><a href="" class="tackle-time-template-day-toggle-right"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
<a href="" class="tackle-time-template-calendar"><i class="fa fa-calendar" aria-hidden="true"></i></a>
<a href="" class="tackle-time-template-day-button">Day</a><a href="" class="tackle-time-template-week">Week</a>
</div>
</div>
</div>
<!--Subsection 2b - subsection i-->
<div class="tackle-time-template-subsection-2b-subsection-i-container grid-x grid-padding-x">
<div class="tackle-time-template-subsection-2b-subsection-i-primary-one large-1 medium-1 cell"></div>
<div class="large-7 medium-7 cell">
<div class="tackle-time-template-subsection-2b-subsection-i-primary">
<a href=""><div class="tackle-time-template-week-day-container"><span class="tackle-time-template-week-day">M</span><p><?php total_time(); ?></p></div></a>
<a href=""><div class="tackle-time-template-week-day-container"><span class="tackle-time-template-week-day">T</span><p>0:00</p></div></a>
<a href=""><div class="tackle-time-template-week-day-container"><span class="tackle-time-template-week-day">W</span><p>0:00</p></div></a>
<a href=""><div class="tackle-time-template-week-day-container"><span class="tackle-time-template-week-day">Th</span> <p>0:00</p></div></a>
<a href=""><div class="tackle-time-template-week-day-container"><span class="tackle-time-template-week-day">F</span><p>0:00</p></div></a>
<a href=""><div class="tackle-time-template-week-day-container"><span class="tackle-time-template-week-day">S</span><p>0:00</p></div></a>
<a href=""><div class="tackle-time-template-week-day-container"><span class="tackle-time-template-week-day">Su</span> <p>0:00</p></div></a>
</div>
</div>
<div class="tackle-time-template-week-day-total large-4 medium-4 cell">
<p>
<span>Total:</span>
<span class="tackle-time-template-week-day-total-time-calc">0:00</span>
</p>
</div>
</div>
</div>
</div>
<div class="grid-container">
<div class="grid-x grid-padding-x">
<div class="tackle-add-new-time-entry-modal-box large-3 cell">
<i id="tackle-add-new-time-entry-close-button" class="fa fa-times" aria-hidden="true"></i>'
<p>Model Box</p>
<h5>New Time Entry</h5>
<span><?php echo date( 'l d M' ); ?></span>
<p>Project / Task</p>
<form action="" method="post">
<p>
<label for="tackle-project">
<select id="tackle-project" name="tackle-project">
<option value="Tackle">Tackle</option>
</select>
</label>
</p>
<p>
<label for="tackle-task">
<select id="tackle-task" name="tackle-task">
<option value="Programming">Programming</option>
</select>
</label>
</p>
<p>
<label for="tackle-notes">
<textarea name="tackle-notes" id="tackle-notes" cols="30" rows="3"></textarea>
</label>
</p>
<p>
<label for="tackle-time-start">
<input type="text" id="tackle-time-start" name="tackle-time-start">
<span>to</span>
<input type="text" id="tackle-time-stop" name="tackle-time-stop">
</label>
</p>
<p>
<input type="submit" value="Start Timer" id="tackle-start-timer">
<button type="reset">Cancel</button>
</p>
</form>
</div>
</div>

<!--Section 2-->
<div class="tackle-time-template-section-2 grid-x grid-padding-x">
<!--Subsection 2a - primary-->
<div class="tackle-time-template-subsection-2a-primary large-1 medium-1 cell">
<div id="tackle-add-new-time-entry-button-container" class="tackle-add-new-time-entry-button-container">
<i class="fa fa-plus" aria-hidden="true"></i>
<p class="tackle-time-template-new-entry">New Entry</p>
</div>
</div>

<!--Subsection 2b - secondary-->
<div class="tackle-time-template-subsection-2b-secondary large-11 medium-11 cell">
<div class="tackle-time-template-container">
<div class="tackle-time-template-subsection-2b-ii-container">
<!--Subsection 2b - subsection ii-->
<div class="tackle-time-template-subsection-2b-subsection-ii tackle-blue grid-x grid-padding-x">
<!--Subsection 2b - subsection ii secondary-->
<div class="tackle-time-template-subsection-2b-subsection-ii-secondary large-5 medium-5 cell">
<span class="tackle-time-template-project"><?php echo $_POST['tackle-project']; ?></span>
<span class="tackle-time-template-project-client">(Mahvash)</span>
<div class="tackle-time-template-task-notes">
<span class="tackle-time-template-task"><?php echo $_POST['tackle-task']; ?></span>
<span class="tackle-time-template-dash">-</span>
<span class="tackle-time-template-task-note"><?php echo $_POST['tackle-notes']; ?></span>
</div>
</div>
<!--Subsection 2b - subsection ii secondary-->
<div class="tackle-time-template-subsection-2b-subsection-ii-tertiary large-7 medium-7 cell">
<div class="tackle-time-template-subsection-2b-subsection-ii-tertiary-inner">
<a href="" class="tackle-time-template-entry-time-edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
<span class="tackle-time-template-stop">
<a href="">
<i class="fa fa-spin fa-circle-o-notch" aria-hidden="true"></i>
Stop
</a>
</span>
<span class="tackle-time-template-entry-time"><?php total_time(); ?></span>
</div>
</div>
</div>
<!--Subsection 2b - subsection ii-->
<div class="tackle-time-template-subsection-2b-subsection-ii grid-x grid-padding-x">
<!--Subsection 2b - subsection ii secondary-->
<div class="tackle-time-template-subsection-2b-subsection-ii-secondary large-5 medium-5 cell">
<span class="tackle-time-template-project"><?php echo $_POST['tackle-project']; ?></span>
<span class="tackle-time-template-project-client">(Mahvash)</span>
<div class="tackle-time-template-task-notes">
<span class="tackle-time-template-task"><?php echo $_POST['tackle-task']; ?></span>
<span class="tackle-time-template-dash">-</span>
<span class="tackle-time-template-task-note"><?php echo $_POST['tackle-notes']; ?></span>
</div>
</div>
<!--Subsection 2b - subsection ii secondary-->
<div class="tackle-time-template-subsection-2b-subsection-ii-tertiary large-7 medium-7 cell">
<div class="tackle-time-template-subsection-2b-subsection-ii-tertiary-inner">
<a href="" class="tackle-time-template-entry-time-edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
<span class="tackle-time-template-stop">
<a href="">
<i class="fa fa-spin fa-circle-o-notch" aria-hidden="true"></i>
Stop
</a>
</span>
<span class="tackle-time-template-entry-time"><?php total_time(); ?></span>
</div>
</div>
</div>
<!--Subsection 2b - subsection iii-->
<div class="tackle-time-template-subsection-2b-subsection-iii grid-x grid-padding-x">
<div class="large-12 medium-12 cell">
<span class="tackle-time-template-total">Total:</span>
<span class="tackle-time-template-total-time"><?php total_time(); ?></span>
</div>
</div>
</div>
</div><!--tackle-time-template-subsection-2b-secondary-inner-->
</div>
</div>
</div>
</main>

<?php tackle_get_footer(); ?>
