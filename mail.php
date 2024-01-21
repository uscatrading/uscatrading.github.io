<?php ob_start();
error_reporting(0);
require_once('assets/PHPMailer/class.phpmailer.php');


				echo "HI";
				$name = $_POST['name'];
				$mob = $_POST['phone'];
				$mail = $_POST['email'];
				$whatsay = $_POST['message'];
				
				/*
				
				$data1=$_FILES["photo"]["name"];
				$ext1 = pathinfo($data1, PATHINFO_EXTENSION);
				$doc1='photo-'.$name.'-'.$data1.'.'.$ext1;
				move_uploaded_file($_FILES["photo"]["tmp_name"],"uploads/".$doc1);
				
				$data=$_FILES["resume"]["name"];
				$ext = pathinfo($data, PATHINFO_EXTENSION);
				$doc='resume-'.$name.'-'.$data.'.'.$ext;
				move_uploaded_file($_FILES["resume"]["tmp_name"],"uploads/".$doc);
				*/
				
				
				$bodytext = "Name: ".$name."\n Mobile No.: ".$mob."\n Email: ".$mail."\n Message: ".$whatsay." \n MAIL SENT FROM the White Space WEBSITE";
				
				
				$email = new PHPMailer();
				$email->isSMTP();
				$email->Host = 'sandbox.smtp.mailtrap.io'; // SMTP server
				$email->SMTPAuth = true;
				$email->Username = '0173bb48e63fb5'; // SMTP username
				$email->Password = '79e6fbca8c10fc'; // SMTP password
				$email->SMTPSecure = 'tls'; // Enable TLS encryption, 'ssl' also accepted
				$email->Port = 25; // TCP port to connect to
				//$email = new PHPMailer();
				//$email->IsSMTP(); // Enable SMTP
				//$email->Host = 'smtp.gmail.com'; // Specify your SMTP server
				//$email->Port = 25; // Specify the SMTP port (usually 25)
				$email->From="harin.desai96@gmail.com";
				$email->FromName="Harin";
				$email->AddAddress('harin.shadow@gmail.com', $name); // Recipient's email
				$email->SMTPDebug = 2; // Enable verbose debug output

				/* 
				$file_to_attach1 = 'uploads/'.$doc1;
				$file_to_attach = 'uploads/'.$doc; 
				
				$email->AddAttachment( $file_to_attach );
				
				$email->AddAttachment( $file_to_attach1 ); */
				
				
				/* -------AKNOWLEDEMENT MAIL------- 
				
				$bodytext1 = "Dear Sir/Madam,\n\n Thank you for reaching out to Ascon Realty support desk. We have received your email, and our support team will be in touch with you soon. \n Please note that our working hours is 10:00 AM to 06:00 PM from Monday to Saturday. We regret the delay in reply over the non-working hours. \n Thank you for your understanding. \n \n Best regards, \n Support Team \n Ascon Realty";
				
				
				$email1 = new PHPMailer();
				$email1->From      = 'no-reply@asconrealty.com';
				$email1->FromName  = 'Ascon Realty';
				$email1->Subject   = 'Acknowledgement - Ascon Group Of Developers';
				$email1->Body      = $bodytext1;
				$email1->AddAddress($mail);
				
				/* -------AKNOWLEDEMENT MAIL END------- */
				
				 // Sender and recipient
				//$email->setFrom($email, $name);
				//$email->addAddress('contact@example.com'); // Recipient's email

				// Content
				//$email->isHTML(false); // Set to true for HTML emails
				//$email->Subject = 'Contact Form - USCA';
				//$email->Body = $bodytext;
try {
	 echo 'hi2';
    // Your mail sending code
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
}

				
		

			
?>
