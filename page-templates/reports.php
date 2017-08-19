<?php
/**
 * Template Name: Reports
 * Template Post Type: tackle
 *
 * @package Tackle
 */

tackle_get_header();

?>

<main id="tackle-reports-template-main" class="tackle-reports-template-main">
	<div class="grid-container">

		<!--Section 1-->
		<div class="tackle-reports-template-section-1 grid-x grid-padding-x">
			<nav class="large-12 cell">
				<ul class="menu">
					<li><a href="<?php echo home_url() . '/tackle/reports'; ?>">Time</a></li>
					<li><a href="<?php echo home_url() . '/tackle/detailed-time'; ?>">Detailed Time</a></li>
					<li><a href="<?php echo home_url() . '/tackle/uninvoiced'; ?>">Uninvoiced</a></li>
					<li><a href="<?php echo home_url() . '/tackle/reports-expense'; ?>">Expense</a></li>
				</ul>
			</nav>
		</div>

		<!--Section 2-->
		<div class="tackle-reports-template-section-2 grid-x grid-padding-x">
			<!--Subsection 2a - primary-->
			<div class="tackle-reports-template-subsection-2a-primary large-10 medium-10 cell">
				<span class="tackle-reports-template-time-toggle">
				<i class="fa fa-angle-left" aria-hidden="true"></i>
				<i class="fa fa-angle-right" aria-hidden="true"></i>
				</span>
				<span class="tackle-reports-template-week-name">This Week</span>
				<span class="tackle-reports-template-date">0<?php echo date( 'N - d M Y' ); ?></span>
			</div>

			<!--Subsection 2b secondary-->
			<nav class="tackle-reports-template-subsection-2b-secondary large-2 medium-2 cell">
				<ul class="dropdown menu" data-dropdown-menu>
					<li>
						<a href="">Week<i class="fa fa-angle-down" aria-hidden="true"></i></a>
						<ul class="menu">
							<li><a href="#">Week</a></li>
							<li><a href="#">Semimonthly</a></li>
							<li><a href="#">Month</a></li>
							<li><a href="#">Quarter</a></li>
							<li><a href="#">Year</a></li>
							<li><a href="#">Custom</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>

		<!--Section 3-->
		<div class="tackle-reports-template-reports-summary grid-x grid-padding-x">

			<!--Subsection 3a - primary-->
			<div class="tackle-reports-template-subsection-3a-primary large-3 medium-3 cell">
				<p>Hours Tracked</p>
				<p>23.88</p>
			</div>

			<!--Subsection 3b - Secondary-->
			<div class="tackle-reports-template-subsection-3b-secondary large-3 medium-3 cell">
				<div class="grid-x grid-padding-x">
					<div class="large-6 medium-6 cell">
						<svg width="80" height="80" viewBox="-40 -40 80 80" style="transform: rotate(-90deg)">
							<path fill="none" stroke="#41b419" stroke-width="10" d="M35,0A35,35,0,0,0,-14.47095417782469,-31.868346131911178"></path>
							<path fill="none" stroke="#B5E5A5" stroke-width="10" d="M35,0A35,35,0,1,1,-14.47095417782469,-31.868346131911178"></path>
						</svg>
						<span>36</span>
						<span>%</span>
					</div>
					<div class="large-6 medium-6 cell">
						<p>Billable Hours</p>
						<ul>
							<li>7.59 Billable</li>
							<li>16.84 Non Billable</li>
						</ul>
					</div>
				</div>
			</div>

			<!--Subsection 3c - Tertiary-->
			<div class="tackle-reports-template-subsection-3c-tertiary large-3 medium-3 cell">
				<p>Billable Amount</p>
				<p>₹0.00</p>
				<p>Excludes Fixed Fee Projects</p>
			</div>

			<!--Subsection 3d - Quaternary-->
			<div class="tackle-reports-template-subsection-3d-Quaternary large-3 medium-3 cell">
				<p>Uninvoiced Amount</p>
				<p>₹0.00</p>
				<p>Excludes Fixed Fee Projects</p>
			</div>

		</div>

		<!--Section 4-->
		<div class="tackle-reports-template-section-4 grid-x grid-padding-x">
			<nav class="large-4 medium-4 cell">
				<ul class="menu">
					<li><a href="#">Clients</a></li>
					<li><a href="#">Projects</a></li>
					<li><a href="#">Tasks</a></li>
					<li><a href="#">Staff</a></li>
				</ul>
			</nav>

			<div class="large-8 medium-8 cell">
				<div class="grid-x grid-padding-x">

					<div class="large-3 medium-3 cell">
						<label for="tackle-active-projects-only">
							<input type="checkbox" id="tackle-active-projects-only">
							<span>Active Projects Only</span>
						</label>
					</div>

					<nav class="tackle-reports-template-nav-export large-2 medium-2 cell">
						<ul class="dropdown menu" data-dropdown-menu>
							<li>
								<a href="">Export<i class="fa fa-angle-down" aria-hidden="true"></i></a>
								<ul class="menu">
									<li><a href="#">Excel</a></li>
									<li><a href="#">CSV</a></li>
								</ul>
							</li>
						</ul>
					</nav>

					<span class="large-2 medium-2 cell"><a href="">Detailed Report</a></span>

					<span class="large-1 medium-1 cell"><i class="fa fa-print" aria-hidden="true"></i></span>
				</div>
			</div>
		</div>

		<!--Section 5-->
		<div class="grid-x grid-padding-x">
			<table class="tackle-reports-template-section-5 large-12 cell ">
				<tbody>
				<tr>
					<th>Name</th>
					<th>Hours</th>
					<th>Progress Bar</th>
					<th>Billable Hours</th>
					<th>Billable Amount</th>
				</tr>
				<tr>
					<td><a href="">Mahvash</a></td>
					<td><a href="">38.92 <i class="fa fa-file-text-o" aria-hidden="true"></i></a></td>
					<td><a href="">Progress</a></td>
					<td><a href="">11.29 <span>(29%)</span></a></td>
					<td><a href="">₹0.00</a></td>
				</tr>
				<tr>
					<td><a href="">Total</a></td>
					<td><a href="">38.92</a></td>
					<td><a href="">Progress</a></td>
					<td><a href="">29.29</a></td>
					<td><a href="">₹0.00</a></td>
				</tr>
				</tbody>
			</table>
		</div>
	</div>
</main>

<?php tackle_get_footer(); ?>
