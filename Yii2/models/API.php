<?php

namespace app\models;

class API
{
public static $baseURL = "http://dev.rebirthuo.com";

public static function curl ($path)
{
$options = [
	CURLOPT_URL => self::$baseURL . $path,
	CURLOPT_RETURNTRANSFER => true,
	];
	$ch = curl_init();
	curl_setopt_array($ch, $options);
	$rawResponse = curl_exec ($ch);
	$response = json_decode($rawResponse, true);
	
	return $response;
	}
}
?>