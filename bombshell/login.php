<!DOCTYPE html>
<?php //include("index.php")?>
<html>
    <head>
        <title>BombShell | Login</title>
		<meta name="viewport" content="width=device-width">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="/trystyle.css">
		<link rel="shortcut icon" href="./favicons.png" type="image/x-icon">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="icon" href="./favicons.png" type="image/x-icon">
        <style>
	.align {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;		  
  -webkit-box-pack: center;
      -ms-flex-pack: center;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
		  background-repeat: no-repeat;
		  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}

.grid {
  margin-left: auto;
  margin-right: auto;
  max-width: 24em;
  width: 90%;
}


.icon {
  display: inline-block;
  height: 1.25em;
  line-height: 1.25em;
  margin-right: 0.625em;
  text-align: center;
  vertical-align: middle;
  width: 1.25em;
}

.icon--info {
  background-color: #e5e5e5;
  border-radius: 50%;
}

*,
*::before,
*::after {
  -webkit-box-sizing: inherit;
          box-sizing: inherit;
}

html {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  height: 100%;
}

body {
  background-color: #cbcbcb;
  font-family: 'Helvetica', 'Arial', sans-serif;
  font-size: 14px;
  font-size: 0.875rem;
  font-weight: 400;
  line-height: 1.5;
  margin: 0;
  min-height: 100%;
  
}


a {
  color: inherit;
  text-decoration: none;
  -webkit-transition: color 0.3s;
  transition: color 0.3s;
}

a:hover {
  color: #1dabb8;
}


fieldset {
  border: none;
  margin: 0;
}

input {
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  border: none;
  font: inherit;
  margin: 0;
  outline: none;
  padding: 0;
}

input[type='submit'] {
  cursor: pointer;
}

.form input[type='email'],
.form input[type='password'] {
  width: 100%;
}


.login__header {
  background-color: #282830;
  border-top-left-radius: 0.25em;
  border-top-right-radius: 0.25em;
  color: #fff;
  padding: 1.5em;
  text-align: center;
  text-transform: uppercase;
}

.login__title {
  font-size: 16px;
  font-size: 1rem;
  margin: 0;
}

.login__body {
  background-color: #fff;
  padding: 1.5em;
  position: relative;
  
}

.login__body::before {
  background-color: #fff;
  content: '';
  height: 0.5em;
  left: 50%;
  margin-left: -0.25em;
  margin-top: -0.25em;
  position: absolute;
  top: 0;
  -webkit-transform: rotate(45deg);
          transform: rotate(45deg);
  width: 0.5em;
}

.login input[type='email'],
.login input[type='password'] {
  border: 0.0625em solid #e5e5e5;
  padding: 1em 1.25em;
}

.login input[type='email'] {
  border-top-left-radius: 0.25em;
  border-top-right-radius: 0.25em;
}

.login input[type='password'] {
  border-bottom-left-radius: 0.25em;
  border-bottom-right-radius: 0.25em;
  border-top: 0;
}

.login input[type='submit'] {
  background-color: #1dabb8;
  border-radius: 0.25em;
  color: #fff;
  font-weight: 700;
  -webkit-box-ordinal-group: 2;
      -ms-flex-order: 1;
          order: 1;
  padding: 0.75em 1.25em;
  -webkit-transition: background-color 0.3s;
  transition: background-color 0.3s;
}

.login input[type='submit']:focus,
.login input[type='submit']:hover {
  background-color: #198d98;
}

.login__footer {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  background-color: #fff;
  border-bottom-left-radius: 0.25em;
  border-bottom-right-radius: 0.25em;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  padding-bottom: 1.5em;
  padding-left: 1.5em;
  padding-right: 1.5em;
}

.login__footer p {
  margin: 0;
}

.flex-container {
  display: flex;
  background-color: transparent;
}

.flex-container > div {
  margin: 30px;
  padding: 10px;
  font-size: 15px;
}	
#more {display: none;}
	</style>
</head>

<body class="align" background="f32b5322dff5f3b4591c62ac015867d8.jpg">
    <div class="flex-container">
	
	  <div class="grid">
		<header class="login__header">
        <h3 class="login__title">Rules</h3>
		</header>
		<div class="login__body">
		<p>Click Here to view Rules<br/>

			<span id="dots">...</span><span id="more">
>>  The usage of mobile phones is prohibited.<br/>
>>  In given time you have to fix the puzzle.<br/>
>>  Any Students are allowed.<br/>
>>  You have to complete the puzzle on time.<br/>
>>  Do not Refresh the page or Open any New tab until the puzzle is completed or If you do so, the game will be abandoned.

			</p>
		<footer class="login__footer">
				<p><a onclick="myFunction()" id="myBtn"><span class="icon icon--info">&dArr;</span>More</a></p>
		</footer>
		
		<script>
		function myFunction() {
			var dots = document.getElementById("dots");
			var moreText = document.getElementById("more");
			var btnText = document.getElementById("myBtn");
			if (dots.style.display === "none") {
			dots.style.display = "inline";
			btnText.innerHTML = "More"; 
			moreText.style.display = "none";
			} else {
			dots.style.display = "none";
			btnText.innerHTML = "less"; 
			moreText.style.display = "inline";
			}
			}
		</script>
		</div>
	  </div> 
	  
	    <div class="grid">
			<form action="val.php" method="POST" class="form login">
			<header class="login__header">
				<h3 class="login__title">Login</h3>
			</header>
			<div class="login__body">
				<div class="form__field">
					<input type="email" name="email" placeholder="Email" required>
				</div>
				<div class="form__field">
					<input type="password" name="password" placeholder="Password" required>
				</div>
			</div>
			<footer class="login__footer">
				<input type="submit" name="submit" value="Login">
				<p>
					<span class="icon icon--info">?</span><a href="puzzle.html">Forgot Password</a>
				</p>
			</footer>
			</form>
		</div>
	
	
</body>
</html>