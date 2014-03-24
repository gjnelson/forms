<?php
	echo "<link rel='stylesheet' type='text/css' href='css/heart.css' >";

	$msg = "Thank you for your info";		
	
	foreach($_POST as $name => $value) {
		$msg .="$name : $value\n";
	}
	$to = $_POST['email1'];
	$headers = "From: ". $_POST["fName"] ."<".$_POST["email1"]. ">\r\n";	
	mail($to, 'Registration', $msg,$headers);
	echo "<p class ='sent'>We Love March Madness, thank you for the email!</p><br>";
	echo "<div id='background'></div>
			<div id='chest'>
			<div class='heart left side top'></div>
			<div class='heart center'>&hearts;</div>
			<div class='heart right side'></div>
			</div>";
?>