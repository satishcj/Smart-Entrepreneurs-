<?php
include('config.php');
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
{
$emailusername = mysqli_real_escape_string($obj->conn,$_POST['emailusername']); 
$password = mysqli_real_escape_string($obj->conn,$_POST['password']); 
$password = md5($password);

$sql="SELECT uid FROM users WHERE username='$emailusername' or email = '$emailusername' and password='$password'";
$result=mysqli_query($obj->conn,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$active=$row['active'];
$count=mysqli_num_rows($result);



if($count==1)
{
$_SESSION['login_user'] = $emailusername;
header("location: welcome.php");
}
else 
{
$error="Your Login Name or Password is invalid";
}
}
?>
<<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form action="login.php" method="post">
        <label>UserName or Email:</label>
        <input type="text" name="emailusername"/><br />
        <label>Password :</label>
        <input type="password" name="password"/><br/>
        <input type="submit" value=" Submit "/><br />
    </form>
</body>
</html>