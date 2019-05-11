<?php
$toEmail = "info@doxlesecurity.com";
$mailHeaders = "From: " . $_POST["your_name"] . "<". $_POST["your_email"] .">\r\n";
$msg=$POST["comments"];
if(mail($toEmail, $_POST["your_phone"],$_POST["comments"], $mailHeaders)) {
echo"Contact Mail Sent";
} else {
echo"Problem in Sending Mail.</";
}
?>