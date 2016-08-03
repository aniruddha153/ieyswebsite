<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Us - IEYS 2013</title>
</head>

<body>
<?php
	$to= "contact@indiaemerge.com"; 
	$subject= $_REQUEST["sub"]; 
	$message= $_REQUEST["msg"]; 
	$from = $_REQUEST["fromemail"];
	$fromp = "IEYS Query".$from;

	ini_set("sendmail_from", $fromp);
	ini_set("SMTP","smtpout.asia.secureserver.net");
	
	$headers = "From:" . $from;

	$send=mail($to,$subject,$message,$headers);
	if($send)
	echo "Congrats! Your query has been sent to our team. They will revert to you shortly.<br><br>";
	else
	echo "Error in sending mail... Try Again.";
	
?>

</body>
</html>