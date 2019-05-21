<?php

  if(isset($_POST['submit']))
  {
    include'connection.php';
  $sql="UPDATE product set Pnme='".$_POST['pname']."' where Pid='".$_GET['id']."'";
  mysqli_query($conn,$sql);
  echo"<script>window.location='display1.php'</script>";

  }


?>
