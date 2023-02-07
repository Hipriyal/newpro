<?php
// PHP Code to sent contact form to both client and owner
$email = $_POST['email']; // User email
$name = $_POST['name']; // User name
$message = $_POST['message']; // User email

$mailheader ="From:" .$name."<".$email.">\r\n";
   $recipient = "stagconnect@gmail.com";

   mail($recipient, $message, $mailheader)
   or die("Error");

   echo'
   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you page</title>
</head>
<body>
    <div class="container">
        <H1>Thank you for message me.</H1>
    </div>
</body>
</html>
   ';

?>