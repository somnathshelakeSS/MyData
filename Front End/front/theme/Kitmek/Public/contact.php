<?php
$name = $_POST['name']; // Name of Sender
$email = $_POST['email']; // Email address of sender
// $phone = $_POST['phone']; // Phone Number of sender
$message = $_POST['message']; // Message He sent.
$subject = $_POST['subject']; // Subject Of Email

//////----------------> CONFIG  
########### Change Here ###########

$to = 'maheshsharma184@gmail.com'; // Use your email, where the mails should arrive

$from = 'noreply@kitmek.com'; // from mail, as maximum server do not allow to send PHP email from an address which domain is not configured on the same server, Please user local domain email, eg: something@domain.com

$subject = $subject. 'from Website'; //You can Edit subject line to Track your email (from Website)

########### Change Here ###########
//////----------------> CONFIG  

	// if($name && $email && $phone && $subject && $message){
	if($name && $email && $subject && $message){ 
			// $headers = "From:  $from \r\n";
			// $headers .= "Reply-To:  $name<$email> \r\n";
			// $headers .= "MIME-Version: 1.0\r\n";
			// $headers .= "Content-Type: text/html; charset=utf-8\r\n";

			$headers  = "From: noreply@kitmek.com" . "\r\n"; 

			$res = mail("mahesh.sharma@kitmek.com", $subject, $message, $headers);
			if($res){
			echo 'Your Message has been sent successfully!'; // Sent Successfully
		}else{
			echo 'Something went wrong, Please Try Again.'; // Server was unable to send the email
		}
	}else{
		echo 'All Fields are Required.'; // Error Message in case JS unable to resolve and send to PHP to handle.
	}