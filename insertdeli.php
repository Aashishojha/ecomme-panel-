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

    <title>|Product Record |</title>
</head>
<?php 
include'dashboard.php';
?>
<body class="bg-white">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <img src="xv.png" class="img-responsive" width="500px">
            </div>
            
     
    <div class="col-sm-4" style="background-color: white; color: black;">
<?php
include'connection.php';
  

$sql = "INSERT INTO (Pid,Pnme,Pprice,Pcategory,Pbrand,gst,pimg)VALUES('".$_POST['Pid']."','".$_POST['Pnme']."','".$_POST['Pprice']."','".$_POST['Pcategory']."','".$_POST['Pbrand']."','".$_POST['gsst']."',
'".$final_file."')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
</div>
<div class="col-sm-4">
    <img src="zzz.jpg" class="img-responsive" width="400px">
</div>
   </div>
    </div>
</body>
</html>


