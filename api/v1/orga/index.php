<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/palantir/includes/include.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/palantir/includes/token.php';
$c_fetch = new orga();

switch ( $method ) {
	// case 'DELETE':
	// 	require_once './_delete.php';
	// 	break;
	// case 'POST':
	// 	require_once './_post.php';
	// 	break;
	// case 'PUT':
	// 	require_once './_update.php';
	// 	break;
	case 'GET':
		require_once './_get.php';
		break;
	case 'OPTIONS';
		http_response_code( 200 );
	default:
		require_once './_get.php';
	  break;
}
