
<?php
include('config.php');

$uid=$_GET['uid'];
$query=mysqli_fetch_array(mysqli_query($conn,"select * from user where uid=$uid"));

?>

<form action="action1.php" method="post" type="post ">



            <td><legend>Log In</legend></label></td>


            

      <label>Name: <input type="text" value="<?php echo $query["name"] ?>" name="name" /></label>
            
            
         <input type="hidden" value="<?php echo $query["uid"] ?>" name="uid"/>

            <label>Email: <input type="text" value="<?php echo $query["emailid"] ?>" name="emailid" /></label>
                      

            <label>Phone_no: <input type="text" value="<?php echo $query["phoneno"] ?>" name="phoneno"></label>


           


            <input type="submit" value="Submit">

       </form>