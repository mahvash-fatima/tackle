<?php
/**
 * Template Name: Expenses
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

?>

<main id="tackle-expenses-template-main" class="tackle-expenses-template-main">
	<div class="grid-container">

		<!--Section 1-->
		<div class="tackle-expenses-template-section-1 grid-x grid-padding-x">
			<div class="large-12 cell">

				<div class="grid-x grid-padding-x">
					<div class="large-2 medium-2 cell">
						<a href="" class="tackle-expenses-template-add-new-expense">
							<i class="fa fa-plus" aria-hidden="true"></i>
							New Expense
						</a>
					</div>
					<div class="large-10 medium-10 cell">
						<div class="grid-x grid-padding-x">
							<div class="large-3 medium-3 cell">
								<label for="tackle-date">
									<span>Date</span>
									<input type="date" id="tackle-date">
								</label>
							</div>

							<div class="large-5 medium-5 cell">
								<p>
									<label for="tackle-project">
										<span>Project</span>
										<select name="" id="tackle-project">
											<option value="" disabled selected>Choose a project...</option>
											<option value="">Tackle</option>
										</select>
									</label>
								</p>

								<p>
									<label for="tackle-category">
										<span>Category</span>
										<select name="" id="tackle-category">
											<option value="" disabled selected>Choose a category...</option>
											<option value="">Entertainment</option>
											<option value="">Lodging</option>
											<option value="">Meals</option>
											<option value="">Mileage</option>
											<option value="">Other</option>
											<option value="">Transportation</option>
										</select>
									</label>
								</p>

								<p>
									<label for="tackle-project-category-notes">
										<textarea name="" id="" cols="3" rows="3" placeholder="Notes (optional)"></textarea>
									</label>
									<span><i class="fa fa-paperclip" aria-hidden="true"></i>Attach Receipt</span>
								</p>

								<p>
									<label for="tackle-this-expense-is-billable">
										<input type="checkbox" id="tackle-this-expense-is-billable">
										<span>This expense is billable</span>
									</label>
								</p>

								<span><a href="">Save Expense</a></span>
								<span><a href="">Cancel</a></span>
							</div>

							<div class="large-2 medium-2 cell">
								<label for="tackle-amount">
									<span>Amount</span>
									<textarea name="" id="tackle-amount" cols="1" rows="3" placeholder="₹">₹</textarea>
								</label>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--Section 2-->
		<div class="tackle-expenses-template-section-2 grid-x grid-padding-x">
			<div class="large-12 cell">

				<div class="grid-x grid-padding-x">
					<div class="large-2 medium-2 cell">
						<p>14 - 20 Aug 2017</p>
					</div>
					<div class="large-10 medium-10 cell">
						<div class="grid-x grid-padding-x">
							<div class="large-2 medium-5 cell">
								<p><?php echo date( 'd M' ); ?></p>
							</div>

							<div class="large-6 medium-6 cell">
								<p>
									Tackle
									<span>(Mahvash)</span>
								</p>

								<p>
									<span>Billable</span>
									<span>Other</span>
									<span>-</span>
									<span>Add New Expense Notes</span>
								</p>
							</div>

							<div class="large-2 medium-2 cell">
								<span>₹500.00</span>
								<span><i class="fa fa-paperclip" aria-hidden="true"></i></span>
								<span><i class="fa fa-pencil" aria-hidden="true"></i></span>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

		<!--Section 3-->
		<div class="grid-x grid-padding-x">
			<div class="tackle-expenses-template-section-3 large-12 cell">
				<p class="tackle-expenses-template-expense-info">
					Looks a little empty here! <br>
					<a href="" class="tackle-expenses-template-expense-link">Create your first expense</a> to get started.
				</p>
			</div>
		</div>

	</div>
</main>

<?php tackle_get_footer(); ?>
