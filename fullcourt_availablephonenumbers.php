<?php
    require_once 'fullcourt-php/fullcourt.php';

    $auth_id = "FCXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";
    $auth_token = "XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";

    $p = new RestAPI($auth_id, $auth_token);

    $params = array(
        'isocountry' => 'JP'
    );
    // Get Applications
    $response = $p->search_numbers($params);
?>
    

