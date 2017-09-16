<?php 


/**
 * Convert phone numbers to US format
 *
 */
if(!function_exists('convertPhoneNumberToUSFormat')){
	function convertPhoneNumberToUSFormat($value)
	{
		return preg_replace("/^1?(\d{3})(\d{3})(\d{4})$/", "($1) $2-$3", $value);
	}
}