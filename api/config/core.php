<?php
	// показывать сообщения об ошибках 
	error_reporting(E_ALL);
	 
	// установить часовой пояс по умолчанию 
	date_default_timezone_set('Europe/Moscow');
	 
	// переменные, используемые для JWT 
	$now_seconds = time();

	$key = "your_secret_key";
	$iss = "http://any-site.org";
	$aud = "http://any-site.com";
	$iat = $now_seconds;
	$exp = $now_seconds+(60*60); // Maximum expiration time is one hour

?>