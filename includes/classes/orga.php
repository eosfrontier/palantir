<?php

class orga {

	public function get_all() {
		$stmt = database::$conn->prepare( "SELECT id, name, name_en, email, website, description, description_en 
        FROM joomla_la.la_eb_categories 
        WHERE published = 1;" );
		$res  = $stmt->execute();
		$res  = $stmt->fetchAll( PDO::FETCH_ASSOC );
		return $res;
	}
	public function get_active() {
		$stmt = database::$conn->prepare( "SELECT orga.id, orga.name, orga.name_en, orga.email, orga.website, orga.description, orga.description_en 
		FROM la_eb_categories orga
		left outer join  la_eb_events e on e.main_category_id = orga.id
		WHERE e.published = 1 AND (substring_index(e.event_date,' ',1) > CURDATE() - INTERVAL 12 MONTH)" );
		$res  = $stmt->execute();
		$res  = $stmt->fetchAll( PDO::FETCH_ASSOC );
		return $res;
	}
	public function get( $id, $needle ) {
			$stmt = database::$conn->prepare( "SELECT id, name, name_en, email, website, description, description_en 
            FROM joomla_la.la_eb_categories 
            WHERE published = 1 AND id = $id" );
			$res  = $stmt->execute( [ $id ] );
			$res  = $stmt->fetch( PDO::FETCH_ASSOC );
		return $res;
	}
}
