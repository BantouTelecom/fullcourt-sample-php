<?php
	require_once 'fullcourt-php/fullcourt.php';
	$attribute = array('language' => "ja",'voice' => "man");
	$text = "これはフルコートのPHPスクリプトのテストです";

	$response = new Response();

	// Add Speak Element
	$response->addSpeak($text,$attribute);

	echo($response->toXML());

	// Output:
	// <Response>
	// <Speak language="ja" voice="man">これはフルコートのPHPスクリプトのテストです</Speak>
	// </Response>
	// 
?>
