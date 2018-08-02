<?php
include('config.php');
?>
<!DOCTYPE html>

<html lang="en">

<head>

 

   <meta charset="utf-8">

   <meta name="viewport" content="width=device-width, initial-scale=1">

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>

<body>

<div class="container">

  
  
  <table class="table">

    <thead>

      <tr>

        <th>Uid</th>

        <th>Name</th>

        <th>Email</th>

        <th>Phoneno</th>


      </tr>

    </thead>

    <tbody>


<?php
$query=mysqli_query($conn,"SELECT * FROM user");

while($fetch = mysqli_fetch_array($query))
{

    ?>
    <tr>
    <td> <?php echo $fetch['uid'];  ?></td>

    <td> <?php echo $fetch['name'];  ?></td>

    <td> <?php echo $fetch['emailid'];  ?></td>
    
    <td> <?php echo $fetch['phoneno'];  ?></td>
    <td> 

    <a href="data.php?uid=<?php echo $fetch['uid'];?>"/>
Edit</a>
    </td>
    <td>
    <a href="delete.php?uid=<?php echo $fetch['uid'];?>"/>
Delete</a>
    </td>
 
</tr>
   <?php } ?>


    </tbody>

  </table>

</div>

​</body>

</html>

​

