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

<header id="tackle-header" class="tackle-header">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<nav id="tackle-primary-nav" class="tackle-primary-nav large-8 medium-8 cell">
				<ul class="dropdown menu" data-dropdown-menu>
					<li><a href=""><i class="fa fa-home" aria-hidden="true"></i></a></li>
					<li><a href="">Time</a></li>
					<li><a href="">Expenses</a></li>
					<li><a href="">Projects</a></li>
					<li><a href="">Reports</a></li>
					<li><a href="">Invoices</a></li>
					<li><a href="">Manage</a></li>
				</ul>
			</nav>
			<nav id="tackle-secondary-nav" class="tackle-secondary-nav large-4 medium-4 cell">
				<ul class="dropdown menu" data-dropdown-menu>
					<li><a href="">Help</a></li>
					<li><a href="">Setting</a></li>
					<li>
						<a href="">Account<i class="fa fa-angle-down" aria-hidden="true"></i></a>
						<ul class="menu">
							<li><a href="#">My Profile</a></li>
							<li><a href="#">My Time Report</a></li>
							<li><a href="#">Refferals</a></li>
							<li><a href="#">Sign Out</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</header>
