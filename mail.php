<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$subject= $_POST['subject'];
$message= $_POST['message'];
$to = "eurogulfitech@gmail.com";
$subject = "Mail From EuroGulf";
$txt ="Name = ". $name . "\r\n  Email = " . $email ."\r\n Subject = ". $subject . "\r\n Message =" . $message;
$headers = "From: eurogulfitech@gmail.com" . "\r\n" .
"CC: eurogulfindia@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
    header("Location:index.html");
}
//redirect

?>