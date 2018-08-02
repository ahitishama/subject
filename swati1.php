<!DOCTYPE html>
<html>
<head>
<script>
function validateForm() {
    var x = document.forms["myForm"]["fname"]["lname"].value;
    var y = document.forms["myForm"]["lname"].value;
    if (x == "") {
        alert("First Name must be filled");
        return false;
    }
     if (y == "") {
        alert("Last Name must be filled");
        return false;
    }
}
</script>
</head>
<body>

<form name="myForm" action="/action_page.php"
onsubmit="return validateForm()" method="post">
Firstname: <input type="text" name="fname"><br>
Lastname: <input type="text" name="lname"><br>

<input type="submit" value="Submit">
</form>

</body>
</html>
