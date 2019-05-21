
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="dc.css">
<script type="text/javascript" src="style.js"></script>
<title>ADD PRODUCT</title>
</head>
	

<body>

<?php 
include'dashboard.php';
?>


    <div class="container ojha trapezoid">
   <div class="row"   id="demo" onmouseover="ashish()" onmouseout="ojha()">
    <div class="col-sm-4">
      
    </div>
     <div class="col-sm-4">
       
    
 
	
 <form action="insertproduct.php" id="form1" runat="server" class=""  method="POST" enctype="multipart/form-data">
 <div class="form-group">
 <label for="id" itemprop="productid">ID|</label>
 <input type="number" name="Pid" placeholder="product id" class="form-control" disabled="" >
</div>

<div class="form-group">
<p>Name</p>
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

      <label for="Img">Img/Upload</label>
      <br>
  <input type='file' id="imgInp" name="picture" />
  <img id="blah" src="#" alt="your image" / width="100px">
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
			<input type="submit" name="Submit" value="Submit" class="btn btn-success" class="form-control" title="submit your form">
</div>
</form>

          </div>
          <div class="col-sm-4">
            
          </div>
        </div>
        
    
      </div>
  


 </body>
</html>
