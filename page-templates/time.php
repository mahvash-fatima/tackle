<?php
/**
 * Template Name: Time
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_navigation();

?>

<div class="container">
	<header class="my-4 d-flex justify-content-between flex-wrap">
		<div>
			<button type="button" class="btn btn-primary btn-sm">
				<i class="fa fa-plus" aria-hidden="true"></i>
				<span>New Entry</span>
			</button>
		</div>
		<time class="tackle-date"><?php echo date( 'l d M' ); ?></time>
		<div>
			<div class="btn-group btn-group-toggle" data-toggle="buttons">
				<label class="btn btn-light btn-sm">
					<input type="radio" name="options" id="option1" autocomplete="off" checked>
					<i class="fa fa-angle-left" aria-hidden="true"></i>
				</label>
				<label class="btn btn-light btn-sm active">
					<input type="radio" name="options" id="option2" autocomplete="off"> Today
				</label>
				<label class="btn btn-light btn-sm">
					<input type="radio" name="options" id="option3" autocomplete="off">
					<i class="fa fa-angle-right" aria-hidden="true"></i>
				</label>
			</div>

			<button type="button" class="btn btn-light btn-sm">
				<i class="fa fa-calendar" aria-hidden="true"></i>
			</button>

			<div class="btn-group btn-group-toggle" data-toggle="buttons">
				<label class="btn btn-light btn-sm">
					<input type="radio" name="options" id="option1" autocomplete="off" checked> Day
				</label>
				<label class="btn btn-light btn-sm">
					<input type="radio" name="options" id="option2" autocomplete="off"> Week
				</label>
			</div>
		</div>
	</header>

	<div class="card text-center">
		<div class="card-header">
			<ul class="nav nav-tabs card-header-tabs">
				<li class="nav-item">
					<a href="" class="nav-link active">
						<span>M</span>
						<p>0:00</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="" class="nav-link">
						<span>T</span>
						<p>0:00</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="" class="nav-link">
						<span>W</span>
						<p>0:00</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="" class="nav-link">
						<span>Th</span>
						<p>0:00</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="" class="nav-link">
						<span>F</span>
						<p>0:00</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="" class="nav-link">
						<span>S</span>
						<p>0:00</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="" class="nav-link">
						<span>Su</span>
						<p>0:00</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="" class="nav-link">
						<span>M</span>
						<p>0:00</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link disabled">
						<span>Total</span>
						<p>0:00</p>
					</a>
				</li>
			</ul>
		</div>
		<div class="card-body">
			<div class="list-group">
				<a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
					<div class="d-flex w-100 justify-content-between">
						<div class="tackle-time-entry-content">
							<p>
								<span>[Project Code]</span>
								<span>List group item heading</span>
								<span>(Client)</span>
							</p>
							<p>
								<span>Task</span>
								<span>-</span>
								<span>Write a note here</span>
							</p>
						</div>
						<div>
							<span>0:01</span>
							<button type="button" class="btn btn-secondary btn-sm">Start</button>
							<span>Icon</span>
						</div>
					</div>
				</a>
				<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
					<div class="d-flex w-100 justify-content-between">
						<div class="tackle-time-entry-content">
							<p>
								<span>[Project Code]</span>
								<span>List group item heading</span>
								<span>(Client)</span>
							</p>
							<p>
								<span>Task</span>
								<span>-</span>
								<span>Write a note here</span>
							</p>
						</div>
						<div>
							<span>0:01</span>
							<button type="button" class="btn btn-secondary btn-sm">Start</button>
							<span>Icon</span>
						</div>
					</div>
				</a>
				<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
					<div class="d-flex w-100 justify-content-between">
						<div class="tackle-time-entry-content">
							<p>
								<span>[Project Code]</span>
								<span>List group item heading</span>
								<span>(Client)</span>
							</p>
							<p>
								<span>Task</span>
								<span>-</span>
								<span>Write a note here</span>
							</p>
						</div>
						<div>
							<span>0:01</span>
							<button type="button" class="btn btn-secondary btn-sm">Start</button>
							<span>Icon</span>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>

<?php tackle_get_footer(); ?>
