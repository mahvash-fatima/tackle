<?php
/**
 * Template Name: Messages
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

?>

<main id="tackle-messages-template-main" class="tackle-messages-template-main">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">

			<!--Section 1-->
			<div class="tackle-messages-template-section-1 large-12 cell">
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
						<h2>Messages</h2>
						<p>Use the following variables to customize messages:</p>

						<div class="grid-x grid-padding-x">
							<div class="large-4 medium-4 cell">
								<p><strong>%invoice_payment_total%</strong></p>
								<p>Sum of all payments issued on this invoice</p>
							</div>

							<div class="large-4 medium-4 cell">
								<p><strong>%invoice_issue_date%</strong></p>
								<p>Issue date of the invoice</p>
							</div>

							<div class="large-4 medium-4 cell">
								<p><strong>%invoice_client%</strong></p>
								<p>Your client’s name</p>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-4 medium-4 cell">
								<p><strong>%invoice_po_number%</strong></p>
								<p>Invoice PO number</p>
							</div>

							<div class="large-4 medium-4 cell">
								<p><strong>%invoice_amount%</strong></p>
								<p>Total open balance of the invoice</p>
							</div>

							<div class="large-4 medium-4 cell">
								<p><strong>%invoice_due_date%</strong></p>
								<p>Due date of the invoice</p>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-4 medium-4 cell">
								<p><strong>%invoice_subject%</strong></p>
								<p>Invoice subject</p>
							</div>

							<div class="large-4 medium-4 cell">
								<p><strong>%company_name%</strong></p>
								<p>Your company’s name</p>
							</div>

							<div class="large-4 medium-4 cell">
								<p><strong>%days_past_due%</strong></p>
								<p>Days past due</p>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-4 medium-4 cell">
								<p><strong>%invoice_url%</strong></p>
								<p>Link to Web Invoice, expanded upon sending</p>
							</div>

							<div class="large-4 medium-4 cell">
								<p><strong>%invoice_id%</strong></p>
								<p>Invoice ID number</p>
							</div>

							<div class="large-4 medium-4 cell">
								<p></p>
								<p></p>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-12 cell">
								<h5>Invoice Message</h5>
								<p>This is the email message sent to your client when you send them an invoice through Harvest. By default, Harvest will include an invoice summary in the message.</p>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-3 medium-3 cell">
								<p>Subject</p>
							</div>

							<div class="large-7 medium-7 cell">
								<p>
									<label for="tackle-subject">
										<input type="text" id="tackle-subject" value="Invoice #%invoice_id% from %company_name%">
									</label>
								</p>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-3 medium-3 cell">
								<p>Body</p>
							</div>

							<div class="large-7 medium-7 cell">
								<p>
									<label for="tackle-messages-template-body-textarea">
										<textarea name="" id="tackle-messages-template-body-textarea" cols="30" rows="10">---------------------------------------------Invoice Summary---------------------------------------------Invoice ID: %invoice_id%Issue Date: %invoice_issue_date%Client: %invoice_client%P.O. Number: %invoice_po_number%Amount: %invoice_amount%Due: %invoice_due_date%The detailed invoice is attached as a PDF.Thank you!---------------------------------------------</textarea>
									</label>
								</p>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-12 cell">
								<h5>Reminder Message</h5>
								<p>Set up an automatic reminder message for late invoices.</p>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-3 medium-3 cell">
								<p>Reminder Schedule</p>
							</div>

							<div class="large-7 medium-7 cell">
								<p>
									<label for="tackle-reminder-schedule">
										<input type="checkbox" id="tackle-reminder-schedule">
										<span>Once invoice is</span>
										<span>3</span>
										<span>day(s) late and every</span>
										<span>7</span>
										<span>day(s) after</span>
									</label>
								</p>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-3 medium-3 cell">
								<p>Subject</p>
							</div>

							<div class="large-7 medium-7 cell">
								<p>
									<label for="tackle-messages-template-subject">
										<input type="text" id="tackle-messages-template-subject" value="Past due invoice reminder: #%invoice_id% from %company_name%">
									</label>
								</p>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-3 medium-3 cell">
								<p>Body</p>
							</div>

							<div class="large-7 medium-7 cell">
								<p>
									<label for="tackle-messages-template-body-textarea">
										<textarea name="" id="tackle-messages-template-body-textarea" cols="30" rows="10">Dear Customer,This is a friendly reminder to let you know that Invoice %invoice_id% is%days_past_due% days past due. If you have already sent the payment,please disregard this message. If not, we would appreciate your promptattention to this matter.Thank you for your business.Cheers,%company_name%</textarea>
									</label>
								</p>
								<p><a href="">Save Message</a></p>
							</div>
						</div>

					</div>

				</div>
			</div>

		</div>
	</div>
</main>

<?php tackle_get_footer(); ?>
