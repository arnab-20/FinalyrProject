<?php
$recipientEmail = "Enter Recipient Email Here!";
$emailSubject = "PHP Mailing Function";
$emailContext = "Sending content using PHP mail function";

$emailHeaders = "Cc: Replace email address" . "\r\n";
$emailHeaders .= "Bcc: Replace email address" . "\r\n";

$fromAddress = "-fpostmaster@localhost";
$emailStatus = mail($recipientEmail, $emailSubject, $emailContext, $emailHeaders, $fromAddress);
if($emailStatus) {
echo "EMail Sent Successfully!";
} else {
echo "No Email is sent";
}
?>				
							