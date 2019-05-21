
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="dc.css">
<script type="text/javascript" src="style.js"></script>

	<title>
		CUSTOMER DETAIL
	</title>
</head>
<?php 
include'dashboard.php';
?>
<body>
	<div class="container ojha"  id="demo" onmouseover="ashish()" onmouseout="ojha()"  >

	<div class="row">
		<div class="col-sm-4">
			
		</div>
	<div class="col-sm-4">

	<form action="insertcustomer.php"  method="POST" style="color: #FFFFFF;">
	
	<div class="form-group">
	
	

	<label for="CID">ID|</label>
	<input type="number" name="id" class="form-control" placeholder="customer ID">
	</div>
		<div class="form-group">
			<label for="uname">USER NAME</label><br>
	<input type="text" name="uname" maxlength="30" class="form-control" placeholder="customer user name">
</div>
<div class="form-group">
	<label for="pass">PASSWORD</label><br>
	<input type="password" name="pass" maxlength="20" class="form-control" placeholder="customer user password">
</div>
<div class="form-group">
	<label for="cname">NAME</label><br>
	<input type="text" name="cname" maxlength="30" class="form-control" placeholder="customer name">
</div>
<div class="form-group">
	<label for="email">EMAIL</label><br>
	<input type="email" name="email" class="form-control" placeholder="customer email">
</div>
<div class="form-group">
	<label for="phone">PHONE</label><br>
	<input type="text" name="contact" class="form-control" maxlength="11" placeholder="customer contact number">
</div>
<div class="form-group">
	<label for="address">ADDRESS</label><br>
	<textarea name="address" rows="5" class="form-control" placeholder="customer address"></textarea>
</div>
<div class="form-group">
	<label for="pincode">PINCODE</label><br>
	<input type="number" name="pincode" class="form-control" placeholder="customer address pincode">
</div>
<div class="form-group">
	<input type="submit" name="Submit" value="Submit" class="btn btn-danger" class="form-control" title="submit your form">
	
</div>
	</form>
		
</div>
<div class="col-sm-4">


</div>


	</div>
</div>

</body>
</html>
