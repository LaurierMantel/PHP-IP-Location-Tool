<?php

include ("location.php");


function getClientLocation()
{
	//Grabs client IP address
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}
//calls lookupIP to parse IP location website and return client IP address location (Organization, City, Region, Country, Postal/Zip code)
$clientLocation = lookupIP($ip);
return $clientLocation;
}






?>