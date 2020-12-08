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


// CHECK BY location ID

if ( isset( $input['location_id'] ) || isset( $input['id'] ) ) {
	$locationid      = isset( $input['location_id'] ) ? $input['location_id'] : ( isset( $input['id'] ) ? $input['id'] : '' );
	$a_location = $c_fetch->get( $locationid, 'id' );
	if ( empty( $a_location ) ) {
		http_response_code( 404 );
		echo json_encode( 'None found.' );
		die();
	}

	http_response_code( 200 );
	echo json_encode( $a_location );
	die();
}


// Haven't answered a way to access.
http_response_code( 400 );
echo json_encode( "You haven't included an 'location_id'." );
