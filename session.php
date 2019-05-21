<?php 
session_start();
echo $_SESSION['userId'];
if(empty($_SESSION['userId']))
{
	echo"<script> window.location='login2.php' </script>";
	
}
exit();
?>