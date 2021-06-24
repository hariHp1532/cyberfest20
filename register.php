<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberFest20 | CIT | Register</title>
    <link rel="shortcut icon" type="image/png" href="images/logo1.png"/>
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js"></script>

    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>


<style>

a:hover {
  text-decoration: none;
}

header,
.demo,
.demo p {
  margin: -1em 0;
  text-align: left;
}

/**
 * Tooltip Styles
 */

/* Add this attribute to the element that needs a tooltip */
[data-tooltip] {
  position: relative;
  z-index: 1;
  cursor: pointer;
}

/* Hide the tooltip content by default */
[data-tooltip]:before,
[data-tooltip]:after {
  visibility: hidden;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
  filter: progid: DXImageTransform.Microsoft.Alpha(Opacity=0);
  opacity: 0;
  pointer-events: none;
}

/* Position tooltip above the element */
[data-tooltip]:before {
  position: absolute;
  bottom: 0%;
  right: 150%;
  margin-bottom: 5px;
  margin-left: -80px;
  padding: 1px;
  width: 160px;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  background-color: #000;
  background-color: hsla(0, 0%, 20%, 0.9);
  color: #fff;
  content: attr(data-tooltip);
  text-align: center;
  font-size: 14px;
  line-height: 1.2;
}

/* Triangle hack to make tooltip look like a speech bubble */
[data-tooltip]:after {
  position: absolute;
 top: 0%;
  right: 150%;
  margin-left: 1px;
  width: 0;
  border-top: 5px solid #000;
  border-top: 5px solid hsla(0, 0%, 20%, 0.9);
  border-right: 5px solid transparent;
  border-left: 1px solid transparent;
  content: " ";
  font-size: 0;
  line-height: 0;
}

/* Show tooltip content on hover */
[data-tooltip]:hover:before,
[data-tooltip]:hover:after {
  visibility: visible;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
  filter: progid: DXImageTransform.Microsoft.Alpha(Opacity=100);
  opacity: 1;
}
.submit {
  width: 358px;
  height: 40px;
  border-radius: 3px;
  font-size: 12px;
  background: #292e36;  
  color:#00bfff;
  border:2px solid var(--profile-link-color-1);
  padding:6px 10px;
  border-radius:0 10px 0 10px;
  transition:ease-out 0.5s all;
}
.submit:hover {
  background: #292e36;
  color:var(--brand-color-1);
  animation-name: shake;
}

</style>



    <!-- The Starting Info Over Here -->
    <div class="login">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet' type='text/css'>
			<form action="reg_insert.php" method="POST">	
				
			 <h1 class="brand" style="font-family:sans-serif;color:var(--brand-color-1);">Cyberfest'20&nbsp;Register&nbsp;</h1>	
			<input id='pw' name='college' placeholder='Enter College Name' type='text' required="" onfocus="this.value=''">
			<input name='name' placeholder='Enter Your Name' type='text' required="" onfocus="this.value=''">			
			<input name='email' placeholder='Enter Your E-Mail ID' type='email' required="" onfocus="this.value=''">
			<input name='phonenumber' placeholder='Enter Your Phone Number' type='text' minlength="8" maxlength="10" required="" onfocus="this.value=''">
			<select name="branch" class="onee" required="">
		           <option>Select Branch Name</option>
               		   <option value="Msc">Msc</option>
			<option value="MCA">MCA</option>
			<option value="Mtech-IT">Mtech-IT</option>
            		   <option value="BTech">BTech-IT</option>
             		   <option value="BE-CSE">BE-CSE</option>
           		   <option value="BSC-IT">BSC-IT</option>
          		   <option value="BCA">BCA</option>			
          		   <option value="Bcom-CS">Bcom-CS</option>		
          		   <option value="Others">Other Computer Departments</option>

         		</select>
<div class="demo"><br/>
  <p><button data-tooltip="Only final and pre final years are allowed from UG">?</button></p>
			</div><br/>

			<input name='password' placeholder='Password' type='password' minlength="8" maxlength="10" required="" onfocus="this.value=''"><br/><br/>
			<button name='submit' class='submit' value='submit'><em style="color:var(--brand-color-1);font-family:sans-serif;">submit</em></button><br/><br/>				
				<div class="demo">
  <p><button data-tooltip="A mail-id can be used only once , So register a valid and existing mail id.Incase, what if I forgot the mail id? contact us through
 the mail id provided at Contact Us section in home page.">?</button></p>
			</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a class="brand" style="color:#7FFF00;font-family:sans-serif;font-size:1.1vw;" href='sigin.php'>have an account?</a>&nbsp;&nbsp;&nbsp;			
			<a class="brand" style="color:var(--outer-circle-color-2);font-family:sans-serif;font-size:1vw;" href='otp_register_evnt.php'>Recieved OTP?</a>
			
				
			</form>
	</div>
	

	</script>
	
    <script src="index.js"></script>
</body>
</html>