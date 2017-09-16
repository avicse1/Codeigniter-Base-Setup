<?php 

/**
 * Return configuration items
 */
if ( ! function_exists('check_password'))
{
	function check_password($password, $hashed_password)
	{
		return (crypt($password, $hashed_password) == $hashed_password);
	}
}

/**
 * Return configuration items
 */
if ( ! function_exists('my_config'))
{
	function my_config($item)
	{
		$CI = & get_instance();
		return $CI->config->item($item);
	}
}

/**
 * Return Language label value
 */
if ( ! function_exists('my_lang'))
{
	function my_lang($item)
	{
		$CI = & get_instance();
		return $CI->lang->line(($item));
	}
}
