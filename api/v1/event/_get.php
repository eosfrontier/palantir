<?php
if (isset($input['all_data']) ) {
    if (isset($input['language']) && $input['language'] === 'NL') {
        $all_data = $c_fetch->get_all('nl-NL');
    }
    else {
        $all_data = $c_fetch->get_all('en-GB');
    }
    if (empty($all_data) ) {
        http_response_code(404);
        echo json_encode('None found.');
        die();
    }
    http_response_code(200);
    echo $all_data;
    die();
}


// CHECK BY event ID

if (isset($input['event_id']) || isset($input['id']) ) {
    $eventid      = isset($input['event_id']) ? $input['event_id'] : ( isset($input['id']) ? $input['id'] : '' );
    if (isset($input['language']) && $input['language'] === 'NL') {
        $a_event = $c_fetch->get($eventid, 'id', 'nl-NL');
    } else {
        $a_event = $c_fetch->get($eventid, 'id', 'en-GB');
    }
    if (empty($a_event) ) {
        http_response_code(404);
        echo json_encode('None found.');
        die();
    }

    http_response_code(200);
    echo $a_event;
    die();
}


// Haven't answered a way to access.
http_response_code(400);
echo json_encode("You haven't included an 'event_id'.");
