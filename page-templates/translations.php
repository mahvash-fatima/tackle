<?php
/**
 * Template Name: Translations
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

?>

<main id="tackle-translations-template-main" class="tackle-translations-template-main">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">

			<!--Section 1-->
			<div class="tackle-translations-template-section-1 large-12 cell">
				<div class="grid-x grid-padding-x">

					<div class="large-3 medium-3 cell">
						<nav>
							<ul class="vertical menu">
								<li><a href="<?php echo home_url() . '/tackle/configure'; ?>">Company Information</a></li>
								<li><a href="<?php echo home_url() . '/tackle/default-values'; ?>">Default Values</a></li>
								<li><a href="<?php echo home_url() . '/tackle/appearance'; ?>">Appearance</a></li>
								<li><a href="<?php echo home_url() . '/tackle/messages'; ?>">Message</a></li>
								<li><a href="<?php echo home_url() . '/tackle/translations'; ?>">Translations</a></li>
								<li><a href="<?php echo home_url() . '/tackle/item-types'; ?>">Item Types</a></li>
								<li><a href="<?php echo home_url() . '/tackle/online-payment'; ?>">Online Payment</a></li>
							</ul>
						</nav>
					</div>

					<div class="large-7 medium-7 cell">
						<h2>Translations</h2>
						<p>Translate every label on a Harvest invoice. Your translations will show up on the printed and PDF versions of all invoices.</p>

						<div class="grid-x grid-padding-x">
							<div class="large-3 medium-3 cell">
								<p>Document Title</p>
							</div>

							<div class="large-7 medium-7 cell">
								<p>
									<label for="tackle-document-title">
										<input type="text" id="tackle-document-title" value="INVOICE">
									</label>
								</p>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-3 medium-3 cell">
								<p>From</p>
							</div>

							<div class="large-7 medium-7 cell">
								<p>
									<label for="tackle-from">
										<input type="text" id="tackle-from" value="From">
									</label>
								</p>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-3 medium-3 cell">
								<p>For</p>
							</div>

							<div class="large-7 medium-7 cell">
								<p>
									<label for="tackle-for">
										<input type="text" id="tackle-for" value="Invoice For">
									</label>
								</p>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-3 medium-3 cell">
								<p>Invoice ID</p>
							</div>

							<div class="large-7 medium-7 cell">
								<p>
									<label for="tackle-invoice-id">
										<input type="text" id="tackle-invoice-id" value="Invoice ID">
									</label>
								</p>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-3 medium-3 cell">
								<p>PO Number</p>
							</div>

							<div class="large-7 medium-7 cell">
								<p>
									<label for="tackle-po-number">
										<input type="text" id="tackle-po-number" value="PO Number">
									</label>
								</p>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-3 medium-3 cell">
								<p>Issue Date</p>
							</div>

							<div class="large-7 medium-7 cell">
								<p>
									<label for="tackle-issue-date">
										<input type="text" id="tackle-issue-date" value="Issue Date">
									</label>
								</p>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-3 medium-3 cell">
								<p>Due Date</p>
							</div>

							<div class="large-7 medium-7 cell">
								<p>
									<label for="tackle-due-date">
										<input type="text" id="tackle-due-date" value="Due Date">
									</label>
								</p>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-3 medium-3 cell">
								<p>Upon Receipt</p>
							</div>

							<div class="large-7 medium-7 cell">
								<p>
									<label for="tackle-upon-receipt">
										<input type="text" id="tackle-upon-receipt" value="Upon Receipt">
									</label>
								</p>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-3 medium-3 cell">
								<p>Tax</p>
							</div>

							<div class="large-7 medium-7 cell">
								<p>
									<label for="tackle-tax">
										<input type="text" id="tackle-tax" value="Tax">
									</label>
								</p>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-3 medium-3 cell">
								<p>Tax 2</p>
							</div>

							<div class="large-7 medium-7 cell">
								<p>
									<label for="tackle-tax-2">
										<input type="text" id="tackle-tax-2" value="Tax 2">
									</label>
								</p>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-3 medium-3 cell">
								<p>Discount</p>
							</div>

							<div class="large-7 medium-7 cell">
								<p>
									<label for="tackle-discount">
										<input type="text" id="tackle-discount" value="Discount">
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
									<label for="tackle-subject">
										<input type="text" id="tackle-subject" value="Subject">
									</label>
								</p>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-3 medium-3 cell">
								<p>Item Type</p>
							</div>

							<div class="large-7 medium-7 cell">
								<p>
									<label for="tackle-item-type">
										<input type="text" id="tackle-item-type" value="Item Type">
									</label>
								</p>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-3 medium-3 cell">
								<p>Description</p>
							</div>

							<div class="large-7 medium-7 cell">
								<p>
									<label for="tackle-description">
										<input type="text" id="tackle-description" value="Description">
									</label>
								</p>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-3 medium-3 cell">
								<p>Quantity</p>
							</div>

							<div class="large-7 medium-7 cell">
								<p>
									<label for="tackle-quantity">
										<input type="text" id="tackle-quantity" value="Quantity">
									</label>
								</p>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-3 medium-3 cell">
								<p>Unit Price</p>
							</div>

							<div class="large-7 medium-7 cell">
								<p>
									<label for="tackle-unit-price">
										<input type="text" id="tackle-unit-price" value="Unit Price">
									</label>
								</p>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-3 medium-3 cell">
								<p>Amount</p>
							</div>

							<div class="large-7 medium-7 cell">
								<p>
									<label for="tackle-amount">
										<input type="text" id="tackle-amount" value="Amount">
									</label>
								</p>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-3 medium-3 cell">
								<p>Subtotal</p>
							</div>

							<div class="large-7 medium-7 cell">
								<p>
									<label for="tackle-subtotal">
										<input type="text" id="tackle-subtotal" value="Subtotal">
									</label>
								</p>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-3 medium-3 cell">
								<p>Amount Due</p>
							</div>

							<div class="large-7 medium-7 cell">
								<p>
									<label for="tackle-amount-due">
										<input type="text" id="tackle-amount-due" value="Amount Due">
									</label>
								</p>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-3 medium-3 cell">
								<p>Notes</p>
							</div>

							<div class="large-7 medium-7 cell">
								<p>
									<label for="tackle-notes">
										<input type="text" id="tackle-notes" value="Notes">
									</label>
								</p>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-3 medium-3 cell">
								<p>PDF Page Numbering</p>
							</div>

							<div class="large-7 medium-7 cell">
								<p>
									<label for="tackle-pdf-page-numbering">
										<input type="text" id="tackle-pdf-page-numbering" value="PDF Page Numbering">
										<span>Use [page] to represent current page number and [toPage] to represent total pages</span>
									</label>
								</p>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-3 medium-3 cell">
								<p>File Attachments</p>
							</div>

							<div class="large-7 medium-7 cell">
								<p>
									<label for="tackle-file-attachment">
										<input type="text" id="tackle-file-attachment" value="File Attachments">
									</label>
								</p>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-3 medium-3 cell">
								<p>Payments</p>
							</div>

							<div class="large-7 medium-7 cell">
								<p>
									<label for="tackle-payments">
										<input type="text" id="tackle-payments" value="Payments">
									</label>
								</p>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-3 medium-3 cell">
								<p>Retainer Payments</p>
							</div>

							<div class="large-7 medium-7 cell">
								<p>
									<label for="tackle-retainer-payments">
										<input type="text" id="tackle-retainer-payments" value="Retainer Payments">
									</label>
								</p>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-3 medium-3 cell">
								<p>Pay Invoice</p>
							</div>

							<div class="large-7 medium-7 cell">
								<p>
									<label for="tackle-pay-invoice">
										<input type="text" id="tackle-pay-invoice" value="Pay Invoice">
									</label>
								</p>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-3 medium-3 cell">
								<p>Invoice Link</p>
							</div>

							<div class="large-7 medium-7 cell">
								<p>
									<label for="tackle-invoice-link">
										<input type="text" id="tackle-invoice-link" value="Invoice Link">
									</label>
								</p>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-3 medium-3 cell">
								<p>Paid</p>
							</div>

							<div class="large-7 medium-7 cell">
								<p>
									<label for="tackle-paid">
										<input type="text" id="tackle-paid" value="Paid">
										<span>This is for linking to the Web Invoice in emails.</span>
									</label>
								</p>
							</div>
						</div>

						<div class="grid-x grid-padding-x">
							<div class="large-3 medium-3 cell">
								<p>Client Message</p>
							</div>

							<div class="large-7 medium-7 cell">
								<p>
									<label for="tackle-client-message">
										<input type="text" id="tackle-client-message" value="Client Message">
										<span>This is the message your client will see after they make an online payment on the Web Invoice.</span>
									</label>
								</p>
								
								<p><a href="">Save Translations</a></p>
							</div>
						</div>

					</div>

				</div>
			</div>

		</div>
	</div>
</main>

<?php tackle_get_footer(); ?>
