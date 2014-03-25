<?php
	echo "<link rel='stylesheet' type='text/css' href='css/heart.css' >";

	$msg = "Thank you for your info!" . 
	"\nYour South Pick is: " . $_POST['south'] . 
	"\nYour West Pick is: " . $_POST['west'] . 
	"\nYour East Pick is: " . $_POST['east'] . 
	"\nYour Midwest Pick is: " . $_POST['midwest'];


	$to = $_POST['email1'];
	$headers = "From: ". $_POST["fName"] ."<".$_POST["email1"]. ">\r\n";	
	mail($to, 'March Madness Bracket Information!', $msg, $headers);
	echo "<p class ='sent'>We Love March Madness, thank you for the email!</p><br>";
	echo "<div id='background'></div>
			<div id='chest'>
			<div class='heart left side top'></div>
			<div class='heart center'>&hearts;</div>
			<div class='heart right side'></div>
			</div>";
?>