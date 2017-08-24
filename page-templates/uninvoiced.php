<?php
/**
 * Template Name: Uninvoiced
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

?>

<main id="tackle-uninvoiced-template-main" class="tackle-uninvoiced-template-main margin-vertical">
	<div class="grid-container">

		<div class="tackle-reports-template-section-1 grid-x grid-padding-x">
			<nav class="large-12 cell">
				<ul class="menu">
					<li><a href="<?php echo home_url() . '/tackle/my-time-report'; ?>">Time</a></li>
					<li><a href="<?php echo home_url() . '/tackle/detailed-time'; ?>">Detailed Time</a></li>
					<li><a href="<?php echo home_url() . '/tackle/uninvoiced'; ?>">Uninvoiced</a></li>
					<li><a href="<?php echo home_url() . '/tackle/reports-expense'; ?>">Expenses</a></li>
				</ul>
			</nav>
		</div>

		<!--Section 1-->
		<div class="tackle-uninvoiced-template-section-1 margin-bottom grid-x grid-padding-x">
			<div class="large-12 cell">
				<span>Uninvoiced Report</span>
				<span>:</span>
				<span>01 - 31 Aug 2017</span>
			</div>
		</div>

		<!--Section 2-->
		<div class="tackle-uninvoiced-template-section-2 grid-x grid-padding-x">
			<div class="large-12 cell">
				<div class="grid-x grid-padding-x">

					<!--Section 2a - primary-->
					<div class="tackle-uninvoiced-template-subsection-2a-primary large-6 medium-6 cell">
						<p>
							<span><a href=""><i class="fa fa-caret-left" aria-hidden="true"></i></a></span>
							<span><a href="">Month</a></span>
							<span><a href="">Quarter</a></span>
							<span><a href="">Year</a></span>
							<span><a href="">All Time</a></span>
							<span><a href=""><i class="fa fa-caret-right" aria-hidden="true"></i></a></span>
						</p>
					</div>

					<!--Section 2b - secondary-->
					<div class="tackle-uninvoiced-template-subsection-2b-secondary large-6 medium-6 cell">

						<label for="tackle-active-project-only">
							<input type="checkbox" id="tackle-active-project-only">
							<span>Active Projects Only</span>
						</label>

						<label for="tackle-project-with-balance-only">
							<input type="checkbox" id="tackle-project-with-balance-only">
							<span>Project With Balance Only</span>
						</label>

						<nav class="tackle-uninvoiced-export-nav nav-style">
							<ul class="dropdown menu" data-dropdown-menu>
								<li>
									<a href="">Export<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="menu">
										<li><a href="">Excel</a></li>
										<li><a href="">CSV</a></li>
									</ul>
								</li>
							</ul>
						</nav>

						<span><a href=""><i class="fa fa-print" aria-hidden="true"></i></a></span>

					</div>

				</div>

			</div>
		</div>

		<!--Section 3-->
		<div class="grid-x grid-padding-x">
			<table class="tackle-uninvoiced-template-section-3 large-12 cell ">
				<tbody>
				<tr>
					<th>Name</th>
					<th>Total Hours</th>
					<th>Uninvoiced Hours</th>
					<th>Uninvoiced Expenses</th>
					<th>Uninvoiced Amount</th>
					<th>Create</th>
				</tr>
				<tr>
					<td><a href="">Mahvash</a></td>
					<td><a href="">7.91</a></td>
					<td><a href="">7.91</a></td>
					<td><a href="">₹500.00</a></td>
					<td>₹500.00</td>
					<td><a href="">Invoice</a></td>
				</tr>
				<tr>
					<td><a href="">Tackle</a></td>
					<td><a href="">7.91</a></td>
					<td><a href="">7.91</a></td>
					<td><a href="">₹500.00</a></td>
					<td>₹500.00</td>
					<td>No Rates</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td>Total</td>
					<td>₹500.00</td>
					<td></td>
				</tr>
				</tbody>
			</table>
		</div>

	</div>
</main>

<?php tackle_get_footer(); ?>
