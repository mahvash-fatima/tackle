<?php
/**
 * Template Name: Default Values
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

?>

<main id="tackle-default-values-template-main" class="tackle-default-values-template-main">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">

			<!--Section 1-->
			<div class="tackle-default-values-template-section-1 large-12 cell">
				<div class="grid-x grid-padding-x">

					<div class="large-3 medium-3 cell">
						<nav>
							<ul class="vertical menu">
								<li><a href="#">Company Information</a></li>
								<li><a href="#">Default Values</a></li>
								<li><a href="#">Appearance</a></li>
								<li><a href="#">Message</a></li>
								<li><a href="#">Translations</a></li>
								<li><a href="#">Item Types</a></li>
								<li><a href="#">Online Payment</a></li>
							</ul>
						</nav>
					</div>

					<div class="large-7 medium-7 cell">
						<h2>Configure Default Values</h2>
						<p>The following default values will automatically show up the next time you create an invoice.</p>

						<div class="grid-x grid-padding-x">
							<div class="large-3 medium-3 cell">
								<p>Tax</p>
							</div>

							<div class="large-7 medium-7 cell">
								<p>
									<label for="tackle-tax">
										<input type="text" id="tackle-tax">
										<span>%</span>
										<span><a href="">Enable Second Tax</a></span>
									</label>
								</p>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-3 medium-3 cell">
								<p>Time Rounding</p>
							</div>

							<div class="large-7 medium-7 cell">
								<p>
									<label for="tackle-time-rounding">
										<select name="" id="tackle-time-rounding">
											<option value="">No Rounding</option>
											<option value="">Round to nearest</option>
											<option value="">Round up to nearest</option>
										</select>
									</label>
									<span>Controls rounding in summary time reports and invoices. Time is never rounded in Detailed Time Reports and Timesheets.</span>
								</p>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-3 medium-3 cell">
								<p>Payments Due</p>
							</div>

							<div class="large-7 medium-7 cell">
								<p>
									<label for="tackle-payment-due">
										<select name="" id="tackle-payment-due">
											<option value="">Upon Receipt</option>
											<option value="">Net 15</option>
											<option value="">Net 30</option>
											<option value="">Net 45</option>
											<option value="">Net 60</option>
											<option value="">Custom</option>
										</select>
									</label>
								</p>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-3 medium-3 cell">
								<p>Invoice Summary</p>
							</div>

							<div class="large-7 medium-7 cell">
								<p>
									<label for="tackle-invoice-summary">
										<input type="text" id="tackle-invoice-summary">
									</label>
									<span>The Invoice Summary is a one-liner to quickly summarize what the invoice is for. Summaries can be different per invoice, but you might have a common template, which you can specify here as a default. Or just leave it blank.</span>
								</p>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-3 medium-3 cell">
								<p>Invoice Notes</p>
							</div>

							<div class="large-7 medium-7 cell">
								<p>
									<label for="tackle-invoice-notes">
										<textarea name="" id="tackle-invoice-notes" cols="30" rows="3"></textarea>
									</label>
									<span>Invoice Notes show up below line items on invoices. You can add additional information such as payment method, payment terms, or additional tax information.</span>
								</p>
								<p><a href="">Save Default Values</a></p>
							</div>
						</div>

					</div>

				</div>
			</div>

		</div>
	</div>
</main>

<?php tackle_get_footer(); ?>
