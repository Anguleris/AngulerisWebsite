<?php
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

require_once("globals.php");
//require_once("newEmailFunction.php");




$tryName = $_REQUEST["name"];
$tryJobTitle = $_REQUEST["jobtitle"];
$tryCompany = $_REQUEST["companyname"];
$tryPhone = $_REQUEST["phonenumber"];
$tryEmail = $_REQUEST["emailaddress"];
$options = array($_REQUEST["option1"], $_REQUEST["option2"], $_REQUEST["option3"], $_REQUEST["option4"]);
$interest = $_REQUEST["interest"];
$date1 = $_REQUEST["date1"];
$date2 = $_REQUEST["date2"];
$notes = $_REQUEST["notes"];


$emailBody = "Name: " . $tryName . "\n";
$emailBody = $emailBody . "Job Title: " . $tryJobTitle .  "\n";
$emailBody = $emailBody . "Company Name: " .  $tryCompany . "\n";
$emailBody = $emailBody . "Phone Number: " . $tryPhone . "\n";
$emailBody = $emailBody . "Contact Email: " . $tryEmail . "\n\n";
$emailBody = $emailBody . "Interests: " . "\n";
for($x = 0; $x < count($options); $x++)
{
	if($options[$x] != "")
		$emailBody = $emailBody . $options[$x] . "\n";
}
$emailBody = $emailBody . "\n" . "Level of interest: " . $interest . "\n";
$emailBody = $emailBody . "\n" . "Available dates: " . "\n";
if($date1 != "") $emailBody = $emailBody . $date1 . "\n";
if($date2 != "") $emailBody = $emailBody . $date2 . "\n\n";

$emailBody = $emailBody . "Comments: " . $notes . "\n";
$emailBody = htmlspecialchars($emailBody);
$filename = null;
$sent = sendEmail($mailhost, $mailUsername, $mailPassword, $mailPort, $mailServerSideRecipient, "Someone would like a quote from Anguleris!", $emailBody);

if($sent)
	echo "MESSAGE SENT";
else echo "MESSAGE NOT SENT";






/*
function sendEmail($mailhost, $mailusername, $mailpassword, $mailport, $recipient, $subject, $body)
{
	$mail = new PHPMailer;
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = $mailhost;  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = $mailusername;                 // SMTP username
	$mail->Password = $mailpassword;                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = $mailport;                                    // TCP port to connect to

	$mail->From = $mailusername;
	$mail->FromName = 'BIMSmith Support';
	$mail->addAddress($recipient);     // Add a recipient
	$mail->addReplyTo($mailusername, 'Support');

	$mail->isHTML(false);                                  // Set email format to HTML

	$mail->Subject = $subject;
	$mail->Body    = $body;
	//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	if(!$mail->send()) {
	    echo 'MESSAGE NOT SENT';
	} else {
	    echo 'MESSAGE SENT';
	}	

}*/
function sendEmail($mailhost, $mailUsername, $mailPassword, $mailPort, $mailServerSideRecipient, $subject, $emailBody)
{
	$to = $mailServerSideRecipient;
	$subject = $subject;
	$message = $emailBody;
	$headers = 'From: ' . $mailServerSideRecipient . "\r\n" . 'Reply-To: ' . $mailServerSideRecipient;
	$sent = mail($to, $subject, $message, $headers, "-f" . $mailServerSideRecipient);
	return $sent;
}


?>