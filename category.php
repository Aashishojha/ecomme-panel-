
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="dc.css">
<script type="text/javascript" src="style.js"></script>
	<title>
		Category DETAIL
	</title>
</head>
<?php 
include'dashboard.php';
?>

<body >
	<div class="container ojha"  id="demo" onmouseover="ashish()" onmouseout="ojha()">
	<div class="row">
		<div class="col-sm-4"></div>
	<div class="col-sm-4">
	<form action="ica.php"  method="POST" class="text-white">
		<!---------<div class="form-group">
			<label for="Cidd">Cat Id|</label><br>
	<input type="number" name="Cidd" maxlength="5" class="form-control" placeholder="cat id" disabled="">
</div>-------->

		<div class="form-group">
			<label for="cname">Cat NAME|</label><br>
	<input type="text" name="catname" maxlength="30" class="form-control" placeholder="category name">
</div>

<div class="form-group">
			<label for="bname">Brand NAME|</label><br>
	<input type="text" name="braname" maxlength="30" class="form-control" placeholder="Product Brand Name">
</div>


<div class="form-group">
	<input type="submit" name="Submit" value="Submit" class="btn btn-danger" class="form-control" title="submit your form">
	
</div>
	</form>
	</div>
<div class="col-sm-4" style="font:status-bar; ">
		<marquee class="  text-white font-italic text-right">|Imagination to work|</marquee>
		<img class="img-fluid" src="http://localhost/ecomme/Img/catr.png" width="600px" height="400px">
	
</div>



	</div>
</div>

</body>
</html>
