

<html>
<head>
<title> Email-Signature-Creator</title>
<link rel="stylesheet" href="style.css" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed|Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript">
$("#copy").click(function() {
$("#div2").html($("#div1").html());
});
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/script.js"></script>
<script type="text/javascript">
$(document).ready(function (){
$("#copy1").click(function() {
var data = $("#div2").html();
$("#abc_data1").text(data);
});
$("#uploadimg").click(function() {
$('#message1').html('upload image');
});
});
</script>
<style>
.msg{
margin-top: 0;
}
#image_preview1{
margin-bottom:5px;
}
.uinfo{
width:410px;
}
#image_preview1{
display:none;
}
</style>
</head>
<body>
<div class="container">
<div class="row">
<!-- popup box modal starts here for upload image -->
<div class="modal fade demo-popup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel-1" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> <h3 class="modal-title">upload your image</h3>
</div>
<div class="modal-body">
<P>
<div class="main">
<h1 id="message1">upload image</h1><br/>
<div id="message" align="center"></div>
<form id="uploadimage" action="" method="post" enctype="multipart/form-data">
<div id="selectImage">
<div></div>
<label>Select Your Image</label><br/>
<input type="file" name="file" id="file"/>
</div>
</form>
</div>
</P>
</div>
</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
<!-- /.modal-->
<!-- popup box modal ends -->
<!-- popup box modal starts here to show html code -->
<div class="modal fade demo-popup1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel-1" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> <h3 class="modal-title">Copy HTML Signature</h3>
</div>
<div class="modal-body">
<P>
<div id="abc1">
<pre id="abc_data1"></pre>
</div>
</P>
</div>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal-->
<!-- popup box modal ends -->
</div> <!-- /.row -->
</div> <!-- /.container -->
<div id="wholecont">
<div id="main">
<h1><b>Create Easy Email Signatures</b></h1>
<div class="container">
<div class="row">
<div id="div1" align="center" class="col-md-5">

<h2>Your Information</h2>
<hr/>
<div class="row">
<form action="" style="border:none;">
<table class="uinfo">
<div class="row">
<tr>
<div class="col-md-6">
<td><div><b>Name</b></div><input type="text" name="username" onkeyUp="document.getElementById('Uname').innerHTML = this.value" />
</td>
</div>
<div class="col-md-6">
<td>
<div><b>Job Title</b></div><input id="jobtitle" type="text" name="jobtitle" onKeyup="addjobtitle()">
</td>
</div>
</tr>
</div>
<div class="row">
<tr>
<div class="col-md-6"><td>
<div><b>Email</b></div><input id="emailid" type="text" name="emailid" onKeyup="addemailid()"></td></div>
<div class="col-md-6"><td><div><b>Mobile No</b></div><input id="mobileno" type="text" name="mobileno" onKeyup="addmobileno()"></td></div>
</tr>
</div>
<div class="row">
<tr>
<div class="col-md-6">
<td><div><b>Company Name</b></div><input type="text" name="cname" onkeyUp="document.getElementById('companyname').innerHTML = this.value"></td></div>
<div class="col-md-6"><td><div><b>Website</b></div><input id="website" type="text" placeholder="http://www.example.com" name="website" onKeyup="addwebsite()"></td></div>
</tr>
</div>
<div class="row">
<tr>
<div class="col-md-12">
<td colspan="2">
<input type="button" id="uploadimg" class="" data-toggle="modal" data-target=".demo-popup" value="upload image">
</td>
</div>
</tr>
</div>
</table>
<table class="uinfo">
<div class="row">
<tr>
<td><div><b>Address</b></div>
<input type="text" class="inline" name="address" onkeyUp="document.getElementById('address1').innerHTML = this.value">
</td>
</tr>
</div>
<div class="row">
<tr>
<td><div><b>Address Line 2</b></div>
<input type="text" class="inline" name="addressline2" onkeyUp="document.getElementById('addressline2').innerHTML = this.value">
</td>
</tr>
</div>
<div class="row">
<tr>
<td>
<div><b>Facebook Profile Url</b></div>
<input class="inline" id="facebook" type="text" name="facebook" placeholder="https://www.facebook.com/profile.php?id=1000" onKeyup="addfacebook()">
</td>
</tr>
</div>
<div class="row">
<tr>
<td>
<div><b>Twitter Profile Url</b></div>
<input class="inline" id="twitter" type="text" name="twitter" placeholder="https://www.twitter.com/profile" onKeyup="addtwitter()">
</td>
</tr>
</div>
</table>
</form>
</div>
<input type="button" id="copy1" class="" data-toggle="modal" data-target=".demo-popup1" value="Create Signature">
</div>
<div id="div2" class="col-md-7">
<h2>Signature Demo</h2>
<hr/>
<div id="image_preview1">
<img id="previewing1" src="noimage.png" />
</div>
<p class="msg">
<span id="Uname">
</span><span id="jobtitle1"></span>
</p>
<p class="msg">
<a href="" id="emailid1"></a>
<span id="mobileno1"></span>
</p>
<br>
<p class="msg" id="companyname"></p>
<p class="msg" id="address1"></p>
<p class="msg" id="addressline2"></p>
<p class="msg">
<a class="msg" href="" id="website1">
</a>
</p>
<p class="msg">
<a id="fb" href="">
<img id="fbimg" width="16px" style="margin-bottom:2px; border:none; display:none;" height="16px" src="images/facebook.png" alt="Facebook">
</a>
<a id="tw" href="">
<img id="twimg" width="16px" style="margin-bottom:2px; border:none; display:none;" height="16px" src="images/twitter.png" alt="twitter">
</a>
</p>
</div>
</div>
</div>
</div>
</div>
</body>
</html>

