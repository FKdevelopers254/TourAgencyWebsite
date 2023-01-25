<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://miza.p.rapidapi.com/ytdl?search=nashtunic linkboo",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: miza.p.rapidapi.com",
		"X-RapidAPI-Key: 96fdf00916msh0f4c40598c1f69dp1a0b9ejsnf1088627f665"
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