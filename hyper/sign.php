<!DOCTYPE HTML>
<html>
<head>
<title>User-Signup</title>
</head>

<body>
<?php

extract($_POST);
include("config.php");
    
$rs=mysqli_query($connection,"select * from user where Username='$uname'");
if (mysqli_num_rows($rs)>0)
{
	alert("Username Already Exists");
}
$query="insert into user(Name,Email,Username,Password,Address,Phone) values('$name','$email','$uname','$pass','$addr','$phone')";
$rs=mysqli_query($connection,$query)or die("Could Not Perform the Query");


?>
</body>
</html>