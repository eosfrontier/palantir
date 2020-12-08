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


// CHECK BY event ID

if ( isset( $input['event_id'] ) || isset( $input['id'] ) ) {
	$eventid      = isset( $input['event_id'] ) ? $input['event_id'] : ( isset( $input['id'] ) ? $input['id'] : '' );
	$a_event = $c_fetch->get( $eventid, 'id' );
	if ( empty( $a_event ) ) {
		http_response_code( 404 );
		echo json_encode( 'None found.' );
		die();
	}

	http_response_code( 200 );
	echo json_encode( $a_event );
	die();
}


// Haven't answered a way to access.
http_response_code( 400 );
echo json_encode( "You haven't included an 'event_id'." );
