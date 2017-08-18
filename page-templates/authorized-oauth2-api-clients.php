<?php
/**
 * Template Name: Authorized OAuth2 API Clients
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

?>

<main id="tackle-authorized-oauth2-api-clients-template-main" class="tackle-authorized-oauth2-api-clients-template-main">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">

			<!--Section 1-->
			<div class="tackle-authorized-oauth2-api-clients-template-section-1 large-12 cell">

				<div class="grid-x grid-padding-x">
					<div class="large-12 medium-3 cell">
						<h2>Authorized OAuth2 API Clients</h2>
						<p>The clients listed below are active OAuth 2.0 clients registered to your Harvest account. Click on the name to view more details, including the Client Identifier, Client Secret, and Redirect URL.</p>
						<p>
							If you have any questions about using OAuth 2.0 to develop an integration with Harvest, please contact us.
							<span><a href="">contact us.</a></span>
						</p>
						<p>
							<a href=""><i class="fa fa-plus" aria-hidden="true"></i>New Client</a>
						</p>
					</div>
				</div>
			</div>

		</div>
	</div>
</main>

<?php tackle_get_footer(); ?>
