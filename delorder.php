
<!DOCTYPE html>
<html>
<head>
	     <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<?php 
include'dashboard.php';
?>

	<title>|Delete|order|Database|</title>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-sm-8">
			<img src="fd.jpg" class="img-responsive" width="800px">
		</div>
			<div class="col-sm-4">
				<h1 class="display-5 text-decoration-none text-danger font-weight-bold  ">Your Order Data Succesfully Deleted</h1>
			</div>
		</div>
		
	</div>
</div>
</body>
</html>
<?php
include'connection.php';
$sql="DELETE FROM orders WHERE orderid='".$_GET['id']."'";
mysqli_query($conn,$sql);
echo"<script>alert('Delete Successfully') </script>";

?>