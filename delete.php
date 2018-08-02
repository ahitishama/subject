<?php
include('config.php');
$link = mysqli_connect("localhost", "root", "", "Registration");
 $firstname=$_POST["firstname"]; 

if($link == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$sql = "delete_record";
if(mysqli_query($link, $sql)){
    echo "Records were deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 mysqli_close($link);
?>



