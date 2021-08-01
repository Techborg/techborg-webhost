<?php
$name=$_POST['name'];
$gender=$_POST['rbgender'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$confirm=$_POST['confirm'];
include("connection.html");
$obj=new connection();
$s="insert into accounts values(NULL,'$name','$gender','$email','$username','$password','$confirm')";
$obj->execute($s);
?>
<script type="text/javascript">
 alert('Successfully registered');
 window.location="login.php";
 </script>