
<!DOCTYPE html>
<html>

<head>
    <title>|Display And Edit Customer</title>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="dc.css">
</head>

<body>

<div class="container rounded ">

    <div class="row">
      <div class="col-sm-4">
        
      </div>
        
        <div class="col-sm-4 ojha" >
          

	<table class="table  table-hover table-striped table-light " >

    <thead class="table-dark">
        <tr>
	<th>SI.NO</th>
     <th>CsId</th>
      <th>CsUnme</th>
      <th>CsPass</th>
      <th>CsName</th>
      <th>CsEmail</th>
      <th>CsPhone</th>
      <th>CsAddress</th>
      <th>CsPinCDE</th>
      <th class="text-success">Action</th>
      <th class="text-danger">ACTION</th></tr></thead>

<?php
include'connection.php';
include'dashboard.php';
$sql = "SELECT * FROM customer";
$result = mysqli_query($conn, $sql);

	$si=1;
    while($row = mysqli_fetch_assoc($result)) 
    {
        echo"<tr><td>".$si; 
    	echo"<td>".$row['CID']."</td>";
    	echo"<td>".$row['uname']."</td>";
        echo "<td>".$row['pass']."</td>";
        echo "<td>".$row['cname']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['phone']."</td>";
        echo "<td>".$row['address']."</td>";
        echo "<td>".$row['pincode']."</td>";
    	echo"<td><a href='upcustomer.php?id=$row[CID]'>Edit&Go</a></td>";
    	echo"<td><a href='delcustomer.php?id=$row[CID]'>Delete</a></td>";

     
    	$si++;
    }
    

mysqli_close($conn);
?>
</table>
</div>

<div class="col-sm-4">
  
</div>   

</div>
</div>

</body>
</html>