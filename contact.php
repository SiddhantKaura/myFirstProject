<?php
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$contact = $_REQUEST['contactno'];
$message = $_REQUEST['message'];

mail("siddhantkaura@gmail.com","web message",$message,"From: $name<$email><$contact>");
    
echo"<script type="text/javascript">alert('Your message sent succesfully')</script>";    
?>