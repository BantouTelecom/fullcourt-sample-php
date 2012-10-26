<?php
	require_once 'fullcourt-php/fullcourt.php';
	// Setting attribute
	$getdigits_attribute = array('action' => "http://telephonysurvey.com/quesition.php",'method' => "GET",'timeout' => "30",'numDigits' => "1",'playBeep' => "true");

	$speak_attribute = array('language' => "ja","voice" => "man");
	$text1 = "お電話ありがとうございます。";
	$text2 = "これから電話でのアンケートを行います。お時間１分ほどかかりますが、よろしくお願いします";
	$text3 = "ご本人の性別をお答えください、男性であれば、１を、女性であれば、２を押してください";

	$response = new Response();
	// Add GetDigits Element / this element is parent element of Speak 
	$element = $response->addGetDigits($getdigits_attribute);

	// Add Speak Element
	$element->addSpeak($text1,$speak_attribute);
	$element->addSpeak($text2,$speak_attribute);	
	$element->addSpeak($text3,$speak_attribute);
	
	// Response to XML
	echo($response->toXML());

	// Output:
	// <Response>
	//		<GetDigits action="http://dev.fullcourt.co/telephonysurvey/second_q.php" method="GET" timeout="30" numDigits="1" playBeep="true">
	//				<Speak language="ja" voice="man">お電話ありがとうございます。</Speak>
	// 				<Speak language="ja" voice="man">これから電話でのアンケートを行います。お時間１分ほどかかりますが、よろしくお願いします</Speak>
	// 				<Speak language="ja" voice="man">ご本人の性別をお答えください、男性であれば、１を、女性であれば、２を押してください</Speak>
	//		</GetDigits>
	// </Response> 
?>
