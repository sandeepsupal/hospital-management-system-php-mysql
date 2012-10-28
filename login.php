<?php
$username=$_POST['username'];
$password=$_POST['password'];
$con=@mysql_connect("localhost","root","yogi123") or die(mysql_error());
$db=@mysql_select_db("hms",$con)or die(mysql_error());

$sql="SELECT * FROM users WHERE username='$username' and password='$password'";

$result=mysql_query($sql);

$count=mysql_num_rows($result);

if($count==1){

session_register("username");
session_register("password");
header("location:login_success.php");
}
else {
echo "Wrong Username or Password";
}
ob_end_flush();
?>
