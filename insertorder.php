
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

    <title>|Order Record |</title>
</head>
<?php 
include'dashboard.php';
?>
	<body class="bg-white text-dark">
    <div class="container">
        <div class="row">
          
            
     
    <div class="col-sm-3" style="background-color: white; color: black;">


<?php
include'connection.php';

$sql = "INSERT INTO orders(orderid,cname,cid,pname,qty,rate,address)VALUES('".$_POST['id']."','".$_POST['cnme']."','".$_POST['Csid']."','".$_POST['Prnme']."','".$_POST['quant']."','".$_POST['raate']."','".$_POST['address']."')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

<h1 class="text-success font-weight-bold">Order <br>Data 
<br>Based 
saved</h1>
</div>
<div class="col-sm-9">
    <img src="asdd.jpg" class="img-responsive" width="600px" height="400px">
</div>
   </div>
    </div>
</body>
</html>

