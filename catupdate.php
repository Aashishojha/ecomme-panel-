
<?php
  if(isset($_POST['Submit']))
  {
    include'connection.php';
  $sql="UPDATE category SET Cnme='".$_POST['catname']."' WHERE CiD='".$_POST['id']."'";
  mysqli_query($conn,$sql);
  echo"<script>window.location='http://localhost/Ecomm/display5.php'</script>";

  }