<?php
// Start the session
session_start();
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>

<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="rent appartment, rent 2 bedroom flat, rent 2 bedroom flat portharcourt, rent 2 bedroom flat lagos, 
rent 2 bedroom flat warri, rent 2 bedroom flat Oweri, rent 2 bedroom flat Abuja, rent 2 bedroom flat Calabar, rent 2 bedroom flat benin, rent self con portharcourt,buy 

land, buy house, rent shop" />
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 

</script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/popup-box.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/mislider.css" rel="stylesheet" type="text/css" />
<link href="css/mislider-custom.css" rel="stylesheet" type="text/css" />

<link href="css/style.css" type="text/css" rel="stylesheet" media="all"> 
<link rel="stylesheet" href="css/main-gallery.css" type="text/css" media="screen" />  <!-- flexslider-CSS --> 
<link href="css/font-awesome.css" rel="stylesheet">		<!-- font-awesome icons -->
<!-- //Custom Theme files --> 

<!-- web-fonts -->  
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300i,400,400i,600,600i,700" rel="stylesheet">
<!-- //web-fonts -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="css/bootstrap-theme.min.css">

<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>

<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">

    $(document).ready(function(){

        $("#myModal").modal('show');
$('#myModal').modal({
    backdrop: 'static',
    keyboard: false  // to prevent closing with Esc button (if you want this too)
})

    });

</script>
<script type="text/javascript">
$('#myModal').modal({
    backdrop: 'static',
    keyboard: false  // to prevent closing with Esc button (if you want this too)
})
</script>
</head>
<?php
$servername = "localhost";
$username = "capitalc_001";
$password = "An0therrichard3303";
$dbname = "capitalc_001";
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

"Dashboard/appzia"</script>';

}else{
$fail='<div class="alert alert-danger">Invalid Code</div>';

}

   }

   ?>




<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">  

<div id="myModal" class="modal fade" data-keyboard="false" data-backdrop="static">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                

              <div align=center>  <h4 class="modal-title"><br>Welcome to Bank Admin. <br><font size=2 color=#040359>Manage all bank account below.</font>.<br>

              								  <?php 
if (isset($success)){
echo $success; 
}
if (isset($fail)){
echo $fail; 
}
?>  <style>
                        .blinking {
    animation: mymove 2s infinite alternate;
}

@-webkit-keyframes mymove {
    from {opacity:0;}
    to {opacity: 1;}
}
                        
                    </style>

                    <br>

                    <style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>


<table>
  <tr>
    <th>Name</th>
    <th>Acc.number</th>
    <th>Status</th>
    <th>Action</th>
<?php
$servername = "localhost";
$username = "capitalc_001";
$password = "An0therrichard3303";
$dbname = "capitalc_001";
$date = date('d-m-Y H:m:s');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
	
   //performing CEO functions


  if (isset($_POST['action'])){
$user = $_POST['acn'];
$action = $_POST['action'];

$sql = "UPDATE register SET account_status = '$action' WHERE username = '$user'";

if ($conn->query($sql) === TRUE) {
$success='<div class="alert alert-success">Operation Successful.</div>';
}else{
	$fail='<div class="alert alert-danger">Operation Failed.</div>';
}

}


