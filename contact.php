<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from dixipixi.com/finsult/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Feb 2017 11:50:08 GMT -->
<head>
        <meta charset="utf-8">
		
		<!-- Title -->
		<title>Contact us</title>
		
		<!-- Meta Data -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Finsult is Responsive Finance Template.">
		<meta name="author" content="DixiPixi">
		
		<!-- Favicon -->
		<link rel="icon" href="images/favicon.ico">
		<link rel="apple-touch-icon" href="images/apple-touch-icon.html">
		<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.html">
		<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.html">
		
		<!-- Stylesheet -->
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/bootstrap-theme.css">
        <link rel="stylesheet" href="assets/css/font-awesome.css">
        <link rel="stylesheet" href="assets/css/simple-line-icons.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.css">
        <link rel="stylesheet" href="assets/css/owl.theme.css">
        <link rel="stylesheet" href="assets/css/animate.css">
		<link rel="stylesheet" href="assets/css/magnific-popup.css">
		
		<!-- Revolution slider -->
		<link href="assets/css/revolution/settings.css" rel="stylesheet" type="text/css">
		<link href="assets/css/revolution/layers.css" rel="stylesheet" type="text/css">
		<link href="assets/css/revolution/navigation.css" rel="stylesheet" type="text/css">
		
		<!-- Custom Stylesheet -->
        <link rel="stylesheet" href="assets/css/main.css">
		
		<!-- Responsive Stylesheet -->
        <link rel="stylesheet" href="assets/css/responsive.css">

		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Open+Sans%7cPlay' rel='stylesheet' type='text/css'>
		
		<!-- JavaScripts -->
        <script src="assets/js/modernizr-2.8.3.min.js"></script>
		
    </head>
    <body>
		<div class="container">
			<div class="topbar-section">
				<div class="row">
					<div class="col-md-8 col-xs-8">
						<div class="topbar-left">
							<div class="topbar-left-icon">
								<span class="icon-location-pin"></span>
							</div>
							<p>
								322 Jaintfam St, Brookfields 245 United States
							</p>
						</div>
					</div>
					<div class="col-md-4 col-xs-4">
						<div class="topbar-right">
						<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		 <?php 
