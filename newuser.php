<?php
$username=$_POST['username'];
$password=$_POST['password'];
$con=@mysql_connect("localhost","root","yogi123") or die(mysql_error());
$db=@mysql_select_db("hms",$con)or die(mysql_error());
$str="insert into users values('$username','$password')";
$res=@mysql_query($str)or die(mysql_error());
if($res>=0)
{
echo'<br><br><b>Thank you for registeration !! <br>';
}

?>
<html>
<br>
<a href="index.html"><b>Click here to return to the main page</b></a>
</html>
