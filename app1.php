<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="/action_page.php">
  First name:<br>
  <input type="text" name="firstname" >
  <br>
  <script>
function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    if (x == "") {
        alert("First Name must be filled out");
        return false;
    }
}
</script
  Last name:<br>
  <input type="text" name="lastname" >
  <br><br>
  <input type="submit" value="Submit" >
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>
