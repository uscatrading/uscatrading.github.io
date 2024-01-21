<?php ob_start();

use assets\PHPMailer\PHPMailer;
use assets\PHPMailer\SMTP;


if($_REQUEST['contact']<>"")
			{
				//echo "HI";
				$name = $_POST['name'];
				$mob = $_POST['phone'];
				$mail = $_POST['email'];
				$whatsay = $_POST['message'];
				

				
				$bodytext = "Name: ".$name."\n Mobile No.: ".$mob."\n Email: ".$mail."\n Message: ".$whatsay." \n MAIL SENT FROM the White Space WEBSITE";
				
				
				$email = new PHPMailer();
				$email->isSMTP();
				$email->Host = 'sandbox.smtp.mailtrap.io'; // SMTP server
				$email->SMTPAuth = true;
				$email->Username = '0173bb48e63fb5'; // SMTP username
				$email->Password = '79e6fbca8c10fc'; // SMTP password
				$email->SMTPSecure = 'tls'; // Enable TLS encryption, 'ssl' also accepted
				$email->Port = 25; // TCP port to connect to


				// Content
				$email->isHTML(false); // Set to true for HTML emails
				$email->Subject = 'Contact Form - USCA';
				$email->Body = $bodytext;

				
				if ($email->Send()) {
					header('location:index.html?m=s');
				} else {
					echo 'Message could not be sent.';
					echo 'Mailer Error: ' . $email->ErrorInfo;
				}
				
			}
			
?>
