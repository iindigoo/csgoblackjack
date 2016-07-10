<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "cs21go";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $db);

	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	if (isset($_COOKIE['steam_id_user']))
		{
			if($_COOKIE['steam_id_user'] !=""){
				$cookie = $_COOKIE['steam_id_user'];
				$sql_fetch_login_str = "SELECT * FROM users_steam WHERE login_str = '$cookie'";
       			$query_login_str = mysqli_query($conn, $sql_fetch_login_str);
	       			if(mysqli_num_rows($query_login_str)) {
	       				$user_login = true;
	       			}else{
			$user_login = false;
		}
			}else{
			$user_login = false;
		}
		}else{
			$user_login = false;
		}