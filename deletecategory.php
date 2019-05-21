
<?php
include'connection.php';
$sql="DELETE FROM category WHERE cid='".$_GET['id']."'";
mysqli_query($conn,$sql);
echo"<script>alert('Delete Successfully') </script>";
echo"<script>window.location='http://localhost/Ecomm/display5.php'</script>";

?>