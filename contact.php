<?php
$to = "siddhantkaura@gmail.com";
$subject = "response from website";
$message = "Hey I want to connect you";
$headers = "From: abcdf";

if(mail($to,$subject,$message,$headers)){
    echo "Mail sent successfuly";
}
else{
    echo "cannot send";
}
?>