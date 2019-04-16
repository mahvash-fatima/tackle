<?php
/**
 * Template Name: Home
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

?>

<div class="home tackle-page container pt-5 pb-5">
	<div class="row">
		<div class="col-md-8 mb-5 mb-md-0">
			<h3>Welcome to Tackle, Mahvash!</h3>
			<p>Here’s how to get started:</p>
			<div class="home__list-group list-group ml-0">
				<a href="#" class="list-group-item list-group-item-action"><i class="far fa-play-circle mr-2 home__icon"></i> Learn the basics of time tracking</a>
				<a href="#" class="list-group-item list-group-item-action"><i class="far fa-file mr-2 home__icon"></i> Create a project</a>
				<a href="#" class="list-group-item list-group-item-action"><i class="fas fa-user mr-2 home__icon"></i> Invite co-workers</a>
				<a href="#" class="list-group-item list-group-item-action"><i class="fas fa-mobile-alt mr-2 home__icon"></i> Get the apps and browser extension</a>
			</div>
			<div class="row mt-5 mb-5">
				<div class="col-4">
					<h5><a href="">Webinars</a></h5>
					<p>Live online classes. Pick the brains of our experts.</p>
				</div>
				<div class="col-4">
					<h5><a href="">Help Center</a></h5>
					<p>Our knowledge base and FAQs.</p>
				</div>
				<div class="col-4">
					<h5><a href="">Support</a></h5>
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
		<div class="col-md-4 text-md-right text-center">
			<img src="<?php echo plugin_dir_url( __DIR__ ) . '/images/welcome.png' ?>" class="tackle-welcome" alt="Welcome">
		</div>
	</div>
</div>

<?php tackle_get_footer(); ?>
