<?php
//get data from form  
$name = $_POST['name'];
$phone= $_POST['phone'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "operations@squirr.in";
$subject = "Test";
$txt ="Name = ". $name . "\r\n  Phone = " . $phone . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@squirr.in";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>