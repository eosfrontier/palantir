<?php

class page {

	public function get_all() {
		$stmt = database::$conn->prepare( "SELECT id, title, alias, introtext as body, metadata, language FROM joomla_la.la_content where state = 1;" );
		$res  = $stmt->execute();
		$res  = $stmt->fetchAll( PDO::FETCH_ASSOC );
		return $res;
	}

	public function get( $id, $needle ) {
			$stmt = database::$conn->prepare( "SELECT id, title, alias, introtext as body, metadata, language FROM joomla_la.la_content where state = 1 AND id = $id" );
			$res  = $stmt->execute( [ $id ] );
			$res  = $stmt->fetch( PDO::FETCH_ASSOC );
		return $res;
	}
}
