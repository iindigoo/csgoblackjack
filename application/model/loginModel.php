<?php 


	if (!function_exists('login_hash')) {
        function login_hash($steamid)
        {
        $ran_str_0 = md5($steamid);
        $ran_str_1 = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0,6);
        $ran_str_2 = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0,6);
        $ran_str_3 = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0,6);
        return($ran_str_0.$ran_str_1.$ran_str_2.$ran_str_3);
        }}
