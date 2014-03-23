<?php
	$msg = "Thank you for your info";			//EMail message
	
	foreach($_POST as $name => $value) {
		print "$name : $value<br>";
		$msg .="$name : $value\n";
	}
	$to = $_POST['email1'];//Put in your email here
	$headers = "From: ". $_POST["fName"] ."<".$_POST["email1"]. ">\r\n";	
	mail($to, 'Registration', $msg,$headers);
	echo "Email sent";
?>