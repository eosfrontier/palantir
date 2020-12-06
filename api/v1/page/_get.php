<?php
if ( isset( $input['all_pages'] ) ) {
	$all_pages = $c_fetch->get_all();
	if ( empty( $all_pages ) ) {
		http_response_code( 404 );
		echo json_encode( 'None found.' );
		die();
	}
	http_response_code( 200 );
	echo json_encode( $all_pages );
	die();
}


// CHECK BY page ID

if ( isset( $input['page_id'] ) || isset( $input['id'] ) ) {
	$pageid      = isset( $input['page_id'] ) ? $input['page_id'] : ( isset( $input['id'] ) ? $input['id'] : '' );
	$a_page = $c_fetch->get( $pageid, 'id' );
	if ( empty( $a_page ) ) {
		http_response_code( 404 );
		echo json_encode( 'None found.' );
		die();
	}

	http_response_code( 200 );
	echo json_encode( $a_page );
	die();
}


// Haven't answered a way to access.
http_response_code( 400 );
echo json_encode( "You haven't included an 'page_id'." );
