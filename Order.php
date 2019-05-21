<?php 
include'session.php';
?>
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

	<title>|add|orders</title>
</head>
	
<?php 
include'dashboard.php';
?>
<body style="background-color: #01e1ff">
<div class="container" style="background: #1e1c1c;" id="demo" onmouseover="ashish()" onmouseout="ojha()">
	<div class="row">

	<div class="col-sm-5">
 <form action="insertorder.php"  method="POST"  style="color: #01e1ff;">
 <div class="form-group">
 <label for="oid">oID|</label>
 <input type="number" name="id" placeholder="Order Id" class="form-control" required="Fill Order Id">
</div>

<div class="form-group">
<label for="cnme">cNAME|</label>
<input type="text" name="cnme" autocomplete="on" autofocus="on"  class="form-control" placeholder="Customer name">
</div>

<div class="form-group">
<label for="Csid">cID|</label>
<input type="number" name="Csid" min="1" max="" class="form-control" placeholder="Customer Id" autocomplete="on">
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

<div class="col-sm-4 text-white font-italic text-right" style="font:status-bar; ">
	<marquee>|Imagination to work|</marquee>
	<br>
<img class="img-responsive" src="po.jpg" width="600px" height="500px">
</div>
</div></div>
 <script>
function ashish() {
	document.getElementById("demo").style.background="black";
}

function ojha() {
	document.getElementById("demo").style.background="#1e1c1c";
}
</script> 

</body>
</html>