
<!DOCTYPE html>
<html>
<head>
    <title>|Display And Edit Category</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="dc.css">

</head>

<body>
<div class="container  rounded" >
    <div class="row">

        <div class="col-sm-4" >
        </div>
        <div class="col-sm-4  ojha">
       

<table class="table  table-hover table-striped table-light ">

    <thead class="table-dark">
        <tr>
	<th>SI.NO</th>
     <th>Cat Id</th>
     <th>Cat Nme</th>
      <<th class="text-success">Action</th>
      <th class="text-danger">ACTION</th></tr></thead>
<?php

include'connection.php';
include'dashboard.php';
$sql = "SELECT * FROM category";
$result = mysqli_query($conn, $sql);

	$si=1;
    while($row = mysqli_fetch_assoc($result)) 
    {
        echo"<tr><td>".$si; 
    	echo"<td>".$row['Cid']."</td>";
    	echo"<td>".$row['Cnme']."</td>";
    	echo"<td><a href='upcat.php?id=$row[Cid]'>Edit</a></td>";
        echo"<td><a href='deletecategory.php?id=$row[Cid]'>Delete</a></td>";

    	$si++;
    }
    

mysqli_close($conn);
?>
  



</table>
</div>

<div class="col-sm-4" >
</div>

</div>
</div>


</body>
</html>



