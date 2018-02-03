<?php
/**
 * Header file of tackle.
 *
 * @package Tackle
 */

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Forum" rel="stylesheet">
	<title>Document</title>
	<?php wp_head(); ?>
</head>
<body id="tackle-body" class="tackle-body">

<!-- Navigation -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
	<div class="container">
		<a class="navbar-brand" href="<?php echo home_url() . '/tackle'; ?>">
			<i class="fa fa-home" aria-hidden="true"></i>
		</a>
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="<?php echo home_url() . '/tackle/time'; ?>">Time</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo home_url() . '/tackle/expenses'; ?>">Expenses</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo home_url() . '/tackle/projects'; ?>">Projects</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo home_url() . '/tackle/reports'; ?>">Reports</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo home_url() . '/tackle/invoices'; ?>">Invoices</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo home_url() . '/tackle/manage'; ?>">Manage</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="">Help</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="">Settings</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Account
					</a>
					<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
						<a class="dropdown-item" href="<?php echo home_url() . '/tackle/my-profile'; ?>">My Profile</a>
						<a class="dropdown-item" href="<?php echo home_url() . '/tackle/my-time-report'; ?>">My Time Report</a>
						<a class="dropdown-item" href="<?php echo home_url() . '/tackle/referrals'; ?>">Refferals</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="<?php echo home_url() . '/tackle/signout'; ?>">Sign Out</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
</nav>
