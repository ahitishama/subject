<?php
include_once("config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['uid']);
	
	$name = mysqli_real_escape_string($mysqli, $_POST['firstname']);
	$age = mysqli_real_escape_string($mysqli, $_POST['contactno']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);	
	$gender = mysqli_real_escape_string($mysqli, $_POST['gender']); 

	
	if(empty($firstname) || empty($contactno) || empty($email) || empty($gender)){	
			
		if(empty($firstname)) {
			echo "<font color='red'>firstname field is empty.</font><br/>";
		}
		
		if(empty($contactno)) {
			echo "<font color='red'>contactno field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}

		if(empty($gender)) {
			echo "<font color='red'>gender field is empty.</font><br/>";
		}		
	} else {	
		
		$result = mysqli_query($mysqli, "UPDATE users SET firstname='$firstname',contactno='$contactno',email='$email',gender='$gender' WHERE id=$uid");
		
		
		header("Location: business.php");
	}
}
?>
<?php
$id = $__POST['uid'];

$query=mysqli_query($conn,"SELECT * FROM business WHERE uid=$uid");

while($fetch = mysqli_fetch_array($query))
{
	$firstname = $_POST['firstname'];
	$contactno = $_POST['contactno'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="business.php">dashboard</a>
	<br/><br/>
	
	<form name="form" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>firstName</td>
				<td><input type="text" name="firstname" value="<?php echo $firstname;?>"></td>
			</tr>
			<tr> 
				<td>contactno</td>
				<td><input type="text" name="contactno" value="<?php echo $contactno;?>"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $email;?>"></td>
			</tr>
			<tr>
			<td>gender</td>
				<td><input type="text" name="gender" value="<?php echo $gender;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="uid" value=<?php echo $_GET['uid'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
