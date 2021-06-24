<?php
   //include('config.php');
   session_start();
   
   $name = $_SESSION['login_user'];
   
 //  $ses_sql = mysqli_query($db,"select name from students where username = '$name' ");
   
  // $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
 //  $login_session = $row['username'];
   
   if(empty($_SESSION['login_user'])){
      header("location:sigin.php");
     // die();
   }
?>
