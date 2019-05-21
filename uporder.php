
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

	<title>|Edit And Update Order|</title>
<?php 
include'dashboard.php';
?>
</head>

<body>
	<?php
 echo $_GET['id'];
include'connection.php';
$sql="SELECT *FROM orders WHERE orderid='".$_GET['id']."'";
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
?>
<div class="container" style="background: #1e1c1c;" id="demo">
	<div class="row">

	<div class="col-sm-5">
 <form action="http://localhost/Ecomm/orderupdate.php"  method="POST"  style="color: #01e1ff;">
 <div class="form-group">
 	
 <label for="id">oID|</label>
 <input type="number" name="id" value="<?php echo $row['orderid'] ?>" placeholder="Order Id" class="form-control">
</div>

<div class="form-group">
<label for="cnme">cNAME|</label>
<input type="text" name="cnme" value="<?php echo $row['cname'] ?>" autocomplete="on" autofocus="on" class="form-control" placeholder="Customer name">
</div>

<div class="form-group">
<label for="Csid">cID|</label>
<input type="number" name="Csid" min="1" max=""  class="form-control" placeholder="Customer Id" autocomplete="on">
</div>

<div class="form-group">
			<label for="Prnme">Product Name|</label>
			<input type="text" name="Prnme" maxlength="30" class="form-control" placeholder="Product Name" autocomplete="on">
			</div>
			
			<div class="form-group">
			<label for="Quantity">Quantity|</label>
			<input type="number" name="quant" maxlength="15" class="form-control" placeholder="Quantity Of Product" autocomplete="on">
	</div>
<div class="form-group">
			<label for="rate">Rate|</label>
			<input type="number" name="raate" maxlength="15" class="form-control" placeholder="Rate On Product" autocomplete="on">
	</div>

	<div class="form-group">
	<label for="address">ADDRESS</label><br>
	<textarea name="address" rows="5" class="form-control" placeholder="customer address"></textarea>
</div>
	
		    <div class="form-group">
			<input type="submit" name="Submit" value="Submit" class="btn btn-danger" class="form-control" title="submit your form">
</div>
</form>
</div>

<div class="col-sm-4">
	<h1 class="display-1" style="color: #01e1ff;font-family: cursive;">Order Updation</h1>
</div>
</div></div>




</body>
</html>
