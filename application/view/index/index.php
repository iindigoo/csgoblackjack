<?php 
	$image = "";
	$LoginFail = "";
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

            		<?= $image ?>
            		<?= $LoginFail ?>
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
