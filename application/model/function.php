<?php
/*Card Functions*/

if (!function_exists('getcard')) {
function getcard($number)
{
$get_var_card = array('1' => 'sa', '2' => 's2', '3' => 's3', '4' => 's4' , '5' => 's5', '6' => 's6', '7' => 's7', '8' => 's8', '9' => 's9', '10' => 's10', '11' => 'sb', '12' => 'sv', '13' => 'sh',
					 '14' => 'ha', '15' => 'h2', '16' => 'h3', '17' => 'h4' , '18' => 'h5', '19' => 'h6', '20' => 'h7', '21' => 'h8', '22' => 'h9', '23' => 'h10', '24' => 'hb', '25' => 'hv', '26' => 'hh',
					 '27' => 'ra', '28' => 'r2', '29' => 'r3', '30' => 'r4' , '31' => 'r5', '32' => 'r6', '33' => 'r7', '34' => 'r8', '35' => 'r9', '36' => 'r10', '37' => 'rb', '38' => 'rv', '39' => 'rh',
					 '40' => 'ka', '41' => 'k2', '42' => 'k3', '43' => 'k4' , '44' => 'k5', '45' => 'k6', '46' => 'k7', '47' => 'k8', '48' => 'k9', '49' => 'k10', '50' => 'kb', '51' => 'kv', '52' => 'kh',);

		return($get_var_card[$number]);

}}


if (!function_exists('check_card_exist')) {
function check_card_exist($check_card)
{
		if (!strpos(read_txt_file("track.txt"),$check_card))
		{
			return true;
		}
		else
		{
			return false;
		}
}}


if (!function_exists('get_highest_card_1')) {
function get_highest_card_1($get_card_number)
{

}}
/*End card Functions*/



/*safety Functions*/

if (!function_exists('create_hash')) {
function create_hash()
{
$ran_str_0 = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0,6);
$ran_str_1 = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0,6);
$ran_str_2 = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0,6);
$ran_str_3 = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0,6);
return($ran_str_0."-".$ran_str_1."-".$ran_str_2."-".$ran_str_3);
}}

/*end safety Functions*/



/*Check Before Functions*/

if (!function_exists('check_requiest')) {
function check_requiest($check_get_request)
{
if(isset($_GET[$check_get_request]) && $_GET[$check_get_request] != "" && $_GET[$check_get_request] == "true")
{
return(true);
}
}}
/*End Check Before Functions*/



/*Database Functions*/

/*Database Get Functions*?
/*End database Get Functions*/

/*Database Set Functions*/
/*End Database Set Functions*/

/*End Database Functions*/






/*tempary Functions*/
if (!function_exists('write_txt_file')) {
function write_txt_file($txt_file,$write_str)
{
$f = fopen($txt_file, "a+");
fwrite($f,",".$write_str.","); 
fclose($f);
}
}


if (!function_exists('read_txt_file')) {
function read_txt_file($txt_file)
{
$f = fopen($txt_file, "r");
return fread($f,filesize($txt_file));
fclose($f);
}
}

if (!function_exists('clear_card_memory')) {
function clear_card_memory($txt_file)
{
$f = fopen($txt_file, "w");
return fread($f,"");
fclose($f);
}
}
/*end temperary Functions*/


?>