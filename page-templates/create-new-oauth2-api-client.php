<?php
/**
 * Template Name: Create New OAuth2 API Client
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

?>

<?php
/**
 * Template Name: Create New OAuth2 API Client
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

?>

<main id="tackle-create-new-oauth2-api-client-template-main" class="tackle-create-new-oauth2-api-client-template-main margin-vertical">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">

			<!--Section 1-->
			<div class="tackle-create-new-oauth2-api-client-template-section-1 large-12 cell">

				<div class="grid-x grid-padding-x">
					<div class="large-12 medium-12 cell">
						<h2>Create New OAuth2 API Client</h2>
						<p>Enter the information below to create a new Harvest integration of your own. You will be provided with a Client ID and a Client Secret, which you need to request access tokens for use in querying the Harvest API.</p>
						<p>
							See <span><a href="">our OAuth 2.0 documentation</a></span> for more info.
						</p>
						<p>
							<a href=""><i class="fa fa-plus" aria-hidden="true"></i>New Client</a>
						</p>
					</div>
				</div>

				<div class="grid-x grid-padding-x">
					<div class="large-3 medium-3 cell">
						<p>App Name</p>
					</div>

					<div class="large-3 medium-3 cell">
						<p>
							<label for="tackle-app-name">
								<input type="text" id="tackle-app-name" placeholder="My Cool App">
							</label>
						</p>
					</div>
				</div>

				<div class="grid-x grid-padding-x">
					<div class="large-3 medium-3 cell">
						<p>Website URL</p>
					</div>

					<div class="large-3 medium-3 cell">
						<p>
							<label for="tackle-website-url">
								<input type="url" id="tackle-website-url" placeholder="http://mycoolapp.com/widget">
								<span>Where people can learn more about the application.</span>
							</label>
						</p>
					</div>
				</div>

				<div class="grid-x grid-padding-x">
					<div class="large-3 medium-3 cell">
						<p>Redirect URI</p>
					</div>

					<div class="large-3 medium-3 cell">
						<p>
							<label for="tackle-redirect-url">
								<input type="url" id="tackle-redirect-url" placeholder="http://mycoolapp.com/oauth-successful-redirect">
								<span>The URL your app will accept redirects to after your users confirm access.</span>
							</label>
						</p>

						<ul>
							<li>http://coolapp.com will match any URLs at coolapp.com.</li>
							<li>Wildcard subdomains are also supported. https://.coolapp.com will match any subdomain.</li>
							<li>Paths are matched by the beginning only. http://.coolapp.com/auth will match https://myco.coolapp.com/auth/this_part.</li>
						</ul>

						<p>
							<a href="">Save Settings</a>
							<a href="">Cancel</a>
						</p>
					</div>
				</div>

			</div>

		</div>
	</div>
</main>

<?php tackle_get_footer(); ?>


<?php tackle_get_footer(); ?>
