<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "joshlonghurst29@gmail.com";
$subject = "Fife College Foundation Enquriy";
$body = "This is an automated message which has been received from the Fife College Foundation contact form. \n\n Details \n Name: $name \n Email: $email \n $message";

mail ($to,$subject,$body);

echo "Message sent! Return to the <a href='index.php'>homepage.</a>";

 ?>
