<?php
// Start the session
session_start();
?>
<?php
if (isset($_SESSION["otp"])){
 $success='<div class="alert alert-success" alighn="center" style="margin-left:80px; margin-right:80px;">An OTP was sent to your phone and email</div>';

// remove all session variables
unset($_SESSION["otp"]);

}
?>

<?php
$servername = "localhost";
$username = "usccredi_001";
$password = "An0therrichard3303";
$dbname = "usccredi_001";
$date = date('d-m-Y H:m:s');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
	
   if (isset($_POST['otpl'])){

   	$otpl = $_POST['otpl'];

$sql = "SELECT * FROM register WHERE username = '".$_SESSION["username"]."' AND d = '$otpl'";
$result = $conn->query($sql);
if ($result->num_rows > 0 ) {
$_SESSION["otp"] = $otpl;
	echo'<script>window.location = 

"../Dashboard/appzia"</script>';

}else{
$fail='<div class="alert alert-danger"  alighn="center" style="margin-left:80px; margin-right:80px;">Invalid Code</div>';

}

   }

   ?>

<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Login</title></title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Core Login Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->
    <!-- Index-Page-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
    <!-- //Custom-Stylesheet-Links -->
    <!--fonts -->
    <link href="//fonts.googleapis.com/css?family=Mukta+Mahee:200,300,400,500,600,700,800" rel="stylesheet">
    <!-- //fonts -->
    <!-- Font-Awesome-File -->
    <link rel="stylesheet" href="css/font-awesome.css" type="text/css" media="all">
    
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>

<body>
    <h1 class="title-agile text-center">Usc Credit Union</h1>
    		                               <?php 
if (isset($success)){
echo $success; 
}
if (isset($fail)){
echo $fail; 
}
?> 		
	
    <div class="content-w3ls">
        <div class="agileits-grid">
            <div class="content-top-agile">
                <h2>Put Code Below</h2>
            </div>
            <div class="content-bottom">
                <form action="" method="post">
                    <div class="field_w3ls">
                        <input name="sender_name" type="hidden" value="Usc Credits" required>
                       
                        <div class="field-group">
                            <input id="password-field" type="password" class="form-control" name="otpl" value="" placeholder="OTP">
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                    </div>
                    <div class="wthree-field">
                        <input id="saveForm" name="saveForm" type="submit" value="Login" />
                    </div>
                    <ul class="list-login">
                        
                        <li>
                       
                        </li>
                        <li class="clearfix"></li>
                    </ul>
                </form>
            </div>
            <!-- //content bottom -->
        </div>
    </div>
    <div class="copyright text-center">
        <p>© 2018 Core Login Form. All rights reserved | Design by
            <a href="http://w3layouts.com">W3layouts</a>
        </p>
    </div>
    <!--//copyright-->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- script for show password -->
    <script>
        $(".toggle-password").click(function () {

            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    </script>
    <!-- /script for show password -->

</body>
<!-- //Body -->

</html>