<?php

class event {

	public function get_all() {
		$stmt = database::$conn->prepare( "SELECT e.id, e.title, e.title_en, orga.name as organisatie, orga.name_en as organization, e.event_date, e.event_end_date, loc.name as location_name, 
		loc.address as location_address, e.short_description, e.short_description_en, usr.name as created_by, e.custom_fields, e.price_text, 
		e.registration_start_date, e.registration_handle_url FROM la_eb_events e
				join la_eb_locations loc on loc.id = e.location_id
				join la_users usr on usr.id = e.created_by
				join la_eb_categories orga on orga.id = e.main_category_id
				WHERE e.published = 1" );
		$res  = $stmt->execute();
		$res  = $stmt->fetchAll( PDO::FETCH_ASSOC );
		return $res;
	}

	public function get( $id, $needle ) {
			$stmt = database::$conn->prepare( "SELECT e.id, e.title, e.title_en, orga.name as organisatie, orga.name_en as organization, e.event_date, e.event_end_date, loc.name as location_name, 
			loc.address as location_address, e.short_description, e.short_description_en, usr.name as created_by, e.custom_fields, e.price_text, 
			e.registration_start_date, e.registration_handle_url FROM la_eb_events e
					join la_eb_locations loc on loc.id = e.location_id
					join la_users usr on usr.id = e.created_by
					join la_eb_categories orga on orga.id = e.main_category_id
			WHERE e.published = 1 AND e.id = $id" );
			$res  = $stmt->execute( [ $id ] );
			$res  = $stmt->fetch( PDO::FETCH_ASSOC );
		return $res;
	}
}
