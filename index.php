<?php 

	include "apikey.php";
	include "openid.php";

	$OpenId = new LightOpenID("localhost");

	session_start();

	if(!$OpenID->mode){
		if(isset($_GET['login'])){
			$OpenID->identity = "https://steamcommunity.com/openid";
			header("location: {$OpenID->authUrl()}");
		}
		if(!isset($_SESSION['T2SteamAuth'])){
			$login = "<div id=\"login\">Welcome <a href=\"?login\"><img src=\"http://cdn.steamcommunity.com/public/images/signinthroughsteam/sits_small.png\"/></a>";
		}
	}
	echo $login
 ?>