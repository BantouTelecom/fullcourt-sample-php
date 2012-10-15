<?php
    require_once 'fullcourt-php/fullcourt.php';

    $auth_id = "FCXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";
    $auth_token = "XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";

    $p = new RestAPI($auth_id, $auth_token);

    // Get Applications
    $response = $p->get_applications();

    // Create Application
    $params = array(
        'FriendlyName' => 'fullcourt-php applications',
       'VoiceURL' => 'http://php-sample.fullcourt.co/applications.html',
        'VoiceMethod' => 'POST'
    );
    $response = $p->create_application($params);

    // Get Application
    $params = array(
        'app_id' => 'APXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
    );
    $response = $p->get_application($params);

    // Modify Application
    $params = array(
        'app_id' => 'APXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX',
        'FriendlyName' => 'fullcourt-php modify',
        'VoiceURL' => 'http://php-sample.fullcourt.co/modify.html',
        'VoiceMethod' => 'POST'
    );
    $response = $p->modify_application($params);

    // Delete Application
    $params = array(
        'app_id' => 'APXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
    );
    $response = $p->delete_application($params);
?>
    

