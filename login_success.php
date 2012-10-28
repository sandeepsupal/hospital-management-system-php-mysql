<?php
session_start();
if(!session_is_registered(myusername)){
header("location:home.html");
}
?>

<html>
<body>
Login Successful
</body>
</html>
