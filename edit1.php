<?php
$uid=$_GET['uid'];

include_once("config.php");

if(isset($_POST['update']))
{	

	$uid = mysqli_real_escape_string($mysqli, $_POST['uid']);
	
	$firstname = mysqli_real_escape_string($mysqli, $_POST['firstname']);
	$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
	$contactno = mysqli_real_escape_string($conn, $_POST['contactno']);
	$gender = mysqli_real_escape_string($conn, $_POST['gender']);
	$type = mysqli_real_escape_string($conn, $_POST['type ']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);	
	$homeaddress= mysqli_real_escape_string($conn, $_POST['homeaddress']);
$pincode= mysqli_real_escape_string($conn, $_POST['pincode']);
$state = mysqli_real_escape_string($conn, $_POST['state']);
$cname= mysqli_real_escape_string($conn, $_POST['cname']);
$ccontact = mysqli_real_escape_string($conn, $_POST['ccontact']);
	$website= mysqli_real_escape_string($conn, $_POST['website']);
$caddress = mysqli_real_escape_string($conn, $_POST['caddress']);
$cpincode= mysqli_real_escape_string($conn, $_POST['cpincode']);
$state = mysqli_real_escape_string($conn, $_POST['state']);
$latitude= mysqli_real_escape_string($conn, $_POST['latitude']);
$longitude= mysqli_real_escape_string($conn, $_POST['longitude']);

	if(empty($firstname) || empty($contactno) || empty($email) || empty($gender)) {	
			
		if(empty($firstname)) 
		{
			echo "<font color='red'>First Name field is empty.</font><br/>";
		}
		
		if(empty($contactno)) 
		{
			echo "<font color='red'>Contact field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}	
		if(empty($gender)) {
			echo "<font color='red'>gender field is empty.</font><br/>";
		}		
	} else {	
	
		$result = mysqli_query($conn, "UPDATE business SET firstname='$firstname', lastname='$lastname',contactno='$contactno',gender='$gender',type='$type',email='$email',homeaddress='$homeaddress', pincode='$pincode',state='$state',cname='$cname',ccontact='$ccontact',website='$website',caddress='$caddress',cpincode='$cpincode',cstate='$cstate',latitude='$latitude',longitude='$longitude',WHERE uid=$uid");
            header("Location:business.php");
	}
}
?>
<?php
$result = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM business WHERE uid=$uid"));
?>
<html>

<body>

<br/><br/>
	
	<form name="form" method="post" action="edit1.php">
	<input type="hidden" name="uid" value="<?php echo $uid; ?>" />
		<table border="0">
			<tr> 
				<td>First Name</td>
				<td><input type="text" name="firstname" value="<?php echo $result['firstname'];?>"></td>
			</tr>

             <tr> 
				<td>Last Name</td>
				<td><input type="text" name="lastname" value="<?php echo $result['lastname'];?>"></td>
			</tr>


			<tr> 
				<td>Contact No </td>
				<td><input type="text" name="contactno" value="<?php echo $result['contactno'];?>"></td>
			</tr>


<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $result['email'];?>"></td>
			</tr>



<tr> 
				<td>Homeaddress</td>
				<td><input type="text" name="homeaddress" value="<?php echo $result['homeaddress'];?>"></td>
			</tr>

<tr> 
				<td>Pincode</td>
				<td><input type="text" name="pincode" value="<?php echo $result['pincode'];?>"></td>
			</tr>
<tr> 
				<td>State</td>
				<td><input type="text" name="state" value="<?php echo $result['state'];?>"></td>
			</tr>
<tr> 
				<td>Company name</td>
				<td><input type="text" name="cname" value="<?php echo $result['cname'];?>"></td>
			</tr>

<tr> 
				<td>Company contact</td>
				<td><input type="text" name="ccontact" value="<?php echo $result['ccontact'];?>"></td>
			</tr>



			<tr> 
				<td>Website</td>
				<td><input type="text" name="website" value="<?php echo $result['website'];?>"></td>
			</tr>


<tr> 
				<td>Company address</td>
				<td><input type="text" name="caddress" value="<?php echo $result['caddress'];?>"></td>
			</tr>

<tr> 
				<td>Company pincode</td>
				<td><input type="text" name="cpincode" value="<?php echo $result['cpincode'];?>"></td>
			</tr>


<tr> 
				<td>Company state</td>
				<td><input type="text" name="cstate" value="<?php echo $result['cstate'];?>"></td>
			</tr>

<tr> 
				<td>Latitude</td>
				<td><input type="text" name="latitude" value="<?php echo $result['latitude'];?>"></td>
			</tr>

<tr> 
				<td>Longitude</td>
				<td><input type="text" name="ongitude" value="<?php echo $result['longitude'];?>"></td>
			</tr>




			<tr>
				<td><input type="hidden" name="uid" value=<?php echo $_GET['uid'];?>></td>
				<td><input type="submit" name="edit" value="edit"></td>
			</tr>
		</table>
	</form>
</body>
</html>
