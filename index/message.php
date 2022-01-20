<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\Employee\composer\vendor\autoload.php';
     $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

   
        
		$mail = new  PHPMailer();

						try {
							$mail->SMTPDebug = 2;									
							$mail->isSMTP();											
							$mail->Host	 = 'smtp.gmail.com;';					
							$mail->SMTPAuth = true;							
							$mail->Username = 'thandimohlahlo@gmail.com';				
							$mail->Password = 'THAndi@99';						
							$mail->SMTPSecure = 'tls';							
							$mail->Port	 = 587;
                                                                
				             $mail->addReplyTo($email, $fullname);
							$mail->setFrom('thandimohlahlo@gmail.com', 'Log Sheet Systems');	
								
							$mail->addAddress('mahlatsimohlahlo@gmail.com', 'Admin system');
							
							
							$mail->isHTML(true);								
							$mail->Subject = $subject;
							$mail->Body = '<html>
							           <head>
							             <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
										 <title></title>
							           </headd>
									   <body>
									      <div id="email-wrap" style="color:black">
										  <p>Dear Log Sheet Systems , </p>
										  
										  <p>I hope this email finds you well. </p>
										  
										  <p>'.$message.'</p>
										   
										  
										  <p>Regards, </p>
										  <p>Log Sheet Systems</p>';
							$mail->AltBody = 'Body in plain text for non-HTML mail clients';
							$mail->send();
							echo "<script>alert('Your email is sent successfully, wait for reply.')</script>";
							echo "<script>window.open('home.php','_self')</script>";
                                                                							
							
						} catch (Exception $e) {
							echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
						}
	
					
					
			

  

?>