$sql = "SELECT * FROM register WHERE address ='1'";
$result = $conn->query($sql);
if ($result->num_rows > 0 ) {
$sql = "SELECT * FROM register WHERE address ='1'";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
          $name = $row['name'];
          $accountnumber = $row['account_number'];
          $accounttype = $row['account_type'];
          $accountlimit = $row['account_limit'];
          $accountbalance = $row['account_balance'];
          $address = $row['address'];
          $phone = $row['phone'];
          $transferstatus = $row['transaction_status'];
            $accountstatus = $row['account_status'];
             $username = $row['username'];
            $dp = $row['e'];
if($accountstatus === "3"){
  echo'


  </tr>
  <tr>
    <td>'.$name.'</td>
    <td>'.$accountnumber.'</td>
    <td>Pending</td>
    <td><form action="" method="post">
    <input name="action" type=hidden value="1">
    <input name="acn" type=hidden value="'.$username.'">
<button type="submit" class="btn btn-warning">Authorize</button>
    </form></td>
  </tr>
 


  ';
  
}

if($accountstatus === "1"){
  echo'


  </tr>
  <tr>
    <td>'.$name.'</td>
    <td>'.$accountnumber.'</td>
    <td>Active</td>
    <td><form action="" method="post">
    <input name="action" type=hidden value="0">
    <input name="acn" type=hidden value="'.$username.'">
<button type="submit" class="btn btn-danger">Suspend</button>
    </form></td>
  </tr>
 


  ';
  
}


if($accountstatus === "0"){
  echo'


  </tr>
  <tr>
    <td>'.$name.'</td>
    <td>'.$accountnumber.'</td>
    <td>Suspended</td>
    <td><form action="" method="post">
    <input name="action" type=hidden value="1">
    <input name="acn" type=hidden value="'.$username.'">
<button type="submit" class="btn btn-success">Activate</button>
    </form></td>
  </tr>
 


  ';
  
}

}



   }else{
$fail='<div class="alert alert-danger">You Have no bank accounts.</div>';

}



   ?>

 </table>
 								  <?php 
if (isset($success)){
echo $success; 
}
if (isset($fail)){
echo $fail; 
}
?>




<div align=center> <font color=green><strong>MANAGE WIRE TRANSFER PROGRESS BELOW</strong> </font> </div>
<table>
  <tr>
    <th>Reciever</th>
    <th>Country</th>
    <th>Bank</th>
    <th>Action</th>
<?php
$servername = "localhost";
$username = "capitalc_001";
$password = "An0therrichard3303";
$dbname = "capitalc_001";
$date = date('d-m-Y H:m:s');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
	
   //performing CEO functions


  if (isset($_POST['actionw'])){
$user = $_POST['acn'];
$action = $_POST['actionw'];

if($action == "3"){
    
    
    $sql = "SELECT * FROM wire WHERE sender = '$user'";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
          $senderu = $row['sender'];
          $country = $row['country'];
          $bank = $row['bank'];
          $amountu = $row['amount'];
          $status = $row['status'];
          
}

$sql = "UPDATE wire SET status = '$action' WHERE sender = '$user'";

if ($conn->query($sql) === TRUE) {
    
        $sql = "SELECT * FROM register WHERE username = '$user'";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
          $accountbalance = $row['account_balance'];
          
          
}

$updatebalance = $accountbalance-$amountu;


$sql = "UPDATE register SET account_balance = '$updatebalance' WHERE username = '$user'";

if ($conn->query($sql) === TRUE) {
    
    
}

    
}


    
}

$sql = "UPDATE wire SET status = '$action' WHERE sender = '$user'";

if ($conn->query($sql) === TRUE) {
$success='<div class="alert alert-success">Operation Successful.</div>';
}else{
	$fail='<div class="alert alert-danger">Operation Failed.</div>';
}

}


$sql = "SELECT * FROM wire WHERE e='1'";
$result = $conn->query($sql);
if ($result->num_rows > 0 ) {
$sql = "SELECT * FROM wire WHERE e='1'";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
          $sender = $row['sender'];
          $country = $row['country'];
          $bank = $row['bank'];
          $amount = $row['amount'];
          $accountbalance = $row['account_balance'];
          $status = $row['status'];
         
if($status === "0"){
  echo'


  </tr>
  <tr>
    <td>'.$sender.'</td>
    <td>'.$country.'</td>
    <td>'.$bank.'</td>
    <td><form action="" method="post">
    <input name="actionw" type=hidden value="1">
    <input name="acn" type=hidden value="'.$sender.'">
<button type="submit" class="btn btn-success">to 50%</button>
    </form></td>
  </tr>
 


  ';
  
}

if($status === "1"){
   echo'


  </tr>
  <tr>
    <td>'.$sender.'</td>
    <td>'.$country.'</td>
    <td>'.$bank.'</td>
    <td><form action="" method="post">
    <input name="actionw" type=hidden value="2">
    <input name="acn" type=hidden value="'.$sender.'">
<button type="submit" class="btn btn-success">to 80%</button>
    </form></td>
  </tr>
 


  ';
  
}


if($status === "2"){
  echo'


  </tr>
  <tr>
    <td>'.$sender.'</td>
    <td>'.$country.'</td>
    <td>'.$bank.'</td>
    <td><form action="" method="post">
    <input name="actionw" type=hidden value="3">
    <input name="acn" type=hidden value="'.$sender.'">
<button type="submit" class="btn btn-danger">to 100%</button>
    </form></td>
  </tr>
 


  ';
}

}

