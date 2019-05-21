
<!DOCTYPE html>
<html>
<head>
    <title>|View And Edit Product</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="dc.css">
<link rel="stylesheet" type="text/css" href="http://localhost/ecomme/Panel/test/tables/css/datatables.css">
</head>

<body>
<div class="container rounded ">
<div class="row">
     <div class="col-sm-4" >
     </div>

 
       <div class="col-sm-4 ojha">
       

<table class="table table-hover table-striped table-light ">

    <thead class="table-dark">
        <tr>
	   <th>SI.NO</th>
     <th>Pid</th>
     <th>Pnme</th>
      <th>Pprice</th>
      <th>Pcategory</th>
      <th>Pbrand</th>
      <th>gst</th>
      <th>img</th>
      <th class="text-success">Action</th>
      <th class="text-danger">ACTION</th>
    </tr>
  </thead>

<div class="table-responsive">
<?php
include'connection.php';
include'dashboard.php';
$sql = "SELECT * FROM product";
$result = mysqli_query($conn, $sql);

	$si=1;
    while($row = mysqli_fetch_assoc($result)) 
    {
     
         echo"<tr><td>".$si; 
    	   echo"<td>".$row['Pid']."</td>";
    	   echo"<td>".$row['Pnme']."</td>";
         echo "<td>".$row['Pprice']."</td>";
         echo "<td>".$row['Pcategory']."</td>";
         echo "<td>".$row['Pbrand']."</td>";
         echo "<td>".$row['gst']."</td>";
         echo "<td><img src=http://localhost/ecomme/panel/photo//$row[pimg] class='img-fluid' width='200px'>";
    	   echo"<td><a href='update1product.php?id=$row[Pid]'>Edit</a></td>";
         echo"<td><a href='deleteproduct.php?id=$row[Pid]'>Delete</a></td> </tr>" ;
      
    	$si++;

    }
    

mysqli_close($conn);
?>
</div>
</table>
</div>
<div class="col-sm-4 " >
 
</div>
</div>
  </div>



<script type="text/javascript" src="http://localhost/ecomme/panel/test/tables/js/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="http://localhost/ecomme/Panel/test/tables/js/datatables.js"></script>
<script type="text/javascript" src="http://localhost/ecomme/panel/test/tables/js/jquery.dataTables.js"></script>
   
</body>
</html>



