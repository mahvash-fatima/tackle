<?php
/**
 * Tackle Functions.
 *
 * @package Tackle
 */

/**
 * Add new time entry in Time Page Template
 */
function add_new_time_entry() {
	$time_start = $_POST['tackle-time-start'];
	$time_stop = $_POST['tackle-time-stop'];
	$time_difference = ( strtotime( $time_stop ) - strtotime( $time_start ) );
	$total_time = $time_difference / 60;
	echo sprintf( '%02d:%02d', floor( $total_time / 60 ), $total_time % 60 );
}

?>
