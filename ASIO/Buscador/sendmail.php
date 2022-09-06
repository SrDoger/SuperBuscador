<?php
// the message
$msg = "Pito corto";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
ini_set("SMTP","allanjomntero@gmail.com");
ini_set("smtp_port","25");

ini_set("allanjomntero@gmail.com ","guzzotobias@gmail.com");

mail("allanjomntero@gmail.com","guzzotobias@gmail.com",$msg);


?>