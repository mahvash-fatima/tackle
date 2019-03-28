<?php
/**
 * Template Name: Home
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

?>

<div class="container pt-3 pb-3">
	<div class="row">
		<div class="col-md-8 mb-5 mb-md-0">
			<h3>Welcome to Tackle, Mahvash!</h3>
			<p>Here’s how to get started:</p>
			<ul class="list-group ml-0">
				<li class="list-group-item"><i class="far fa-play-circle"></i> Learn the basics of time tracking</li>
				<li class="list-group-item"><i class="far fa-file"></i> Create a project</li>
				<li class="list-group-item"><i class="fas fa-user"></i> Invite co-workers</li>
				<li class="list-group-item"><i class="fas fa-mobile-alt"></i> Get the apps and browser extension</li>
			</ul>
			<div class="row mt-5">
				<div class="col-4">
					<h6><a href="">Webinars</a></h6>
					<p>Live online classes. Pick the brains of our experts.</p>
				</div>
				<div class="col-4">
					<h6><a href="">Help Center</a></h6>
					<p>Our knowledge base and FAQs.</p>
				</div>
				<div class="col-4">
					<h6><a href="">Support</a></h6>
					<p>Friendly experts, always ready to help.</p>
				</div>
			</div>
			<form>
				<div class="form-group form-check">
					<input type="checkbox" class="form-check-input" id="exampleCheck1">
					<label class="form-check-label" for="exampleCheck1">Email me occasional updates, tips, and interesting stories</label>
				</div>
			</form>
		</div>
		<div class="col-md-4">
			<img src="<?php echo plugin_dir_url( __DIR__ ) . '/images/welcome.png' ?>" alt="Welcome">
		</div>
	</div>
</div>

<?php tackle_get_footer(); ?>
