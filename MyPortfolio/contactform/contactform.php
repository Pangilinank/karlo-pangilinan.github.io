<?php
if (isset($_POST['submit'])) {
	$to = "pangilinan.karlo040497@gmail.com";
	$from = $_POST['subject'];
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$txt = $name . "\r\n" . $_POST['message'];
	$headers = "From: " . $from .  "\r\n" ;

	mail($to,$subject,$txt,$headers);
}
?>