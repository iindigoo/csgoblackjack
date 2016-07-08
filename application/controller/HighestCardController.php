<?php 

	require '../model/function.php';


	if(!function_exists('getallcards'))
		function getallcards()
		{
			$card_1 = getcard(rand(1,52));
			$card_2 = getcard(rand(1,52));
			$card_3 = getcard(rand(1,52));
			$card_4 = getcard(rand(1,52));
			$card_5 = getcard(rand(1,52));
			$card = array('1'=> $card_1, '2'=> $card_2, '3'=> $card_3, '4'=> $card_4, '5'=> $card_5,)
		return $card;
		}



 ?>