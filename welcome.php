<?php
   include('session.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CyberFest20 | CIT | Welcome</title>
    <link rel="shortcut icon" type="image/jpg" href="images/logos.jpg"/>

    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="fonts/DeLarge.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Cairo|Poppins&amp;display=swap">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="http://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen" />
</head>
<body>
<header>
    <div class="box"></div>
    <div class="curve"><button class="brand" onclick="location.href = 'logout.php';"><i class="fa fa-sign-out" aria-hidden="true"></i></button>
        <div class="left">				
				<div></div>
            <div>
                <div></div>
                <div></div>
            </div>
        </div>
        <div class="center"></div>
        <div class="right"><div></div>
    </div>
</header>

	
    <!-- The Starting Info Over Here -->
    <div id="starting-info" class="judge">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet' type='text/css'>
		<div class='login'><br/><br/>
		
			<style>
.flex-container {
  display: flex;
  flex-wrap: nowrap;
}

.flex-container > div {
  width: 100px;
  margin: 1px;
  text-align: center;
  font-size: 15px;
}
</style>
			 <h2 class="brand">CyberFest'20&nbsp;<span>Welcome You&nbsp;<?php echo $_SESSION["name"]; ?></span></h2><br/><br/>
	
			 <div class="flex-container">
			 
			 <div style="margin-top: 20px;">"Bombshell" is an Open-Challenge event click logo to play Bombshell. 
			 </div><div style="margin-top: 20px;">&#128073;</div>
			 <div><a href="./bombshell/index.php">
				<img src="head/event/bombshell.png" style="height:105px !important;width:105px !important;border-radius: 50%;">
			</a></div>
			</div>

		</div>

    <script src="index.js"></script>
</body>
</html>

    <!--Here are the buttons and the panels-->
    
<footer>
  <div class="curve">
    <div class="left"><div></div></div>
    <div class="center">
        <!--Add links right here for social and email -->
        <div>
			<a href="https://www.facebook.com/CyberFest20-108535667220239/"><i class="fa fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/cyberfest20?r=nametag"><i class="fa fa-instagram"></i></a>
            <a href="https://twitter.com/Cyberfest4"><i class="fa fa-twitter"></i></a>
        </div>
    </div>
    <div class="right">
        <div></div>
        <div>
         <a href="https://www.cit.edu.in/academics/computer-applications-mca-department/">Department Of Computer Applications</a>
        </div>
    </div>
  </div>
  <div class="box"></div>
</footer>
    <script src="index.js"></script>
</body>
</html>