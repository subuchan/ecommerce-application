<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://api-mock.dhl.com/mydhlapi/rates?accountNumber=SOME_STRING_VALUE&originCountryCode=SOME_STRING_VALUE&originCityName=SOME_STRING_VALUE&destinationCountryCode=SOME_STRING_VALUE&destinationCityName=SOME_STRING_VALUE&weight=SOME_NUMBER_VALUE&length=SOME_NUMBER_VALUE&width=SOME_NUMBER_VALUE&height=SOME_NUMBER_VALUE&plannedShippingDate=SOME_STRING_VALUE&isCustomsDeclarable=SOME_BOOLEAN_VALUE&unitOfMeasurement=SOME_STRING_VALUE",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"Authorization: Basic REPLACE_BASIC_AUTH",
		"Message-Reference: SOME_STRING_VALUE",
		"Message-Reference-Date: SOME_STRING_VALUE",
		"Plugin-Name: SOME_STRING_VALUE",
		"Plugin-Version: SOME_STRING_VALUE",
		"Shipping-System-Platform-Name: SOME_STRING_VALUE",
		"Shipping-System-Platform-Version: SOME_STRING_VALUE",
		"Webstore-Platform-Name: SOME_STRING_VALUE",
		"Webstore-Platform-Version: SOME_STRING_VALUE"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}

?>