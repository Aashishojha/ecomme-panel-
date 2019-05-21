
<!DOCTYPE html>
<html>

<head>
    <title>|Display And Edit Order</title>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

</head>
<style>
.ojha {width: 300px;
  height: 100px;
  padding: 15px;
  background-color: white;
  box-shadow: 0px 0px 20px 10px;
}
  </style>
<body>
<?php 
include'dashboard.php';
?>
<div class="container rounded-top" style="background:#01e1ff;">

    <div class="row">
       <div class="col-sm-1">
            
        </div>
        
        <div class="col-sm-10">

	<table class="table  table-hover table-striped table-light" >

    <thead style="color:black;">
        <tr>
	<th>SI.NO</th>
     <th>OrdId</th>
      <th>CsNme</th>
      <th>CsId</th>
      <th>Pro Name</th>
      <th>Quantity</th>
      <th>Rate</th>
      <th>Address</th>
      <th class="text-success">Action</th>
      <th class="text-danger">ACTION</th></tr></thead>

<?php
include'connection.php';
$sql = "SELECT * FROM orders";
$result = mysqli_query($conn, $sql);

	$si=1;
    while($row = mysqli_fetch_assoc($result)) 
    {
        echo"<tr><td>".$si; 
    	echo"<td>".$row['orderid']."</td>";
    	echo"<td>".$row['cname']."</td>";
        echo "<td>".$row['cid']."</td>";
        echo "<td>".$row['pname']."</td>";
        echo "<td>".$row['qty']."</td>";
        echo "<td>".$row['rate']."</td>";
        echo "<td>".$row['address']."</td>";
    	echo"<td><a href='uporder.php?id=$row[orderid]'>Edit</a></td>";  
      echo"<td><a href='delorder.php?id=$row[orderid]'>Delete</a></td>";

     
    	$si++;
    }
    

mysqli_close($conn);
?>
</table>
</div>

<div class="col-sm-1">
 
</div>
    


    </div>
</div>
<br>
<br>

</body>
</html>