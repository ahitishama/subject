

<style type="text/css">
  body {
    
    background-image: url("./b3.jpg");
    height: 100%; 
    background-position: center; if(form.password.value == form.username.value) {
        alert("Error: Password must be different from Username!");
        form.password1.focus();
        return false;
      }
    background-repeat: no-repeat;
    background-size: cover;
}
</style>


<script type="text/javascript">
function checkForm(form)
  {
    if(form.username.value == "") {
      alert("Error: Username cannot be blank!");
      form.username.focus();
      return false;
    }
    re = /^\w+$/;
    if(!re.test(form.username.value)) {
      alert("Error: Username must contain only letters, numbers and underscores!");
      form.username.focus();
      return false;
    }

    if(form.password.value != "" && form.password.value == form.password.value) {
      if(form.password.value.length < 6) {
        alert("Error: Password must contain at least six characters!");
        form.password.focus();
        return false;
      }
      if(form.password.value == form.username.value) {
        alert("Error: Password must be different from Username!");
        form.password.focus();
        return false;
      }
      re = /[0-9]/;
      if(!re.test(form.password.value)) {
        alert("Error: password must contain at least one number (0-9)!");
        form.password.focus();
        return false;
      }
      re = /[a-z]/;
      if(!re.test(form.password.value)) {
        alert("Error: password must contain at least one lowercase letter (a-z)!");
        form.password.focus();
        return false;
      }
      re = /[A-Z]/;
      if(!re.test(form.password.value)) {
        alert("Error: password must contain at least one uppercase letter (A-Z)!");
        form.password.focus();
        return false;
      }
    } else {
      alert("Error: Please check that you've entered and confirmed your password!");
      form.password.focus();
      return false;
    }

    alert("You entered a valid password: " + form.password.value);
    return true;
  }

</script>

<form ...  action="./delete.php"  onsubmit= "return checkForm(this) onclick="pay() cls();">
<body>

<center><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
 <label class="control-label" for="">Username</label>
  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
          <input type="text" class="form-control" placeholder="Username " name="username" ><br><br>


 <label class="control-label" for="">E-mail</label>
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp  &nbsp &nbsp  &nbsp
          <input type="text" class="form-control" placeholder="Email" name="email" ><br><br>


 <label class="control-label" for="">Password</label>
 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp
          <input type="text" class="form-control" placeholder="Password" name="password" ><br><br>


<label class="control-label" for="">Confirm Password</label>
 &nbsp
          <input type="text" class="form-control" placeholder="Password" name="password" ><br><br>

<p><input type="submit"></p>


</center>
</body>
</form>
</body>
<?php 
include('config.php');
if(isset($_POST["submit"])){ 
  
if(!empty($_POST['name']) &&  !empty($_POST['email']) &&!empty($_POST['password'])) {  
    $user=$_POST['name'];  
    $email=$_POST['email'];  
   $password=$_POST['password'];  
    $conn=mysql_connect('localhost','root','') or die(mysql_error());  
    mysql_select_db('Registration') or die("cannot select DB");  
  
    $query=mysql_query("insert into admin_user(name,email,password) values('$name','$email','$password')"); 
    $numrows=mysql_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysql_fetch_assoc($query))  
    { 
        $dbusername=$row['name'];  
    $dbusername=$row['email'];  
    $dbpassword=$row['password'];  
    }  
  
    if($user == $dbname && $Password == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_user']=$user;  
  
  
    header("Location: dashboard.php");  
    }  
    } 
    else 
    {  
    echo "Invalid username or email or password!";  
    }  
  
} else {  

 echo  " <br> <br>All fields are required!";
}  
}  
?>  

