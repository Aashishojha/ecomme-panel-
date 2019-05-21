
<?php
include'connection.php';


$file = rand(1000,100000)."-".$_FILES['picture']['name'];//photo start
                            $file_loc = $_FILES['picture']['tmp_name'];
                            $file_size = $_FILES['picture']['size'];
                            $file_type = $_FILES['picture']['type'];
                            $folder="photo/";
                            // new file size in KB
                            $new_size = $file_size/1024;  
                            // new file size in KB
                            // make file name in lower case
                            $new_file_name = strtolower($file);
                            
                            // make file name in lower case
                            $final_file=str_replace(' ','-',$new_file_name);//end photo end
                            move_uploaded_file($file_loc,$folder.$final_file);  


$sql = "INSERT INTO product(Pnme,Pprice,Pcategory,Pbrand,gst,pimg)VALUES('".$_POST['Pnme']."','".$_POST['Pprice']."','".$_POST['Pcat']."','".$_POST['Pbrand']."','".$_POST['gsst']."','".$final_file."')";


if (mysqli_query($conn, $sql)) 
{
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

  echo"<script>window.location='display1.php'</script>";
?>

