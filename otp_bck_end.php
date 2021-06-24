
<?php


include('connection.php');

if(isset($_POST['submit']))
{	
	
	$email = $_POST['email'];
	$event = $_POST['event'];
	$otp   = $_POST['otp'];
	

	$otpdql = "SELECT otp FROM students WHERE email = '$email' and otp='$otp'";
	$code="";
	$ot = mysqli_query($conn,$otpdql);
	foreach ($ot as $ot) 
	{
		$code=$ot['otp'];
	}
	//echo $code,$otp;
	if ($code==$otp) 
	{
		//echo $code,$otp;
		//echo '<script>alert("OTP crt")</script>'; 
		$idsql = "SELECT id FROM students where email='$email'";
		$id="";

		$idf = mysqli_query($conn,$idsql);
		foreach ($idf as $idf) {
			$id=$idf['id'];
		}
         $dg = 1100+$id;
         $rf_id = "CF2K20".$dg;
		//echo $id;

		$evsql = "SELECT event_name from stud_events where students_id='$id'";
		$res = mysqli_query($conn,$evsql);

		$evname="";
		$evf = mysqli_query($conn,$evsql);
		foreach ($evf as $evf) {
			$evname=$evf['event_name'];
		}
		//echo $evname;
		if($evname==$event)
		{
			echo '<script>alert("Sorry You alredy registered this event!!!")</script>'; 
			//header("Location:register.php");
		}
		else
		{
			$evntsql = "SELECT * FROM stud_events where students_id='$id'";
			$evnt_rows= mysqli_query($conn,$evntsql);
			$row = mysqli_num_rows($evnt_rows);
			//echo $row;
		//	header("Location:register.php");
			if($row>3)
			{
				echo '<script>alert("Sorry!! partcipants are allowed maxmum of 3 events"); window.location.href = "otp_register_evnt.php"</script>'; 
				//header("Location:register.php");
			}
			else
			{
				//echo $row;
				// if($row==0)
				// {
				// 	$st=1;
				// 	$acsql = "UPDATE students set status='$st' where id='$id'";
				// 	mysqli_query($conn,$acsql);
				// }
				$evinssql = "INSERT into stud_events(students_id,event_name,status,reference) values ('$id','$event',1,'$rf_id')";
				if(mysqli_query($conn,$evinssql))
				{
						//start
							require 'phpmailer/PHPMailerAutoload.php';

							$sender = 'admin@cyberfest20.in';
							$senderName = 'Cyberfest20';

							$recipient = $email;

							// Replace smtp_username with your Amazon SES SMTP user name.
							$usernameSmtp = 'AKIA6CKP6JDRI44LDMOB';

							// Replace smtp_password with your Amazon SES SMTP password.
							$passwordSmtp = 'BKyotQT747wX9y0eEIYee5lgQP8KCFa12mlrcHuA+ag/';

							// If you're using Amazon SES in a region other than US West (Oregon),
							// replace email-smtp.us-west-2.amazonaws.com with the Amazon SES SMTP
							// endpoint in the appropriate region.
							$host = 'email-smtp.ap-south-1.amazonaws.com';
							$port = 587;
							//$port = 25;
							//$port = 465;
							//$port = 587;
							// The subject line of the email
							$subject = 'Confirmation Message';

							// The plain-text body of the email
							$bodyText =  "welcome";
							$bodyHtml ='<hr><br/>Thanks for registering '.$event.'<br>Registeration is successful.<br><br><br>Your ID Is '.$rf_id.'<br><br><br>
							Looking forward to see you soon<br><br><br>
							For further updates follow our social media pages and keep an eye on our site<br><br><br>
							<br><br>Best regards<br>Cyberfest20( Team )';


							// The HTML-formatted body of the email

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

							    $mail->Send();

							    //echo "Email sent!" , PHP_EOL;
							} catch (phpmailerException $e) {
							    echo "An error occurred. {$e->errorMessage()}", PHP_EOL; //Catch errors from PHPMailer.
							} catch (Exception $e) {
							    echo "Email not sent. {$mail->ErrorInfo}", PHP_EOL; //Catch errors from Amazon SES.
							}

							
						//end
					if($event=="arcane")
					{
						//echo '<script>alert("quzzzzzz");</script>'; 
						$det = mysqli_query($conn,"SELECT * from students where id = '$id'");
						foreach($det as $det)
						{
							$nam = $det['name'];
							$branch = $det['branch'];
							$usname = $det['email'];
							$phno = $det['phonenumber'];
							$pw = $det['password'];
							$paswd = md5($pw);
						}
						
						$dbname = "cyberfes_quiz";
						$con = mysqli_connect($servername, $username, $password, $dbname);
						if (!$con) {
							die("Connection failed: " . mysqli_connect_error());
						}
$gen = "GENDER"; $rl=0;
mysqli_query($con,"INSERT into user(name,rollno,branch,gender,username,phno,password) VALUES ('$nam','$rl','$branch','$gen','$usname','$phno','$paswd')");
					}
					


					echo '<script>alert("Succesfully Registered"); window.location.href = "sigin.php"</script>'; 
					//header("Location:sigin.php");

				}
			}
		}
	}
	else
	{
		echo '<script>alert("OTP ! crt ~~ please check it"); window.location.href = "otp_register_evnt.php"</script>'; 
		//header("Location:otp_register_evnt.php");
	}




}

?>