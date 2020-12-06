<?php

class location {

	public function get_all() {
		$stmt = database::$conn->prepare( "SELECT id, name, name_en, address, la_eb_locations.lat, la_eb_locations.long
		FROM joomla_la.la_eb_locations 
		WHERE published = 1;" );
		$res  = $stmt->execute();
		$res  = $stmt->fetchAll( PDO::FETCH_ASSOC );
		return $res;
	}

	public function get( $id, $needle ) {
			$stmt = database::$conn->prepare( "SELECT id, name, name_en, address, la_eb_locations.lat, la_eb_locations.long
			FROM joomla_la.la_eb_locations 
			WHERE published = 1 AND id = $id" );
			$res  = $stmt->execute( [ $id ] );
			$res  = $stmt->fetch( PDO::FETCH_ASSOC );
		return $res;
	}
}
