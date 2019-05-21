
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

	<title>|Edit And Update Customer|</title>
<?php 
include'dashboard.php';
?>
</head>

<body>
	<?php
include'connection.php';
$sql="SELECT *FROM customer WHERE CID='".$_GET['id']."'";
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
?>
<div class="container"  style="background: #1e1c1c;">
	<div class="row">
		
	<div class="col-sm-6">
	<form action="updatecust.php"  method="POST" style="color: #01e1ff;">
	
	<div class="form-group">
	<label for="CID">ID|</label>
	<input type="number" name="id" value="<?php echo $row['CID'] ?>" class="form-control" placeholder="customer ID">
	</div>
		<div class="form-group">
			<label for="uname">USER NAME</label><br>
	<input type="text" name="uname" maxlength="30" value="<?php echo $row['uname'];  ?>" class="form-control" placeholder="customer user name">
</div>
<div class="form-group">
	<label for="pass">PASSWORD</label><br>
	<input type="password" name="pass" maxlength="20"   class="form-control" placeholder="customer user password">
</div>
<div class="form-group">
	<label for="cname">NAME</label><br>
	<input type="text" name="cname" maxlength="30" value="<?php echo $row['cname'];  ?>" class="form-control" placeholder="customer name">
</div>
<div class="form-group">
	<label for="email">EMAIL</label><br>
	<input type="email" name="email"  value="<?php echo $row['email'];  ?>"class="form-control" placeholder="customer email">
</div>
<div class="form-group">
	<label for="phone">PHONE</label><br>
	<input type="number" name="contact" value="<?php echo $row['phone'];  ?>" class="form-control" maxlength="11" placeholder="customer contact number">
</div>
<div class="form-group">
	<label for="address">ADDRESS</label><br>
	<textarea name="add" value="<?php echo $row['address']; ?>" rows="5" class="form-control" placeholder="customer address"></textarea>
</div>
<div class="form-group">
	<label for="pincode">PINCODE</label><br>
	<input type="number" name="pin" value="<?php echo $row['pincode'];  ?>" class="form-control" placeholder="customer address pincode">
</div>
<div class="form-group">
	<input type="submit" name="Submit" value="Submit" class="btn btn-danger" class="form-control" title="submit your form">
	
</div>
	</form>
	</div>
<div class="col-sm-5">
		<h1 class="display-1" style="color: #01e1ff;font-family: cursive;">Customer Updation</h1>
	</div>
</div>
</div>



	</div>
</div>






</body>
</html>