if (isset($_POST['message'])){
       
       $name = $_POST['name'];
          $email = $_POST['emailm'];
             $phone = $_POST['phone'];
                $message = $_POST['message'];
                 $subject = $_POST['subject'];
                
                
                  
    //mail OTP to mail


$to = 'support@usccredits.com';

$headers = 'From: meettheghost  <ghost@itsolutions.com>' . PHP_EOL .
    'Reply-To: meettheghost <ghost@itsolutions.com>' . PHP_EOL .
    'X-Mailer: PHP/' . phpversion();
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$message = '<p><strong><div align=center><font color=#555bc6>A client used your site to contact you </div></font></strong><br> Greetings Bonnke,<br>Below is the clients details and message.<br><br>

<strong>
Name: '.$name.'<br>
Email: '.$email.'<br>
Phone: '.$phone.'<br>

and his/her message is:<br>

Message: '.$message.'<br>

<br><br></strong>


<br>
<br>
<font color="#8688a0" size=2></font>





</p>';


mail($to, $subject, $message, $headers);

$success='<div class="alert alert-success">Your message has been recieved and will be responded to shortly.</div>';
    
}
?>
	<?php include('header.php');?>
		<div class="sub-header">
			<div class="container">
				<div class="sub-header-inner">
					<div class="breadcrumb">
						<span>
							<a href="#">Home</a>
							<span class="divider">/</span> Contact
						</span>
					</div>
				</div>
			</div>
		</div><!-- Breadcrumb -->
		<div class="main-content">
			<div class="container">
				<div class="content-overlap contact-page-wrap">
					<div class="row">
						<div class="col-md-8">
							<div class="contact-form-area">
								<div class="section-title">
									<h2>Leave Message</h2>
								</div>
								<form   method="post" action="" class="form-common form-style-two">
									<input class="left-field" type="text" name="name" id="name" placeholder="Full Name*">
									<input type="email" name="emailm" id="email" placeholder="Email*">
									<input class="left-field" type="text" name="phone" id="phone" placeholder="Phone*">
									<input type="text" name="subject" id="subject" placeholder="Subject*">
									<textarea rows="6" id="message" name="message" cols="25" placeholder="Message*"></textarea>
									<button type="submit" class="btn-one">Submit</button>
								</form>
							</div>
						</div><!-- /.col-md-8 -->
						<div class="col-md-4">
							<div class="section-title">
								<h2>Contact Details</h2>
							</div>
							<div class="contact-details">
								<ul>
									<li>
										<div class="icon">
											<span class="icon-location-pin"></span>
										</div>
										<div class="text">
											<span>
												322 Jaintfam St, Brookfields
											</span>
											<span>
												NY 245 United States
											</span>
										</div>
									</li>
									<li>
										<div class="icon">
											<span class="icon-call-out"></span>
										</div>
										<div class="text">
											<span>
												+1 (301) 850-7836
											</span>
											<span>
											+1 (301) 850-7836
											</span>
										</div>
									</li>
									<li>
										<div class="icon">
											<span class="icon-envelope-open"></span>
										</div>
										<div class="text">
											<span>
												support@usccredits.com
											</span>
											<span>
												info@usccredits.com
											</span>
										</div>
									</li>
									<li>
										<div class="icon">
											<span class="icon-clock"></span>
										</div>
										<div class="text">
											<span>
												Mon - Sat 8.00 - 18.00.
											</span>
											<span>
												Sunday Closed
											</span>
										</div>
									</li>
								</ul>
							</div>
						</div><!-- /.col-md-4 -->
					</div><!-- /.row -->
				</div>
				<div class="map"></div>
			</div><!-- /.container -->
		</div>
		
	<?php include('footer.php');?>
			<div class="container">
				<div class="copyright">
					<p>&copy; <?php $year=date('Y'); echo"$year";?> usc credit union<a href="#"> Usc Credits</a></p>
				</div>
			</div>
		</footer>
		<!-- JavaScripts -->
        <script src="assets/js/jquery-1.12.4.min.js"></script>
        <script src="assets/js/bootstrap.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/jquery.countTo.js"></script>
        <script src="assets/js/jquery.mixitup.js"></script>
		<script src="assets/js/jquery.magnific-popup.min.js"></script>
		<script src="assets/js/jquery.waypoints.js"></script>
		<script src="assets/js/jquery.ajaxchimp.min.js"></script>
		
		<!-- Google Map -->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAN3rKU8l06qGwSkcBcS-K3aWZEDQ_ldic"></script>
		<script src="assets/js/gmap3.min.js"></script>
		
		<script type="text/javascript">
			"use strict";
			$('.map').gmap3({
				map:{
					options:{
						zoom: 17,
						center: [40.663663,-74.210190],
						mapTypeControl: true,
						mapTypeControlOptions: {
							style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
						},
						mapTypeId: "style1",
						mapTypeControlOptions: {
						mapTypeIds: [google.maps.MapTypeId.ROADMAP, "style1"]
						},
						navigationControl: true,
						scrollwheel: false,
						streetViewControl: true
					}
				},
				marker:{
					latLng: [40.663663,-74.210190],
					options: {animation:google.maps.Animation.BOUNCE, icon: 'images/misc/map-marker.png' }
				},
				styledmaptype:{
					id: "style1",
					options:{
						name: "Style 1"
					},
					styles: [
						{
							featureType: 'road.highway',
							stylers: [
							  {"color": "#ededed"},			      
							  {"elementType":"geometry"},
							]

						},{
							featureType: 'water',
							stylers: [
							 { visibility: "on" },
							 { color: "#ededed" }
							]
						},{
							featureType:"landscape",
							  stylers:[
								{"color":"#f7f7f7"}
							  ]
						},{
							featureType: "poi.park",
							elementType:"geometry",
							stylers: [
								{"color":"#efefef"}
							]
						},{
							featureType: "transit.line",
							 stylers: [
								{"color":"#ffffff"}
							 ]
						}
					]
				}
			});
		</script>
		<!-- REVOLUTION JS FILES -->
		<script src="assets/js/revolution/jquery.themepunch.tools.min.js"></script>
		<script src="assets/js/revolution/jquery.themepunch.revolution.js"></script>
		<script type="text/javascript" src="assets/js/revolution/extensions/revolution.extension.slideanims.min.js"></script>
		<script type="text/javascript" src="assets/js/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
		<script type="text/javascript" src="assets/js/revolution/extensions/revolution.extension.navigation.min.js"></script>
		<script type="text/javascript" src="assets/js/revolution/extensions/revolution.extension.video.min.js"></script>
		<script type="text/javascript" src="assets/js/revolution/extensions/revolution.extension.actions.min.js"></script>
		<script type="text/javascript" src="assets/js/revolution/extensions/revolution.extension.kenburn.min.js"></script>
		<script type="text/javascript" src="assets/js/revolution/extensions/revolution.extension.migration.min.js"></script>
		<script type="text/javascript" src="assets/js/revolution/extensions/revolution.extension.parallax.min.js"></script>
		<script type="text/javascript" src="assets/js/revolution/extensions/revolution.extension.carousel.min.js"></script>
		
		<script src="assets/js/custom.js"></script>

    </body>

<!-- Mirrored from dixipixi.com/finsult/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Feb 2017 11:50:09 GMT -->
</html>