if($status === "3"){
  echo'


  </tr>
  <tr>
    <td>'.$sender.'</td>
    <td>'.$country.'</td>
    <td>'.$bank.'</td>
    <td>Complete
    </form></td>
  </tr>
 


  ';
  
}



   }else{
$fail='<div class="alert alert-danger">You Have no bank accounts.</div>';

}



   ?>

 </table>

              								  <?php 
if (isset($success)){
echo $success; 
}
if (isset($fail)){
echo $fail; 
}
?>
                   
                    </div>

            </div>

            <div class="modal-body">

                
<!-- search-jQuery -->
<!-- pop-up-box -->
			<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
			<!--//pop-up-box -->
			<script>
				$(document).ready(function() {
					$('.popup-with-zoom-anim').magnificPopup({
						type: 'inline',
						fixedContentPos: false,
						fixedBgPos: true,
						overflowY: 'auto',
						closeBtnInside: true,
						preloader: false,
						midClick: true,
						removalDelay: 300,
						mainClass: 'my-mfp-zoom-in'
					});														
				});
			</script>

		<!-- Map-JavaScript -->
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>        
			<script type="text/javascript">
				google.maps.event.addDomListener(window, 'load', init);
				function init() {
					var mapOptions = {
						zoom: 11,
						center: new google.maps.LatLng(40.6700, -73.9400),
						styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#000000"},

{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},

{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":

[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},

{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":20}]},

{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":

[{"color":"#000000"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":29},

{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},

{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":

[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
					};
					var mapElement = document.getElementById('map');
					var map = new google.maps.Map(mapElement, mapOptions);
					var marker = new google.maps.Marker({
						position: new google.maps.LatLng(40.6700, -73.9400),
						map: map,
					});
				}
			</script>
			<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
		<script>
			$('.counter').countUp();
		</script>
<!-- //stats -->

	<!-- //Map-JavaScript -->
		<script src="js/mislider.js" type="text/javascript"></script>
		<script type="text/javascript">
			jQuery(function ($) {
				var slider = $('.mis-stage').miSlider({
					//  The height of the stage in px. Options: false or positive integer. false = height is calculated using maximum slide 

heights. Default: false
					stageHeight: 320,
					//  Number of slides visible at one time. Options: false or positive integer. false = Fit as many as possible.  Default: 1
					slidesOnStage: false,
					//  The location of the current slide on the stage. Options: 'left', 'right', 'center'. Defualt: 'left'
					slidePosition: 'center',
					//  The slide to start on. Options: 'beg', 'mid', 'end' or slide number starting at 1 - '1','2','3', etc. Defualt: 'beg'
					slideStart: 'mid',
					//  The relative percentage scaling factor of the current slide - other slides are scaled down. Options: positive number 100 or 

higher. 100 = No scaling. Defualt: 100
					slideScaling: 150,
					//  The vertical offset of the slide center as a percentage of slide height. Options:  positive or negative number. Neg value = 

up. Pos value = down. 0 = No offset. Default: 0
					offsetV: -5,
					//  Center slide contents vertically - Boolean. Default: false
					centerV: true,
					//  Opacity of the prev and next button navigation when not transitioning. Options: Number between 0 and 1. 0 (transparent) - 1 

(opaque). Default: .5
					navButtonsOpacity: 1,
				});
			});
		</script>

	<script type="text/javascript">
						$(window).load(function() {
							$("#flexiselDemo1").flexisel({
								visibleItems:3,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 3000,    		
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
						    	responsiveBreakpoints: { 
						    		portrait: { 
						    			changePoint:480,
						    			visibleItems: 1
						    		}, 
						    		landscape: { 
						    			changePoint:640,
						    			visibleItems: 2
						    		},
						    		tablet: { 
						    			changePoint:768,
						    			visibleItems: 2
						    		}
						    	}
						    });
						    
						});
			</script>
<script type="text/javascript" src="js/jquery.flexisel.js"></script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
	
</body>
</html>