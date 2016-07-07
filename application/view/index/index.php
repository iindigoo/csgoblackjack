<?php 

	require "../application/controller/loginController.php";

 ?>


<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CS21GO</title>
	<meta name="description" content="CS21GO: An csgo blackjack gamble site!" />
	<meta name="keywords" content="cs21g0, blackjack, csgo, roulette, coins, responsive, mobile-friendly" />
	<meta name="CS21GO" content="Codrops" />
	<link rel="shortcut icon" href="favicon.ico">
	<!-- food icons -->
	<link rel="stylesheet" type="text/css" href="css/organicfoodicons.css" />
	<!-- demo styles -->
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<!-- menu styles -->
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<script src="js/modernizr-custom.js"></script>
	
</head>

<body>
	<!-- Main container -->
	<div class="container">
		<!-- Blueprint header -->
		<header class="bp-header cf">
			<div class="dummy-logo">
				<div class="dummy-icon foodicon foodicon--coconut"></div>
				<h2 class="dummy-heading">CS21GO</h2>
			</div>
            <div class="bp-header__main">
            		<?= $image ?>
                </nav>
            </div>
		</header>
		<button class="action action--open" aria-label="Open Menu"><span class="icon icon--menu"></span></button>
		<nav id="ml-menu" class="menu">
			<button class="action action--close" aria-label="Close Menu"><span class="icon icon--cross"></span></button>
			<div class="menu__wrap">
				<ul data-menu="main" class="menu__level">
					<li class="menu__item"><a class="menu__link" data-submenu="submenu-1" href="#">Games</a></li>
					<li class="menu__item"><a class="menu__link" data-submenu="submenu-2" href="#">Account</a></li>
					<li class="menu__item"><a class="menu__link" data-submenu="submenu-3" href="#">Depoist</a></li>
                    <li class="menu__item"><a class="menu__link" data-submenu="submenu-4" href="#">Withdraw</a></li>
					<li class="menu__item"><a class="menu__link" data-submenu="submenu-5" href="#">Extras</a></li>
				</ul>
				<!-- Submenu 1 -->
				<ul data-menu="submenu-1" class="menu__level">
					<li class="menu__item"><a class="menu__link" href="#">Blackjack</a></li>
					<li class="menu__item"><a class="menu__link" href="#">Roulette</a></li>
                    <li class="menu__item"><a class="menu__link" href="#">Free coins</a></li>
				</ul>
				<!-- Submenu 2 -->
				<ul data-menu="submenu-2" class="menu__level">
					<li class="menu__item"><a class="menu__link" href="#">Settings</a></li>
					<li class="menu__item"><a class="menu__link" href="#">History</a></li>
					<li class="menu__item"><a class="menu__link"  href="#">Affiliates</a></li>
					<li class="menu__item"><a class="menu__link" href="#">Statistics</a></li>
                    <li class="menu__item"><a class="menu__link" href="#">Sign out</a></li>
				</ul>

				<!-- Submenu 4 -->
				<ul data-menu="submenu-5" class="menu__level">
					<li class="menu__item"><a class="menu__link" href="#">FAQ</a></li>
					<li class="menu__item"><a class="menu__link" href="#">How to play</a></li>
					<li class="menu__item"><a class="menu__link" href="#">Terms of Service</a></li>
					<li class="menu__item"><a class="menu__link" href="#">Support</a></li>
				</ul>
			</div>
		</nav>
		<div class="content">
		<div class="box">
		<div class="centerImage">
		<img src="img/test.jpg" alt=""></div>
		<h1> free coins</h1>
			<input name="freecoins" placeholder="Enter your code here" type="text" class="form-control ember-view ember-text-field">

			<button name="coinButton" class="btn btn-blackened ember-view">  Redeem Code
</button>
		</div>
		<!-- Ajax loaded content here -->

		</div>
	<!-- /view -->
	<script src="js/classie.js"></script>
	<script src="js/dummydata.js"></script>
	<script src="js/main.js"></script>
	<script>
	(function() {
		var menuEl = document.getElementById('ml-menu'),
			mlmenu = new MLMenu(menuEl, {
				// breadcrumbsCtrl : true, // show breadcrumbs
				// initialBreadcrumb : 'all', // initial breadcrumb text
				backCtrl : false, // show back button
				// itemsDelayInterval : 60, // delay between each menu item sliding animation
				onItemClick: loadDummyData // callback: item that doesn´t have a submenu gets clicked - onItemClick([event], [inner HTML of the clicked item])
			});

		// mobile menu toggle
		var openMenuCtrl = document.querySelector('.action--open'),
			closeMenuCtrl = document.querySelector('.action--close');

		openMenuCtrl.addEventListener('click', openMenu);
		closeMenuCtrl.addEventListener('click', closeMenu);

		function openMenu() {
			classie.add(menuEl, 'menu--open');
		}

		function closeMenu() {
			classie.remove(menuEl, 'menu--open');
		}

		// simulate grid content loading
		var gridWrapper = document.querySelector('.content');

		function loadDummyData(ev, itemName) {
			ev.preventDefault();

			closeMenu();
			gridWrapper.innerHTML = '';
			classie.add(gridWrapper, 'content--loading');
			setTimeout(function() {
				classie.remove(gridWrapper, 'content--loading');
				gridWrapper.innerHTML = '<ul class="products">' + dummyData[itemName] + '<ul>';

			}, 700);
		}
	})();
	</script>
</body>

</html>
