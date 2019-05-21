
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
<style>
.vl {
  border-left: 6px solid green;
  height: 500px;
  position: absolute;
  left: 50%;
  margin-left: -3px;
  top: 0;
}
</style>
<body class="bg-white">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <img src="vvv.jpg" class="img-responsive" width="500px">
            </div>

<div class="vl col-sm-4"></div>

<div class="col-sm-4" style="background-color: white; color: black;">

   <div class="canva-embed" data-design-id="DADStP9eEV8" data-height-ratio="0.7095" style="padding:70.9459% 5px 5px 5px;background:rgba(0,0,0,0.03);border-radius:8px;">

<?php
include'connection.php';

$sql = "INSERT INTO category(Cnme)VALUES('".$_POST['catname']."')";


if (mysqli_query($conn, $sql)) {
    echo ' <a href="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DADStP9eEV8&#x2F;view?utm_content=DADStP9eEV8&amp;utm_campaign=designshare&amp;utm_medium=embeds&amp;utm_source=link" target="_blank" rel="noopener">Now Category Data In category Database</a> by <a href="https:&#x2F;&#x2F;www.canva.com&#x2F;ashishak98?utm_campaign=designshare&amp;utm_medium=embeds&amp;utm_source=link" target="_blank" rel="noopener">Ashish Ojha</a>" ';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

  echo"<script>window.location='display5.php'</script>";
mysqli_close($conn);
?>
</div></div>
   <script async src="https:&#x2F;&#x2F;sdk.canva.com&#x2F;v1&#x2F;embed.js">
     
   </script>


   </div>
    </div>
