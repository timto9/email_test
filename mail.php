<?php

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$msg = $_POST['msg'];

$to = "thimuth.96online@gmail.com";
$subject = "Test mail";
$txt = "Name = ". $name .  "\r\nEmail = " . $email . "\r\nPhone Number = " . $number . "\r\nMessage = " . $msg;

$header = "From: noreply@yoursite.com" .  "\r\n" . 
"CC:Csomebodyelse@example.com";

if($email != NULL){
    mail($to,$subject,$txt,$header);
}


//redirect
header("Location:thankyou.html");




?>