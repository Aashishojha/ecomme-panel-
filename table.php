
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<title>ADD PRODUCT</title>
</head>
	
<?php 
include'dashboard.php';
?>
<body style="background-color: #01e1ff">
<div class="container" style="background: #1e1c1c;" id="demo" onmouseover="ashish()" onmouseout="ojha()" itemscope itemtype="http://localhost/ecomm/product1.php">
	<div class="row">
		

	<div class="col-sm-5">
 <form action="insertproduct.php" id="form1" runat="server"  method="POST" enctype="multipart/form-data" style="color: #01e1ff;">
 <div class="form-group">
 <label for="id" itemprop="productid">ID|</label>
 <input type="number" name="Pid" placeholder="product id" class="form-control" disabled="">
</div>

<div class="form-group">
<label for="Pnme">NAME|</label>
<input type="text" name="Pnme" autocomplete="on"  class="form-control" placeholder="product name">
</div>

<div class="form-group">
<label for="Pprice">PRICE|</label>
<input type="number" name="Pprice"  class="form-control" placeholder="product price" autocomplete="on">
</div>


			      <div class="form-group">
      <label for="Pcategory">Product Category</label>
      <select name="Pcat"  class="form-control text-dark" >
 
   <?php
       include'connection.php';
       $sql="SELECT *FROM category";
       $result=mysqli_query($conn,$sql);
       echo"<option value='' disabled selected hidden>Select</option>";

       while ($row=mysqli_fetch_assoc($result)) 
       {
         echo"<option>".$row['Cnme']."</option>";
       }
      ?>
    </select>
    </div>
			<div class="form-group">
			<label for="Pbrand">BRAND|</label>
			<input type="text" name="Pbrand" class="form-control" placeholder="product brand" autocomplete="on">
</div>
	<div class="form-group">
			<label for="gst">GST%</label>
			<input type="number" name="gsst"  class="form-control" placeholder="Gst On Price" autocomplete="on">
</div>
<div class="form-group">

      <label for="Img">Img/Upload</label><br>
  <input type='file' id="imgInp" name="picture" />
  <img id="blah" src="#" alt="your image" />
    </div>

    <script>
    function readURL(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#imgInp").change(function() {
  readURL(this);
});</script>
	
		    <div class="form-group">
			<input type="submit" name="Submit" value="Submit" class="btn" style="background-color: #38F0E4" class="form-control" title="submit your form">
</div>
</form>
</div>

<div class="col-sm-2 text-white font-italic text-right" style="font:status-bar; ">
	<marquee>|Imagination to work|</marquee>
	<br>
<img class="img-responsive" src="product.png" width="650px" height="500px">
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