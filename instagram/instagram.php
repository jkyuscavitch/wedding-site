<?php
header('Content-type: application/json');

$user_id = '174195549';
$access_token = '174195549.e3840d2.1cf8c1d2e6d54188b440d94339c9b0d1';
$hashtag = 'jandjsayido';

$api_url = 'https://api.instagram.com/v1/tags/' . $hashtag . '/media/recent?access_token=' . $access_token;

function fetchData($url){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_TIMEOUT, 20);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	$result = curl_exec($ch);
	curl_close($ch);
	return $result;
}

$result = fetchData($api_url);
$result = json_encode($result);

echo $result;

?>