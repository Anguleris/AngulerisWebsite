<?php
	$serverRoot = $_SERVER['DOCUMENT_ROOT'];
	$path = $serverRoot . "/files/uploadedresumes/";

	$mailto = "webdev@anguleris.com";
	$mailFromName = "Webdev at Anguleris";
	$emailBody = "";
	$isAsync = false;
	$response = "";
	
	if(isset($_POST["firstName"]) && isset($_POST["lastName"]))
	{
		$emailBody .= $_POST["firstName"] . " " . $_POST["lastName"] . "\n";
	}
	if(isset($_POST["desiredPosition"]))
	{
		$emailBody .= "Desired position: " . $_POST["desiredPosition"] . "\n";
	}
	if(isset($_POST["phone1"]) && isset($_POST["phone2"]) && isset($_POST["phone3"]))
	{
		$emailBody .= "Phone number: " . $_POST["phone1"] . "-" . $_POST["phone2"] . "-" . $_POST["phone3"] . "\n";
	}
	if(isset($_POST["email"]))
		$emailBody .= "Email: " . $_POST["email"] . "\n";
	if(isset($_POST["address1"]))
		$emailBody .= "Street Address: " . $_POST["address1"] . "\n";
	if(isset($_POST["address2"]))
		$emailBody .= "Street Address Line 2: " . $_POST["address2"] . "\n";
	if(isset($_POST["city"]))
		$emailBody .= "City: " . $_POST["city"] . "\n";
	if(isset($_POST["country"]))
	{
		$emailBody .="Country: " .$_POST["country"] . "\n";
		if($_POST["country"] == "US")
		{
			if(isset($_POST["state"]))
				$emailBody .= "State: " . $_POST["state"] . "\n";
		}
	}
	if(isset($_POST["zip"]))
		$emailBody .= "ZIP code: " . $_POST["zip"] . "\n\n";
	if(isset($_POST["additionalNotes"]))
		$emailBody .= "Message: " . $_POST["additionalNotes"] . "\n";
	
	if(isset($_POST["cjoIsAsync"]))
		$isAsync = $_POST["cjoIsAsync"];
	
	//$filename = $_FILES['resumeFile']["name"];
	//move_uploaded_file($_FILES["resumeFile"]["tmp_name"], $filename);
	$filename;
	$filesize;
	foreach($_FILES as $file)
	{
		$filename = $file['name'];
		$fileInfo = pathinfo($filename);
		$filename = uniqid() . "." . $fileInfo["extension"];
		$filesize = $file['size'];
		move_uploaded_file($file['tmp_name'], $path . $filename);
	}

	if(!$isAsync || $isAsync == "false")
	{
		printSyncHeader();
	}
	
	if($filesize < 2000000 && isset($filesize) && $filesize != 0)
	{
		$sent = mail_attachment($filename, $path, $mailto, $mailto, $mailFromName, $mailto, "Someone has sent you their resume!", $emailBody);
	}
	else $response = "File is too large. 2MB is the maximum file size allowed.";
	//header('Location: ../contact.html');
	
	if($sent)
		$response = "Thank you. Your resume has been submitted.";
	else
		$response = "Sorry, there was an error while submitting your request. Please try again.";
	
	echo $response;
	
	if(!$isAsync || $isAsync == "false")
	{
		printSyncFooter();
	}
	
	unlink($path . $filename);
	/*
	function sendEmail($mailhost, $mailUsername, $mailPassword, $mailPort, $mailServerSideRecipient, $subject, $emailBody)
	{
		$to = "webdev@anguleris.com";
		$subject = $subject;
		$message = $emailBody;
		$headers = 'From: webdev@anguleris.com' . "\r\n" . 'Reply-To: webdev@anguleris.com';
		$sent = mail($to, $subject, $message, $headers, "-fwebdev@anguleris.com");
		return $sent;
	}*/
	
	function mail_attachment($filename, $path, $mailto, $from_mail, $from_name, $replyto, $subject, $message) 
	{
	    $file = $path.$filename;
	    $file_size = filesize($file);
	    $handle = fopen($file, "r");
	    $content = fread($handle, $file_size);
	    fclose($handle);
	    $content = chunk_split(base64_encode($content));
	    $uid = md5(uniqid(time()));
	    $header = "From: ".$from_name." <".$from_mail.">\r\n";
	    $header .= "Reply-To: ".$replyto."\r\n";
	    $header .= "MIME-Version: 1.0\r\n";
	    $header .= "Content-Type: multipart/mixed; boundary=\"".$uid."\"\r\n\r\n";
	    $header .= "This is a multi-part message in MIME format.\r\n";
	    $header .= "--".$uid."\r\n";
	    $header .= "Content-type:text/plain; charset=iso-8859-1\r\n";
	    $header .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
	    $header .= $message."\r\n\r\n";
	    $header .= "--".$uid."\r\n";
	    $header .= "Content-Type: application/octet-stream; name=\"".$filename."\"\r\n"; // use different content types here
	    $header .= "Content-Transfer-Encoding: base64\r\n";
	    $header .= "Content-Disposition: attachment; filename=\"".$filename."\"\r\n\r\n";
	    $header .= $content."\r\n\r\n";
	    $header .= "--".$uid."--";
	    if (mail($mailto, $subject, "", $header)) {
	        return true;
	    } else {
	        return false;
	    }
	}
	
	function printSyncHeader()
	{
		echo<<<_END
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style>
	body{background-color: #7CCFD7; padding-top: 100px;}
	.container{background-color: #fff; color: #999; padding: 20px; text-align: center;}
	
</style>
</head>
<body>
	<div class="container">
		

_END;
	}
	
	function printSyncFooter()
	{
		echo<<<_END
		<br><a href="../contact.html" style="color: #7CCFD7;">Return to "Contact" page</a>
	</div>
</body>
</html>
_END;
	}

?>