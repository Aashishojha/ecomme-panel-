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

	<title>ADD Delivery|Order|</title>
</head>
	
<?php 
include'dashboard.php';
?>
<body style="background-color: #01e1ff">
<div class="container" style="background: #1e1c1c;" id="demo" onmouseover="ashish()" onmouseout="ojha()">
	<div class="row">
		

	<div class="col-sm-5">
 <form action=""  method="POST"  style="color: #01e1ff;">
 <div class="form-group">
 <label for="did">dID|</label>
 <input type="number" name="delid" placeholder="Delivery id" class="form-control">
</div>

<div class="form-group">
<label for="deleorder">DelORorder|</label>
<input type="text" name="dor" autocomplete="on" autofocus="on"  class="form-control" placeholder="Delivery and Order Name">
</div>

<div class="form-group">
<label for="orderid">Order Id|</label>
<input type="number" name="orderid" min="1" max="" class="form-control" placeholder="Order Id" autocomplete="on">
</div>

<div class="form-group">
			<label for="csid">Customer Id|</label>
			<input type="number" name="csid" maxlength="30" class="form-control" placeholder="Customer Id" autocomplete="on">
			</div>

			<div class="form-group">
			<label for="ddate">Date|</label>
			<input type="date" name="ddate" class="form-control" >
</div>
	<div class="form-group">
			<label for="dtime">Time</label>
			<input type="Time" name="dtime"  class="form-control">
</div>
	
	
		    <div class="form-group">
			<input type="submit" name="Submit" value="Submit" class="btn btn-danger" class="form-control" title="submit your form">
</div>
</form>
</div>

<div class="col-sm-4 text-white font-italic text-right" style="font:status-bar; ">
	<marquee>|Imagination to work|</marquee>
	<br>
	<h1 class="display-1" style="color: #01e1ff;font-family: cursive;">Delivery</h1>
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