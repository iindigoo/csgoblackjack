<?php
 require '../application/controller/openid.php';
 require '../application/config/config.development.php';
 
   $_STEAMAPI = "88547EA241A99909D443CECEB36B0D9F";
   try {
     $openid = new LightOpenID('localhost/csgoblackjack/index.php');
     if(!$openid->mode){
       if(isset($_GET['login'])) {
        $openid->identity = 'http://steamcommunity.com/openid/?l=english';
        header('Location: ' . $openid->authUrl());
        } else {
          $image = "<form action=\"?login\" method=\"post\" ><input type=\"image\" src=\"https://steamcommunity-a.akamaihd.net/public/images/signinthroughsteam/sits_01.png\"></form>";
        }
    } elseif($openid->mode == 'cancel'){
     echo 'User has canceled authetication!';
    } else {
     if($openid->validate()) {
      $id = $openid->identity;
      $ptn = "/^http:\/\/steamcommunity\.com\/openid\/id\/(7[0-9]{15,25}+)$/";
      preg_match($ptn, $id, $matches);
      
      $url = "http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=$_STEAMAPI&steamids=$matches[1]";
      $json_object= file_get_contents($url);
      $json_decoded = json_decode($json_object);
      
      foreach ($json_decoded->response->players as $player)
      {
        $sql_fetch_id = "SELECT * FROM users_steam WHERE steamid = $player->steamid";
        $query_id = mysqli_query($conn, $sql_fetch_id);

        if(mysqli_num_rows($query_id) == 0) {
          $sql_steam = "INSERT INTO users_steam (name, steamid, avatar) VALUES ('$player->personaname', '$player->steamid', '$player->avatar')";
          mysqli_query($conn, $sql_steam);
        }
      }
      } else {
       $LoginFail = "User Not logged in";
       }
      }
     } catch(ErrorException $e) {
      echo $e->getMessage();
      }
?>﻿