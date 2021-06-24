<?php
include('connection.php');
	
	
if(isset($_POST['user_id']))
{

$email = $_POST['email'];

$sql ="SELECT id FROM students WHERE id = $id ";
$result = mysqli_query($conn,$sql);
while($row = mysql_fetch_array($result))
{
	
   $status = $row['status'];
   
    if($status  == 1)
    {
        $status = 0;

        $update = mysql_query("Update students set status = '$status'  WHERE email` = '$email'"); 
                 
    }
    else
    {
		echo '<script>alert("account deactivated"); window.location.href = "login.php"</script>'; 
    }

    }

}
?>	
