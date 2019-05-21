
<?php
  if(isset($_POST['Submit']))
  {
    include'connection.php';
  $sql="UPDATE orders SET cname='".$_POST['cnme']."' WHERE orderid='".$_POST['id']."'";
  mysqli_query($conn,$sql);
  echo"<script>window.location='http://localhost/Ecomm/display3.php'</script>";
  
  }
?>