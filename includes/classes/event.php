<?php

class event
{

    public function get_all()
    {
        $replacements = parse_ini_file("https://manage.larp-agenda.nl/language/en-GB/en-GB.com_eventbooking.ini");
        $stmt = database::$conn->prepare(
            "SELECT e.id, e.title, e.title_en, orga.name as organisatie, orga.name_en as organization, orga.id as orga_id, orga.website as orga_website, e.registration_handle_url, e.event_date, e.event_end_date, loc.name as location_name, 
        loc.address as location_address, e.short_description, e.short_description_en, e.event_capacity,
        replace(json_extract(e.custom_fields,'$.slaapen'),'\"','') as sleeping_arrangements, 
        replace(json_extract(e.custom_fields,'$.genre'),'\"','') as genre1, 
        replace(json_extract(e.custom_fields,'$.genre2'),'\"','') as genre2,
        replace(json_extract(e.custom_fields,'$.genre3'),'\"','') as genre3,
        replace(json_extract(e.custom_fields,'$.min_age'),'\"','') as min_age,
        replace(json_extract(e.custom_fields,'$.max_age'),'\"','') as max_age,
        e.price_text, 
        e.registration_start_date FROM la_eb_events e
                left join la_eb_locations loc on loc.id = e.location_id
                left join la_users usr on usr.id = e.created_by
                left join la_eb_categories orga on orga.id = e.main_category_id
                WHERE e.published = 1 AND (substring_index(e.event_date,' ',1) > CURDATE())" 
        );
        $res  = $stmt->execute();
        $res  = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return str_replace(array_keys($replacements), array_values($replacements), json_encode($res));
    }

    public function get( $id, $needle )
    {
        $replacements = parse_ini_file("https://manage.larp-agenda.nl/language/en-GB/en-GB.com_eventbooking.ini");
        $stmt = database::$conn->prepare(
            "SELECT e.id, e.title, e.title_en, orga.name as organisatie, orga.name_en as organization, orga.id as orga_id, orga.website as orga_website, e.registration_handle_url, e.event_date, e.event_end_date, loc.name as location_name, 
			loc.address as location_address, e.short_description, e.short_description_en, e.event_capacity,
			replace(json_extract(e.custom_fields,'$.slaapen'),'\"','') as sleeping_arrangements, 
			replace(json_extract(e.custom_fields,'$.genre'),'\"','') as genre1, 
			replace(json_extract(e.custom_fields,'$.genre2'),'\"','') as genre2,
			replace(json_extract(e.custom_fields,'$.genre3'),'\"','') as genre3,
			replace(json_extract(e.custom_fields,'$.min_age'),'\"','') as min_age,
			replace(json_extract(e.custom_fields,'$.max_age'),'\"','') as max_age,
			e.price_text, 
			e.registration_start_date FROM la_eb_events e
					left join la_eb_locations loc on loc.id = e.location_id
					left join la_users usr on usr.id = e.created_by
					left join la_eb_categories orga on orga.id = e.main_category_id
					WHERE e.published = 1 AND e.id = $id" 
        );
        $res  = $stmt->execute([ $id ]);
        $res  = $stmt->fetch(PDO::FETCH_ASSOC);
		return str_replace(array_keys($replacements), array_values($replacements), json_encode($res));
    }
}
