
<?php
 include('connection.php');




if(isset($_POST['submit']))

{	
	
	$college = $_POST['college'];

	$name     = $_POST['name'];
	$email   = $_POST['email'];
	$phonenumber  = $_POST['phonenumber'];
	$branch   = $_POST['branch'];
	$password = $_POST['password'];
	$mailex = "SELECT email from students where email='$email'";
	$xmail = mysqli_query($conn,$mailex);
	$row = mysqli_num_rows($xmail);

	$nox = "SELECT phonenumber from students where phonenumber='$phonenumber'";
	$xno = mysqli_query($conn,$nox);
	$row2 = mysqli_num_rows($xno);

	if($row==1 || $row2==1)
	{
		echo '<script>alert("Number || Mail-Id exist"); window.location.href = "register.php"</script>'; 
		// window.location.href = "<?php base_url()"
		//header("Location:register.php");
	}
	else
	{
		$otp_no = rand(1000,9999);

		$sql= "INSERT INTO students(college,name,email,phonenumber,branch,password,otp) VALUES  ('$college', '$name','$email','$phonenumber' ,'$branch', '$password' ,'$otp_no')";
		if (1)//
		{
			require 'phpmailer/PHPMailerAutoload.php';

			$sender = 'admin@cyberfest20.in';
			$senderName = 'Cyberfest20';

			$recipient = $email;

			$usernameSmtp = 'AKIA6CKP6JDRI44LDMOB';

			// Replace smtp_password with your Amazon SES SMTP password.
			$passwordSmtp = 'BKyotQT747wX9y0eEIYee5lgQP8KCFa12mlrcHuA+ag/';

					$host = 'email-smtp.ap-south-1.amazonaws.com';
			$port = 587;
			//$port = 25;
			//$port = 465;
			//$port = 587;
		
			$subject = 'Cyberfest20 Registeration';

		
			$bodyText =  '<p>welcome</p>';
			$bodyHtml ='<hr><h1>Welcome to Cyberfest20</h1><hr>Here is your conformation OTP '.$otp_no.'<br>Registeration is successful.<br><br><br>Your ID Is <br><br><br>
							Looking forward to see you soon<br><br><br>
							For further updates follow our social media pages and keep an eye on our site<br><br><br>
							<br><br>Best regards<br>Cyberfest20( Team )';


			//$bodyHtml ='<h1>Welcome to Cyberfest20</h1><hr>Here is your conformation OTP '.$otp_no.'
			

			//$bodyHtml ='<h1>Welcome to Cyberfest20</h1><hr>Here is your conformation OTP '.$otp_no.'
				//<br><br><br><br><br>Best regards<br>Cyberfest20-Team';

				

			$mail = new PHPMailer(true);

			try {
			    // Specify the SMTP settings.
			    $mail->isSMTP();
			    $mail->setFrom($sender, $senderName);
			    $mail->Username   = $usernameSmtp;
			    $mail->Password   = $passwordSmtp;
			    $mail->Host       = $host;
			    $mail->Port       = $port;
			    $mail->SMTPAuth   = true;
			    $mail->SMTPSecure = 'tls';
			    $mail->addCustomHeader('X-SES-CONFIGURATION-SET', $configurationSet);

			    $mail->addAddress($recipient);
			       $mail->isHTML(true);
			    $mail->Subject    = $subject;
			    $mail->Body       = $bodyHtml;
			    $mail->AltBody    = $bodyText;

			    if($mail->Send())
			    {
			    	mysqli_query($conn,$sql);
				    	
					echo '<script>alert("Register Successfully OTP Sent to your Mail-Id "); window.location.href = "otp_register_evnt.php"</script>'; 
			    }
			    else
				{
					//echo 'Mailer error: ' . $mail->ErrorInfo;
					echo '<script>alert("otp unsuccessfully");window location.href="register.php"</script>'; 
				}

			    //echo "Email sent!" , PHP_EOL;
			} catch (phpmailerException $e) {
			    echo "An error occurred. {$e->errorMessage()}", PHP_EOL; //Catch errors from PHPMailer.
			} catch (Exception $e) {
			    echo "Email not sent. {$mail->ErrorInfo}", PHP_EOL; //Catch errors from Amazon SES.
			}

		}
}

}   
  
?>




