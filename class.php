<?php 
include('config.php');
$query=mysqli_query($conn,"SELECT * FROM user");
while($fetch = mysqli_fetch_array($query))
{
	
	$name1=$fetch["uid"];
	$name2=$fetch["name"];
	$name3=$fetch["emailid"];
	$name4=$fetch["phoneno"];
	
	echo "id " .$name1. "<br/>";  echo "Name " .$name2. "<br/>";  echo "Email " .$name3. "<br/>"; echo "Phoneno" .$name4. "<br/>"; 
}   
 ?>  

    <form action="action.php" method="post" type="post ">



            <td><legend>Log In</legend></label></td>

            <td><label>Uid: <input type="text" name="uid"></label></td>
            
            <label>Name: <input type="text" name="name"></label>
                      

            <label>Email: <input type="text" name="emailid"></label>


            <label>Phoneno: <input type="text" name="phoneno"></label>


            <input type="submit" value="Submit">

       </form>

