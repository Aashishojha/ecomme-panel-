
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

	<title>EDIT AND UPDATE PRODUCT
	</title>

<?php 
include'dashboard.php';
?>
</head>

<body>
	<?php
include'connection.php';
$sql="SELECT *FROM product WHERE Pid='".$_GET['id']."'";
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
?>

<div class="container" style="background-color: #1e1c1c" >
	<div class="row">

	<div class="col-sm-6">

<form action=""  method="POST" style="color: #01e1ff;">
	<div class="form-group">
 <label for="id">PID|</label>
 <input type="number"  name="id" value="<?php echo $row['Pid'] ?>"  placeholder="product id" class="form-control" >
</div>

<div class="form-group">
<label for="Pnme">PNAME|</label>
<input type="text" name="pname" autocomplete="on" value="<?php echo $row['Pnme'] ?>" class="form-control" placeholder="product name" autocomplete="on">
</div>

<div class="form-group">
<label for="Pprice">PRICE|</label>
<input type="number" name="Pprce" value="<?php echo $row['Pprice'] ?>" min="1" max="" class="form-control" placeholder="product price" autocomplete="on">
</div>

<div class="form-group">
			<label for="Pcategory">CATEGORY|</label>
			<input type="text" name="Pcatgory" value="<?php echo $row['Pcategory'] ?>" value="<?php echo $row['Pid'] ?>" maxlength="30" class="form-control" placeholder="product category" autocomplete="on">
			</div>
			<div class="form-group">
			<label for="Pbrand">BRAND|</label>
			<input type="text" name="Pband" value="<?php echo $row['Pbrand'] ?>" maxlength="15" class="form-control" placeholder="product brand" autocomplete="on">
</div>
	<div class="form-group">
			<label for="gst">GST%</label>
			<input type="number" name="gsst" value="<?php echo $row['gst'] ?>" maxlength="2" class="form-control" placeholder="Gst On Price" autocomplete="on">
</div>
	<div class="custom-file mb-3">
    <input type="file" class="custom-file-input form-control" value="<?php echo $row['pimg'] ?>" id="customFile" name="creepy">
    <label class="custom-file-label text-white" for="customFile" style="background-color:#01e1ff ">Choose file|</label>
    </div>
	
		    <div class="form-group">
			<input type="submit" name="submit" value="Update" class="btn" style="background-color: #38F0E4" class="form-control" title="submit your form">
</div>
</form>
	</div>

	<div class="col-sm-5">
		<h1 class="display-1" style="color: #01e1ff;font-family: cursive;">Product Updation</h1>
	</div>
</div>
</div>
<?php

  if(isset($_POST['submit']))
  {
    include'connection.php';
  $sql="UPDATE product set Pnme='".$_POST['pname']."' where Pid='".$_GET['id']."'";
  mysqli_query($conn,$sql);
  echo"<script>window.location='display1.php'</script>";

  }


?>




</body>
</html>