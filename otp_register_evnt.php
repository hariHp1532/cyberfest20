<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberFest20 | CIT | Register | OTP</title>
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
	<div class='login'>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet' type='text/css'>
		
		<form action="otp_bck_end.php" method="POST">			 		
			 <h1 class="brand" style="font-family:sans-serif;color:var(--brand-color-1);">Cyberfest'20&nbsp;Register&nbsp;</h1>	
			<input name='email' placeholder='Enter your Email-ID' type='text' required="" onfocus="this.value=''">
            <select name="event" class="onee" required="">
                <option>Select your Event</option>
                <option value="bombshell">Bombshell</option>
                <option value="arcane">Arcane</option>
                <option value="Code_Reformprilm">Code Reform </option>
                <option value="clincher">Clincher</option>
                <option value="El_Dorado">El Dorado</option>
                <option value="Web_crawler">Web Crawler</option>
            </select>

<div class="demo">
  <p><button data-tooltip="Only three events are allowed to be registered rather than Bomb Shell.">?</button></p>
			</div><br/>
			<input name='otp' placeholder='Enter your OTP here' type='text' required="" onfocus="this.value=''"><br/><br/>
			<button name='submit' class='submit' value='SUBMIT'><em style="color:var(--brand-color-1);font-family:sans-serif;font-size:1.1vw;">submit</em></button><br/><br/>
			
		<div class="demo">
  <p><button data-tooltip="Use your OTP received by mail to register.">?</button></p>
			</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a class="brand" style="color:#7FFF00;font-family:sans-serif;font-size:1vw;" href='sigin.php' style="text-align: center;">Already have an account?</a><br/>
        </form>
	</div>
	
    <script src="index.js"></script>
</body>
</html>