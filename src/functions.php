<?php
/**
 * Function For View
**/

use LaraPress\View\Blade;

function view( $view, $data = array(), $return = false )

{

	$view_dir = defined('LP_VIEW_DIR')?LP_VIEW_DIR:'resources/views';
	$cache_dir = defined('LP_CACHE_DIR')?LP_CACHE_DIR:'storage/framework/views';

	$blade = new Blade($view_dir, $cache_dir);

	if ( $return ) return $blade->view()->make( $view, $data );

	echo $blade->view()->make( $view, $data );

	return;

}