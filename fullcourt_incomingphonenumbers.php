<?php
    require_once 'fullcourt-php/fullcourt.php';

    $auth_id = "FCXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";
    $auth_token = "XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";

    $p = new RestAPI($auth_id, $auth_token);

    // Get IncomingPhoneNumbers
    $response = $p->get_numbers();

    // Buy a FullCourt Number
    $params = array(
        'PhoneNumber' => '58383129',
        'ApplicationSid' => 'APXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX',
        'FriendlyName' => 'Buy a Phone Number'
    );
    
    $response = $p->buy_number($params);
    $params = array(
        'pn_id' => 'PNXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
    );

    // Get IncomingPhoneNumber
    $response = $p->get_number($params);

    $params = array(
        'pn_id' => 'PNXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
        'ApplicationSid' => 'APXXXXXXXXXXXXXXXXXXXXXXXXXXXXXC',
        'FriendlyName' => 'Modify a Phone Number'
    );
    $response = $p->modify_application_number($params);

    $params = array(
        'pn_id' => 'PNXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
    );
    $response = $p->delete_number($params);
?>
    

