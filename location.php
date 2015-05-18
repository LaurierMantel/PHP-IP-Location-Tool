<?php
//function to call which returns the organization, location and postal code of client IP address.  
//Scrapes addgadgets.com

function lookupIP($ip)
{
	
	echo "<br> IP is : ".$ip."<br>";
	
	$grab = "http://addgadgets.com/ipaddress/index.php?ipaddr=".$ip;
	
	//echo $grab."<br>";
	$contents = file_get_contents($grab);
	
	
	
	preg_match("/<tr><td style='text-align:right'>Country:&nbsp;<\/td><td>(.*?)</s",$contents,$matches);
	$country = $matches[1];
	
	preg_match("/<tr><td style='text-align:right'>Region:&nbsp;<\/td><td>(.*?)</s",$contents,$matches);
	$region = $matches[1];
	
	preg_match("/<tr><td style='text-align:right'>City:&nbsp;<\/td><td>(.*?)</s",$contents,$matches);
	$city = $matches[1];
	
	preg_match("/<tr><td style='text-align:right'>Postal Code:&nbsp;<\/td><td>(.*?)</s",$contents,$matches);
	$postal = $matches[1];
	
	preg_match("/<tr><td style='text-align:right'>Organization name:&nbsp;<\/td><td>(.*?)</s",$contents,$matches);
	$organization = $matches[1];
	
	
	
	return $organization.", ".$city.", ".$region.", ".$country.", ".$postal;
	
	
}



?>