<?php
/**
 * Description of Assets helper
 *
 * @author Rana
 */

defined('BASEPATH') OR exit('No direct script access allowed');

/** 
 * Load file from asset folder
 *
 */
if ( ! function_exists('asset'))
{
	function asset($filePath)
	{
		return base_url().'assets/'.$filePath;
	}
}

/** 
 * Load file from css folder
 *
 */
if ( ! function_exists('css'))
{
	function css($filePath)
	{
		return asset('css/'.$filePath);
	}
}

/** 
 * Load file from images folder
 *
 */
if ( ! function_exists('image'))
{
	function image($filePath)
	{
		return asset('images/'.$filePath);
	}
}

/** 
 * Load file from js folder
 *
 */
if ( ! function_exists('js'))
{
	function js($filePath)
	{
		return asset('js/'.$filePath);
	}
}

