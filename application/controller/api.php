<?php
require '../model/function.php';

if(check_requiest('card_key'))
{
	return_new_card:{
		$card_key = rand(1,52);
		$value_card = getcard($card_key);

		if (check_card_exist($value_card))
		{
			print $value_card;
			write_txt_file("track.txt",$value_card);
		}
		else
		{
			goto return_new_card;
		}
	}
}
	


if(check_requiest('create_random_hash'))
{
	print create_hash();
}

if(check_requiest('get_highest_card_1'))
{
	print get_highest_card_1();
}

?>