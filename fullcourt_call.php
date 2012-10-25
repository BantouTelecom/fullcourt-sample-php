<?php
    require_once 'fullcourt-php/fullcourt.php';

    $auth_id = "FCXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";      // Setting your Account Sid
    $auth_token = "XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";   // Setting your Auth Token

    $p = new RestAPI($auth_id, $auth_token);

    // The From field is alphanumerical, the first character must be a letter. This field can be up to 11 characters long
    // If the phone number(To field) is a Japanese number 080-1234-5678, then "818012345678"　(Country Code + Area Code without 0 + Phone number) should be used.
    // The Body field is limited 140 characters of alphanumerical , or 70 characters of Japanese
    $params = array(
        'From' => '815058481111',
        'To'   => '818011112222',
        'AnswerUrl' => 'http://calltest.com/telephonysurvey/index.php'
    );
    // Make Call
    $response = $p->make_call($params);
    var_dump($response);   
?>
    

