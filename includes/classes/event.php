<?php

class event {

	public function get_all() {
		$stmt = database::$conn->prepare( "SELECT e.id, e.title, e.title_en, e.event_date, e.event_end_date, loc.name as location,e.short_description, e.short_description_en, usr.name as created_by, e.custom_fields, e.price_text, e.registration_start_date FROM la_eb_events e
		join la_eb_locations loc on loc.id = e.location_id
        join la_users usr on usr.id = e.created_by
		WHERE e.published = 1" );
		$res  = $stmt->execute();
		$res  = $stmt->fetchAll( PDO::FETCH_ASSOC );
		return $res;
	}

	public function get( $id, $needle ) {
			$stmt = database::$conn->prepare( "SELECT e.id, e.title, e.title_en, e.event_date, e.event_end_date, loc.name as location,e.short_description, e.short_description_en, usr.name as created_by, e.custom_fields, e.price_text, e.registration_start_date FROM la_eb_events e
			join la_eb_locations loc on loc.id = e.location_id
			join la_users usr on usr.id = e.created_by
			WHERE e.published = 1 AND $needle = ? AND published = 1" );
			$res  = $stmt->execute( [ $id ] );
			$res  = $stmt->fetch( PDO::FETCH_ASSOC );

		return $res;
	}
}
