<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Chase | Login</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta name="keywords" content="Access Subscribe Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- css files -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->

<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">
<!-- //web-fonts -->

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
	
   if (isset($_POST['username'])){
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM register WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);
if ($result->num_rows > 0 ) {
$_SESSION["username"] = $username;
$_SESSION["password"] = $password;
echo'<script>window.location = 

"../Dashboard/appzia"</script>';
}else{

$fail='<div class="alert alert-danger">Invalid Login</div>';



}
}
?>

<div class="center-container">

	<!--header-->
	<div class="header-w3l">
		<h1>Chase Online Banking</h1>
	</div>
	<!--//header-->
	
	<!--main-->
	<div class="main-content-agile">
			<h2>Login<i class="fa mail fa-envelope"></i></h2>
			<?php
			if (isset($fail)){
echo $fail; 
}
?>
			<h3></h3>
		<div class="sub-main-w3">	
			<form action="" method="post">
				<div class="field">
					<i class="fa fa-user"></i>
					<input placeholder="Full Name" name="username" type="text" required="">
				</div>
				<div class="field">
					<i class="fa fa-key"></i>
					<input  placeholder="Password" name="password" type="password" required="">
				</div>
				<p><i class="fa fa-lock"></i> Your information is safe with us</p>
				<input type="submit" value="Login">

			</form>

		</div>
		<div align="center">
			<a href=".."> Back to website.</a>
		</div>
	</div>

	<!--//main-->
	
	<!--footer-->
	<div class="footer">
		<p>&copy; 2018 Chase Savings. All rights reserved | Design by <a href="http://chase.com">Chase</a></p>
	</div>
	<!--//footer-->
	
</div>

</body>
</html>