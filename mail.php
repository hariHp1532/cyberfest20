 		

<?php	

			require 'phpmailer/PHPMailerAutoload.php';
			$mail = new PHPMailer();
		  	$mail->isSMTP();
		  	$mail->SMTPAuth=true;
		  	$mail->SMTPSecure='ssl';
		   	$mail->Host ='smtp.cyberfest20.in';
		   	$mail->Port='465';
		   	$mail->isHTML();
		    	$mail->Username='cyberfestcit@gmail.com';
		    	$mail->Password='Suganya0';
		   	$mail->SetFrom('no-reply@PRIME.org');
		   	$mail->Subject='Cyberfest20 Registration';

		  

		   	$msg1="Your OTP  ";
		   	$mail->Body=$msg1;
		  

		 	 $mail->AddAddress('arunkumarac97@gmail.com');
			//try{
		   		if($mail->Send()){
					echo 'Mail Send';  
				}else{
					echo 'Mailer error: ' . $mail->ErrorInfo; 
				}
			//}(catch e){
			//}
echo 'hai hello welcome child';


?>