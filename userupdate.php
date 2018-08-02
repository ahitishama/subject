<?php
include_once("config.php");
include_once("edit1.php");
if (isset($_POST['update'])) {

	$uid = $_POST['uid'];
	$firstname=$_POST["firstname"];
    $lastname=$_POST["lastname"];
    $contactno=$_POST["contactno"];
    $type=$_POST["type"];
    $email=$_POST["email"];
    $homeaddress=$_POST["homeaddress"];
    $pincode=$_POST["pincode"];
    $state=$_POST["state"];
    $cname=$_POST["cname"];
    $ccontact=$_POST["ccontact"];
    $website=$_POST["website"];
    $caddress=$_POST["caddress"];
    $cpincode=$_POST["cpincode"];
    $cstate=$_POST["cstate"];
    $latitude=$_POST["latitude"];
    $longitude=$_POST["longitude"];


	mysqli_query($database, "UPDATE business SET firstname='$firstname', lastname='$lastname',contactno='$contactno',gender='$gender',type='$type',email='$email',homeaddress='$homeaddress', pincode='$pincode',state='$state',cname='$cname',ccontact='$ccontact',website='$website',caddress='$caddress',cpincode='$cpincode',cstate='$cstate',latitude='$latitude',longitude='$longitude',WHERE uid=$uid");
	$_SESSION['message'] = "Address updated!"; 
	header('location: dashboard.php');
}
?>
<?php if ($update == true): ?>
	<button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
<?php else: ?>
	<button class="btn" type="submit" name="save" >Save</button>
<?php endif ?>