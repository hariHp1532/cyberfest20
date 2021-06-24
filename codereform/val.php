<?php

   //include('index.php');
   
	if(isset($_POST['submit']))

	{	
	include('connection.php');

	//$name     = $_POST['name'];
	$email   = $_POST['email'];
	$password   = $_POST['password'];
    $code="Code_Reformprilm";
	$sql = "SELECT * FROM students WHERE email = '$email' and password = '$password'";
	$result = mysqli_query($conn,$sql);
    $row2 = mysqli_fetch_array($result);
      
    $count = mysqli_num_rows($result);
	 if($count == 1) {
        // session("username");
         $id = $row2['id'];
		 //echo $id;
		 $sql = "SELECT event_name FROM stud_events WHERE students_id='$id' AND status=1 AND event_name='$code'";
		 $result = mysqli_query($conn,$sql);
		 $row = mysqli_fetch_array($result);
		 $event = $row['event_name'];
		 
		 if($event==$code)
		 {
			 session_start();
			 $em = $row2['email'];
			 $_SESSION["login_user"] = $em;
			  echo '<script>alert("Logged in '.$_SESSION["login_user"].'"); window.location.href = "indexs.php"</script>';
			   $status = 0;
			//echo $_SESSION["login_user"];
				 $update = mysqli_query($conn,"UPDATE stud_events set status = 0  WHERE students_id = '$id' AND event_name='$code'"); 
				 
		 }
		 else{
			echo $event;
			 //echo '<script>alert("invalid login"); window.location.href = "login.php"</script>';
		 }
		 
        // echo '<script>alert("Succes"); window.location.href = ""</script>';
       //  header("location: welcome.php");
      }else {
         $error = "Invalid login";
         echo '<script>alert("Invalid login"); window.location.href = "login.php"</script>';
        // header("location: sigin.php");
      }

	}
	else{
		echo"not inside";
	}







?>