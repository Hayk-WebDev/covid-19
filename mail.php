<?php

$email =$_POST['email'];
$name =$_POST['name'];
$message =$_POST['message'];


$subject= "=?utf-8?b?".base64_encode("message from site")."?="." $name";
$headers = "From: $email\r\nReply-to:$email\r\nContent-type:text/html;charset=utf-8\r\n";



$success = mail("696hayk@mail.ru",$subject,$message,$headers);

echo "Done";



?>