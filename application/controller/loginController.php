<?php
    require '../application/controller/openid.php';
    require '../application/model/loginModel.php';
    require '../application/config/config.development.php';

   $_STEAMAPI = "88547EA241A99909D443CECEB36B0D9F";
   try {
     $openid = new LightOpenID('localhost/csgoblackjack/index.php');
     if(!$openid->mode){
       if(isset($_GET['login'])) {
        $openid->identity = 'http://steamcommunity.com/openid/?l=english';
        header('Location: ' . $openid->authUrl());
        } else {
            if($user_login == true){
                $image = "You are already logged in!";
            }else{
                $image = "<form action=\"?login\" method=\"post\" ><input type=\"image\" src=\"https://steamcommunity-a.akamaihd.net/public/images/signinthroughsteam/sits_01.png\"></form>";
            }
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
        $sql_fetch_id = "SELECT * FROM users_steam WHERE steam_id = $player->steamid";
        $query_id = mysqli_query($conn, $sql_fetch_id);
        $login_str_k = login_hash($player->steamid);
            if(mysqli_num_rows($query_id) == 0) {
              $sql_steam = "INSERT INTO users_steam (name, steam_id, avatar, login_str) VALUES ('$player->personaname', '$player->steamid', '$player->avatar', '$login_str_k') ";
            mysqli_query($conn, $sql_steam);
            }
            $sql_steam = "UPDATE users_steam SET login_str = '$login_str_k' WHERE steam_id = '$player->steamid'";
            echo "Welcome".$player->steamid;
            setcookie("steam_id_user",$login_str_k,time()+999999999);
          }
      } else {
       $LoginFail = "User Not logged in";
       }
      }
    } catch(ErrorException $e) {
      echo $e->getMessage();
    }
?>﻿