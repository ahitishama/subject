
<?
include('config.php');
$uid=$_POST["uid"]; 
$name=$_POST["name"]; 
$emailid=$_POST["emailid"]; 
$phoneno=$_POST["phoneno"];   
  
echo "UPDATE user SET name='$name', emailid='$emailid' WHERE uid=$uid";
$query = mysqli_query($conn,"UPDATE user SET name='$name', emailid='$emailid' WHERE uid=$uid");
 ?>


