<?php
    ini_set("include_path", '/home5/anguleri/php:' . ini_get("include_path")  );

    include('Mail.php');
    include('Mail/mime.php');
    
	
	function sendEmail($mailhost, $mailusername, $mailpassword, $mailport, $recipient, $subject, $body, $filename)
	{
		echo "reached mail function" . "\n";
		$message = new Mail_mime();
		$text = $body;
		echo "creating mail object" . "\n";
		$message->setTXTBody($text);
		//$message->setHTMLBody($html);
		if($filename != null)
			$message->addAttachment($filename);
		$messagebody = $message->get();
		echo "further along" . "\n";
		$extraheaders = array("From"=>$mailusername, "Subject"=>$subject);
		$headers = $message->headers($extraheaders);
		echo "attached headers to message" . "\n";
		$mail = Mail::factory("mail");
		echo "factory\n";
		print_r($mail);
		$mail->send($recipient, $headers, $messagebody);
		echo "sent message";
	}
?>