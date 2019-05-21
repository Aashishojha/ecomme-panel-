<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="css/font-awesome.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="login.css">

    

</head>
<body class="ao">

	<nav class="navbar navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button " class="navbar-toggle" class="btn btn-primary"  data-toggle="collapse" data-target="#myNavbar">
       <abbr title="Menu"> <span class="icon-bar"></span></abbr>
          <abbr title="Menu"><span class="icon-bar"></span></abbr>
          <abbr title="Menu">    <span class="icon-bar"></span></abbr>
        
      </button>

      	
    
   <span class="navbar-brand"><a href="#"><i class="fas fa-mobile-alt">&nbsp;&nbsp;&nbsp;7004457006</i></a></span>
   <span class="navbar-brand"><a href="#"><i class="fas fa-map-marker-alt">&nbsp;&nbsp;&nbsp;R.Block</i></a></span>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
     
      <ul class="nav navbar-nav navbar-right">
        <li ><a href="#" class="active"><abbr title="Facebook"><i class="fab fa-facebook-square"></i></abbr></a></li>
        <li  ><a href="#"><abbr title="Twitter"><i class="fab fa-twitter"></i></abbr></a></li>
          <li><a href="#"><abbr title="Pinterest"><i class="fab fa-pinterest-p"></i></abbr> </a></li>
          <li  ><a href="https://www.canva.com/"><abbr title="Linkedin"><i class="fab fa-linkedin-in"></abbr></i></a></li>
      </ul>
    </div>
  </div>
</nav>
<br>
<br>
<br>

<div class="container">

  <img src="http://localhost/ecomme/Img/sdfdf.png" alt="Notebook" width="100%">
	<div class="content">
	<div class="row">
		<div class="col-sm-2 ">
		
	</div>
		
	<div class="col-sm-8">
<div class="loginbox">
	<img src="http://localhost/ecomme/Img/avatar.png" class="avatar">
	<br>
	<h1>Login Here</h1>
	<form method="POST">
		<p>Username</p>
		<input type="text" name="" placeholder="Enter Username">
		<p>Password</p>
		<input type="password" name="" placeholder="Enter Password">
		<input type="submit" name="" value="Login" >
		<a href="#">Lost your Password?</a><br>
		<a href="#">Dont Have An Account?</a>
	</form>
</div>
</div>
	</div>
	</div>
</div>


<?php
if (isset($_POST['submit'])) 
{
	# code...


	include'connection.php';
	$sql="SELECT *FROM login WHERE userid='".$_POST['userid']."' AND password='".$_POST['password']."'";
	$result=mysqli_query($conn,$sql);
	if (mysqli_num_rows($result) > 0)
	{
		session_start();
		$_SESSION['userid']=$_POST['userid'];
		echo"<script>alert('Login Success')  </script>";
		echo"<script>window.location='product1.php'</script>";
	}
	else
	{
echo"<script>alert('Incorrect id or Password')</script>";
	}
	
	
}


	?> 


</body>
</html>
   


