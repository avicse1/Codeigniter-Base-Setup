<?php

// Generate salt
if ( ! function_exists('generate_salt'))
{		
	function generate_salt()
	{
		$urs = md5(uniqid(mt_rand(), true));
		$base64_string = base64_encode($urs);
		$mbs = str_replace('+', '.', $base64_string);
		$salt = substr($mbs, 0, 22);
		return $salt;
	}
}

// One way encryption
if ( ! function_exists('bcrypt'))
{
	function bcrypt($string)
	{
		$hash_format = '$2y$10$';
		$salt = generate_salt();
		$format_salt = $hash_format . $salt;
		$hash = crypt($string,$format_salt);
		return $hash;					
	}
}

/**
 * Get numbers only from string
 *
 * @param string 	$value
 * @return int
 */
if ( ! function_exists('get_numbers_from_string'))
{
	function get_numbers_from_string($value)
	{
		return preg_replace("/[^0-9]/","",$value);
	}
}


/* Generate Random Characters */
if(!function_exists('create_random_characters')){
	
	function create_random_characters()
	{
		$chars = "#ABCDEFGHIJKMNOPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz023456789";
		srand((double)microtime()*1000000);
		$i = 0;
		$pass = '' ;

		while ($i <= 7)
		{
			$num = rand() % 33;
			$tmp = substr($chars, $num, 1);
			$pass = $pass . $tmp;
			$i++;
		}
		return $pass;
	}
	
}


/* Generate Random Characters */
if(!function_exists('words_first_letter')){
	
	function words_first_letter($string)
	{
		$words = explode(' ', $string);

		$join_first_letters = '';
		
		foreach ($words as $word) {
			$join_first_letters .= $word[0];
		}

		return strtoupper($join_first_letters);
	}
	
}

if(!function_exists('ifEmptyPrintDash')){
	
	function ifEmptyPrintDash($item){

	return (!empty($item)) ? $item : '-';

	}
}


