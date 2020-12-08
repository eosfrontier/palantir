<?php
if ( isset( $input['all_data'] ) ) {
	$all_data = $c_fetch->get_all();
	if ( empty( $all_data ) ) {
		http_response_code( 404 );
		echo json_encode( 'None found.' );
		die();
	}
	http_response_code( 200 );
	echo json_encode( $all_data );
	die();
}


// CHECK BY orga ID

if ( isset( $input['orga_id'] ) || isset( $input['id'] ) ) {
	$orgaid      = isset( $input['orga_id'] ) ? $input['orga_id'] : ( isset( $input['id'] ) ? $input['id'] : '' );
	$a_orga = $c_fetch->get( $orgaid, 'id' );
	if ( empty( $a_orga ) ) {
		http_response_code( 404 );
		echo json_encode( 'None found.' );
		die();
	}

	http_response_code( 200 );
	echo json_encode( $a_orga );
	die();
}


// Haven't answered a way to access.
http_response_code( 400 );
echo json_encode( "You haven't included an 'orga_id'." );
