
<?php
  if(isset($_POST['Submit']))
  {
    include'connection.php';
  $sql="UPDATE customer SET uname='".$_POST['uname']."' WHERE CID='".$_POST['id']."'";
  mysqli_query($conn,$sql);
  echo"<script>window.location='http://localhost/Ecomm/display2.php'</script>";

  }
?>
