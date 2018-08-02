<!DOCTYPE html>
<html>
<head>
<script>
function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    var y = document.forms["myForm"]["lname"].value;
    if (x == "") {
         document.getElementById('fnm').innerHTML="First Name must be filled";
        return false;
    }
     if (y == "") {
         document.getElementById('lnm').innerHTML="Last ";
        return false;
    }
}
</script>
</head>
<body>

<form name="myForm" action="/action_page.php"
onsubmit="return validateForm()" method="post">

Firstname: <input type="text" name="fname" />


<p id="fnm" style="color:red; display:inline;"></p>

<br>
Lastname: <input type="text" name="lname" />
<p id="lnm" style="color:red; display:inline;"></p><br>

<input type="submit" value="Submit">
</form>

</body>
</html>
