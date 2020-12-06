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

	public function get( $id, $needle ) {
			$stmt = database::$conn->prepare( "SELECT id, name, name_en, email, website, description, description_en 
            FROM joomla_la.la_eb_categories 
            WHERE published = 1 AND id = $id" );
			$res  = $stmt->execute( [ $id ] );
			$res  = $stmt->fetch( PDO::FETCH_ASSOC );
		return $res;
	}
}
