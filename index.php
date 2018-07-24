<?php
// Start the session
session_start();
?>
<?php

if ($_SERVER['HTTP_HOST'] == "usccredits.com")
{
  $url = "https://www." . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  header("Location: $url");
} 

if ($_SERVER['HTTP_HOST'] == "http://usccredits.com/")
{
  $url = "https://www.usccredits.com";
  header("Location: $url");
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
 if (isset($_SESSION["success"])){
$success='<div class="alert alert-success">Succesful, check your mail box or Phone for registeration details. check junk/spam if not found in inbox.</div>';

}

 if (isset($_SESSION["fail"])){
 $fail='<div class="alert alert-danger">Registeration Failed...Try again</div>';

}
 if (isset($_SESSION["failadmin"])){
 $fail='<div class="alert alert-danger">Invalid login</div>';

}
 if (isset($_SESSION["faillogin"])){
$fail='<div class="alert alert-danger">Invalid login.</div>';

}


// remove all session variables
session_unset();

// destroy the session
session_destroy(); 
	
 
?>	


<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from dixipixi.com/finsult/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Feb 2017 11:40:22 GMT -->
<head>
        <meta charset="utf-8">
		
		<!-- Title -->
		<title>Usc Credit finance and loans</title>
		
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
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		
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
		<!-- Topbar Start -->
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
		<!-- Topbar End -->
		<!-- Header Start -->
	<header>
			<div class="container">
				<div class="logo-area">
					<div class="row">
						<div class="col-xs-4">
							<div class="logo-left-content">
								<a href="">
									<img src="images/logo.png" alt="img" class="img-responsive">
								</a>
							</div>
						</div>
						<div class="col-xs-8">
							<div class="logo-right-content">
								<ul>
									<li>
										<span class="icon-call-out"></span>
										<div class="contact-info">
											<h5>Free Call</h5>
											<h6>+1 (301) 850-7836</h6>
										</div>
									</li>
									<li>
										<span class="icon-envelope-open"></span>
										<div class="contact-info">
											<h5>Mail Us</h5>
											<h6>support@usccredit.com</h6>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="navbar-default">
				<!-- NAVIGATION -->
				<nav class="navbar navbar-home">
					<div class="container">
						<div class="navbar-inner">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#my-navbar-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<!-- TEMPLATE LOGO -->
								<div class="navbar-brand">
									<a href=""><img src="images/logo-2.png" alt="img" class="img-responsive"></a>
								</div>
							</div>
							<div class="collapse navbar-collapse pull-left" id="my-navbar-collapse">
								<ul class="nav navbar-nav">
									<li><a href="index.php">HOME</a></li>
									<li><a href="overview.php">ABOUT US</a></li>
									<li class="has-sub-menu">
										<a href="#">SERVICES</a>
										<ul class="sub-menu">
											<li><a href="service-one.php">Banking</a></li>
											
										
										</ul>
									</li>
									<li class="has-sub-menu">
										<a href="#">ONLINE BANKING</a>
										<ul class="sub-menu">
											<li><a href="login">Login</a></li>
											<li><a href="register">Register</a></li>
										</ul>
									</li>
								
										
									<li><a href="contact.php">CONTACT</a></li>
								</ul>
							</div>
							<div class="pull-right navbar-additional">
								<div class="social-icon">
									<ul>
										<li><a href="#" class="fa fa-facebook"></a></li>
										<li><a href="#" class="fa fa-twitter"></a></li>
										<li><a href="#" class="fa fa-google-plus"></a></li>
										<li><a href="#" class="fa fa-youtube-play"></a></li>
										
									</ul>
								</div>
								<div class="mini-cart-search">
									<div class="collapse-cart">
										<i class="fa fa-cart-arrow-down"></i>
									</div>
									<div class="collapse-search">
										<i class="search fa fa-search search-btn"></i>
										<div class="search-open">
											<form action="#" method="get">
												<div class="input-group animated fadeInDown">
													<input type="text" class="form-control" placeholder="Search">
													<span class="input-group-btn">
														<button class="btn-u" type="submit"><i class="fa fa-search"></i></button>
													</span>
												</div>
											</form>
										</div>    
									</div>
								</div>
							</div>
						</div>
					</div>
				</nav>
			</div>
		</header>
		

		
		                               <?php 
if (isset($success)){
echo $success; 
}
if (isset($fail)){
echo $fail; 
}
?> 		
		
		
		
		
		<!-- Header End -->
		<!-- ========== Slider start ========== -->
		<div class="rev_slider_wrapper slider-common slider-style-two">	
			<div class=" ">
				<!-- START REVOLUTION SLIDER 5.0 auto mode -->
				<div id="rev_slider_1" class="rev_slider"  data-version="5.0">
					<ul>
						<!-- SLIDE-1  -->
						<li data-transition="fade">
							<!-- MAIN IMAGE -->
							<img src="images/slider/1.jpg"  alt=""  width="1920" height="710" data-bgposition="80% center">
							<!-- LAYER NR. 1 -->
							<div class="tp-caption NotGeneric-Title slider-sub-title tp-resizeme" 
								data-x="center" data-hoffset="['190','50','0','0']" 
								data-y="center" data-voffset="['-120','-120','-120','-120']" 
								data-width="['auto','auto','360','360']"
								data-height="['auto','auto','auto','auto']"
								data-fontsize="['36','36','32','32']"
								data-lineheight="['48','48','48','48']"
								data-whitespace="['nowrap','nowrap','nowrap','normal']"
								data-transform_idle="o:1;"
					 
								data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" 
								data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
								data-start="1000" 
								data-splitin="none" 
								data-splitout="none" 
								data-responsive_offset="on" 
								
								style="z-index: 10; white-space: nowrap;">Make the best choice.
							</div>
							<!-- LAYER NR. 2 -->
							<div class="tp-caption NotGeneric-Title slider-title tp-resizeme" 
								data-x="['center','center','center','center']" data-hoffset="['300','160','0','0']" 
								data-y="center" data-voffset="['-75','-75','-75','-75']" 
								data-width="['auto','auto','360','360']"
								data-height="['auto','auto','auto','auto']"
								data-fontsize="['48','48','32','32']"
								data-lineheight="['55','55','40','40']"
								data-whitespace="['nowrap','nowrap','nowrap','normal']"
								data-transform_idle="o:1;"
					 
								data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" 
								data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
								data-start="1500" 
								data-splitin="none" 
								data-splitout="none" 
								data-responsive_offset="on" 
								
								style="z-index: 10; white-space: nowrap;">Choose us.
							</div>
							<!-- LAYER NR. 3 -->
							<div class="tp-caption NotGeneric-SubTitle slider-content-text tp-resizeme" 
								data-x="center" data-hoffset="['345','205','0','0']" 
								data-y="center" data-voffset="['20','20','20','20']" 
								data-width="['522','522','320','300']"
								
								data-height="['auto','auto','auto','auto']"
								data-fontsize="['18','18','16','16']"
								data-lineheight="['30','30','30','30']"
								data-transform_idle="o:1;"
					 
								data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" 
								data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
								data-start="1800" 
								data-splitin="none" 
								data-splitout="none" 
								data-whitespace="['nowrap','nowrap','normal','normal']"
								data-responsive_offset="on" 
								style="z-index: 8; letter-spacing: 0;">Our customers<br> are our only priority.
							</div>
							<!-- LAYER NR. 4 -->
							<div class="tp-caption slider-btn tp-resizeme" 
								data-x="center" data-hoffset="['160','20','0','0']" 
								data-y="center" data-voffset="['110','110','110','110']" 
								data-width="['auto','auto','360','360']"
								data-height="['auto','auto','auto','auto']"
								data-fontsize="['12','12','12','12']"
								data-lineheight="['30','30','30','30']"
								data-whitespace="['nowrap','nowrap','nowrap','normal']"
								data-transform_idle="o:1;"
					 
								data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" 
								data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
								data-start="2000" 
								data-splitin="none" 
								data-splitout="none" 
								data-responsive_offset="on" 
								
								style="z-index: 10; white-space: nowrap;"><a href="contact.php" class="btn-one">Contact Us</a>
							</div>
						</li>
						<!-- SLIDE-2  -->
						<li data-transition="fade">
							<!-- MAIN IMAGE -->
							<img src="images/slider/2.jpg"  alt=""  width="1920" height="710" data-bgposition="80% center">
							<!-- LAYER NR. 1 -->
							<div class="tp-caption NotGeneric-Title slider-sub-title tp-resizeme" 
								data-x="center" data-hoffset="['-390','-390','0','0']" 
								data-y="center" data-voffset="['-120','-120','-120','-120']" 
								data-width="['auto','auto','360','360']"
								data-height="['auto','auto','auto','auto']"
								data-fontsize="['36','36','32','32']"
								data-lineheight="['48','48','48','48']"
								data-whitespace="['nowrap','nowrap','nowrap','normal']"
								data-transform_idle="o:1;"
					 
								data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" 
								data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
								data-start="1000" 
								data-splitin="none" 
								data-splitout="none" 
								data-responsive_offset="on" 
								
								style="z-index: 10; white-space: nowrap;">Let’s Start
							</div>
							<!-- LAYER NR. 2 -->
							<div class="tp-caption NotGeneric-Title slider-title tp-resizeme" 
								data-x="['center','center','center','center']" data-hoffset="['-265','-265','0','0']" 
								data-y="center" data-voffset="['-75','-75','-75','-75']" 
								data-width="['auto','auto','360','360']"
								data-height="['auto','auto','auto','auto']"
								data-fontsize="['48','48','32','32']"
								data-lineheight="['55','55','35','35']"
								data-whitespace="['nowrap','nowrap','nowrap','normal']"
								data-transform_idle="o:1;"
					 
								data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" 
								data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
								data-start="1500" 
								data-splitin="none" 
								data-splitout="none" 
								data-responsive_offset="on" 
								
								style="z-index: 10; white-space: nowrap;">Future Finance Plan
							</div>
							<!-- LAYER NR. 3 -->
							<div class="tp-caption NotGeneric-SubTitle slider-content-text tp-resizeme" 
								data-x="center" data-hoffset="['-220','-220','0','0']" 
								data-y="center" data-voffset="['10','20','20','20']" 
								data-width="['522','522','320','300']"
								
								data-height="['auto','auto','auto','auto']"
								data-fontsize="['18','18','16','16']"
								data-lineheight="['30','30','30','30']"
								data-transform_idle="o:1;"
					 
								data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" 
								data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
								data-start="1800" 
								data-splitin="none" 
								data-splitout="none" 
								data-whitespace="['nowrap','nowrap','normal','normal']"
								data-responsive_offset="on" 
								style="z-index: 8; letter-spacing: 0;">We have helped thousands achieve their dreams <br> we can help you today
							</div>
							<!-- LAYER NR. 4 -->
							<div class="tp-caption slider-btn tp-resizeme" 
								data-x="center" data-hoffset="['-400','-400','0','0']" 
								data-y="center" data-voffset="['95','95','95','95']" 
								data-width="['auto','auto','360','360']"
								data-height="['auto','auto','auto','auto']"
								data-fontsize="['12','12','12','12']"
								data-lineheight="['30','30','30','30']"
								data-whitespace="['nowrap','nowrap','nowrap','normal']"
								data-transform_idle="o:1;"
					 
								data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" 
								data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
								data-start="2000" 
								data-splitin="none" 
								data-splitout="none" 
								data-responsive_offset="on" 
								
								style="z-index: 10; white-space: nowrap;"><a href="contact.php" class="btn-one">Contact Us</a>
							</div>
						</li>
						<!-- SLIDE-3  -->
						<li data-transition="fade">
							<!-- MAIN IMAGE -->
							<img src="images/slider/3.jpg"  alt=""  width="1920" height="710" data-bgposition="80% center">
							<!-- LAYER NR. 1 -->
							<div class="tp-caption NotGeneric-Title slider-sub-title tp-resizeme" 
								data-x="center" data-hoffset="['190','50','0','0']" 
								data-y="center" data-voffset="['-120','-120','-120','-120']" 
								data-width="['auto','auto','360','360']"
								data-height="['auto','auto','auto','auto']"
								data-fontsize="['36','36','32','32']"
								data-lineheight="['48','48','48','48']"
								data-whitespace="['nowrap','nowrap','nowrap','normal']"
								data-transform_idle="o:1;"
					 
								data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" 
								data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
								data-start="1000" 
								data-splitin="none" 
								data-splitout="none" 
								data-responsive_offset="on" 
								
								style="z-index: 10; white-space: nowrap;">Take Support
							</div>
							<!-- LAYER NR. 2 -->
							<div class="tp-caption NotGeneric-Title slider-title tp-resizeme" 
								data-x="['center','center','center','center']" data-hoffset="['300','160','0','0']" 
								data-y="center" data-voffset="['-75','-75','-75','-75']" 
								data-width="['auto','auto','360','360']"
								data-height="['auto','auto','auto','auto']"
								data-fontsize="['48','48','32','32']"
								data-lineheight="['55','55','40','40']"
								data-whitespace="['nowrap','nowrap','nowrap','normal']"
								data-transform_idle="o:1;"
					 
								data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" 
								data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
								data-start="1500" 
								data-splitin="none" 
								data-splitout="none" 
								data-responsive_offset="on" 
								
								style="z-index: 10; white-space: nowrap;">From Expert Advisor
							</div>
							<!-- LAYER NR. 3 -->
							<div class="tp-caption NotGeneric-SubTitle slider-content-text tp-resizeme" 
								data-x="center" data-hoffset="['345','205','0','0']" 
								data-y="center" data-voffset="['20','20','20','20']" 
								data-width="['522','522','320','300']"
								
								data-height="['auto','auto','auto','auto']"
								data-fontsize="['18','18','16','16']"
								data-lineheight="['30','30','30','30']"
								data-transform_idle="o:1;"
					 
								data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" 
								data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
								data-start="1800" 
								data-splitin="none" 
								data-splitout="none" 
								data-whitespace="['nowrap','nowrap','normal','normal']"
								data-responsive_offset="on" 
								style="z-index: 8; letter-spacing: 0;">We asign personal account officer<br> to guide you in running your account.
							</div>
							<!-- LAYER NR. 4 -->
							<div class="tp-caption slider-btn tp-resizeme" 
								data-x="center" data-hoffset="['160','20','0','0']" 
								data-y="center" data-voffset="['110','110','110','110']" 
								data-width="['auto','auto','360','360']"
								data-height="['auto','auto','auto','auto']"
								data-fontsize="['12','12','12','12']"
								data-lineheight="['30','30','30','30']"
								data-whitespace="['nowrap','nowrap','nowrap','normal']"
								data-transform_idle="o:1;"
					 
								data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" 
								data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
								data-start="2000" 
								data-splitin="none" 
								data-splitout="none" 
								data-responsive_offset="on" 
								
								style="z-index: 10; white-space: nowrap;"><a href="contact.php" class="btn-one">Contact Us</a>
							</div>
						</li>
					</ul>				
				</div><!-- END REVOLUTION SLIDER -->
			</div>
		</div><!-- END REVOLUTION SLIDER WRAPPER -->
		<!-- ========== slider end ========== -->
		<div class="main-content">
			<div class="container">
				<div class="overlap-two">
					<section class="about-section">
						<div class="row">
							<div class="col-md-6">
								<div class="about-inner">
									<div class="section-title">
										<h2>About Us</h2>
									</div>
									<p>
										We are one of the leading finacial institutions in the world with a very unique way of prioratizing customer and client needs. we are the no 1 bank that can be accessed any where in the world and anytime.
									</p>
									<a href="#"><h6>About More <i class="fa fa-caret-right" aria-hidden="true"></i></h6></a>
								</div>
							</div>
							<div class="col-md-6">
								<div class="our-function-inner">
									<div class="function">
										<span class="icon-chart"></span>
										<div class="function-content">
											<h4>
												Business Analysis
											</h4>
											<p>
												do you have a business but no fund to start up? we analyse businesses and give out loans.
											</p>
										</div>
									</div>
									<div class="function">
										<span class="icon-disc"></span>
										<div class="function-content">
											<h4>
												Best Consultancy
											</h4>
											<p>
												we offer financial consultation to clients and help them plan dreams 
											</p>
										</div>
									</div>
									<div class="function">
										<span class="icon-ghost"></span>
										<div class="function-content last">
											<h4>
												High interest rate.
											</h4>
											<p>
											We offer an awesome interest rate for all our fixed deposit account.
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section class="counter-section">
						<div class="counter-inner">
							<div class="counter-heading">
								<h2>From <span>93</span> years, We Achived</h2>
							</div>
							<div class="row">
								<div class="inline-block">
									<div class="col-md-3 ">
										<div class="fun-factor alt">
											<div class="icon">
												<span class="icon-check"></span>
											</div>
											<div class="fun-info">
												<h1 class="timer" data-from="0" data-to="726" data-speed="1000"> </h1>
												<span>Projects Completed</span>
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="fun-factor alt">
											<div class="icon">
												<span class="icon-user-follow"></span>
											</div>
											<div class="fun-info">
												<h1 class="timer" data-from="0" data-to="79" data-speed="1000"> </h1>
												<span>Satisfied Customers</span>
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="fun-factor alt">
											<div class="icon">
												<span class="icon-trophy"></span>
											</div>
											<div class="fun-info">
												<h1 class="timer" data-from="0" data-to="87" data-speed="1000"> </h1>
												<span>Awwards Winning </span>
											</div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="fun-factor alt">
											<div class="icon">
												<span class="icon-people"></span>
											</div>
											<div class="fun-info">
												<h1 class="timer" data-from="0" data-to="17" data-speed="1000"> </h1>
												<span>Experts Advisor</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
			<section class="service-section">
				<div class="container">
					<div class="service-inner">
						<div class="row">
							<div class="service-heading">
								<div class="col-md-6">
									<div class="section-title">
										<h2>Best Services</h2>
									</div>
								</div>
								<div class="col-md-6">
									<div class="page-link">
										<a href="#">All Services <i class="fa fa-caret-right" aria-hidden="true"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-sm-6">
								<div class="service-block">
								<img src="images/service/1.jpg" alt="image" class="img-responsive">
									<div class="service-block-content">
										<span>01</span>
										<h4>Accounting</h4>
										<p>
										
										</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<div class="service-block">
									<img src="images/service/2.jpg" alt="image" class="img-responsive">
									<div class="service-block-content">
										<span>02</span>
										<h4>Loans</h4>
										<p>
										</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<div class="service-block last">
								<img src="images/service/3.jpg" alt="image" class="img-responsive">
									<div class="service-block-content">
										<span>03</span>
										<h4>Business</h4>
										<p>
										
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="client-feedback-section">
				<div class="container">
					<div class="client-feedback-inner">
						<div class="section-title">
							<h2>Client Feedback</h2>
						</div>
						<div class="client-testimonial-area">
							<div id="client_testimonial" class="owl-carousel owl-theme">
								<div class="item">
									<div class="client-testimonial">
										<div class="review-thumb">
											<img src="images/misc/1.jpg" class="img-circle" alt="client thumb">
											<div>
												<h4>Edward Philips</h4>
												<span><em>/</em> CEO, Pan Tech</span>
											</div>
										</div>
										<div class="review-content">
											<p>
												Usc Credits helped me alot in starting up my company. I would say they are truly the best
											</p>
										</div>
									</div>
								</div><!-- /.END ITEM -->
								<div class="item">
									<div class="client-testimonial">
										<div class="review-thumb">
											<img src="images/misc/2.jpg" class="img-circle" alt="client thumb">
											<div>
												<h4>John Adams</h4>
												<span><em>/</em>Businessx</span>
											</div>
										</div>
										<div class="review-content">
											<p>
											I was able to own a house due to the "Low interest" Loan I was offered. Thanks alot UscCredits
											</p>
										</div>
									</div>
								</div><!-- /.END ITEM -->
								<div class="item">
									<div class="client-testimonial">
										<div class="review-thumb">
											<img src="images/misc/1.jpg" class="img-circle" alt="client thumb">
											<div>
												<h4>Edward Philips</h4>
												<span><em>/</em> CEO, Pan Tech</span>
											</div>
										</div>
										<div class="review-content">
											<p>
											Usc Credits helped me alot in starting up my company. I would say they are truly the best
											</p>
										</div>
									</div>
								</div><!-- /.END ITEM -->
								<div class="item">
									<div class="client-testimonial">
										<div class="review-thumb">
											<img src="images/misc/2.jpg" class="img-circle" alt="client thumb">
											<div>
												<h4>John Adams</h4>
												<span><em>/</em>Business</span>
											</div>
										</div>
										<div class="review-content">
											<p>
											I was able to own a house due to the "Low interest" Loan I was offered. Thanks alot UscCredits
											</p>
										</div>
									</div>
								</div><!-- /.END ITEM -->
								<div class="item">
									<div class="client-testimonial">
										<div class="review-thumb">
											<img src="images/misc/1.jpg" class="img-circle" alt="client thumb">
											<div>
												<h4>Edward Philips</h4>
												<span><em>/</em> CEO, Pan Tech</span>
											</div>
										</div>
										<div class="review-content">
											<p>
												Usc Credits helped me alot in starting up my company. I would say they are truly the best
											</p>
										</div>
									</div>
								</div><!-- /.END ITEM -->
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="company-values-section">
				<div class="container">
					<div class="company-values-inner">
						<div class="row">
							<div class="col-md-6">
								<div class="company-thumb">
									<img src="images/misc/3.png" alt="img" class="img-responsive">
								</div>
							</div>
							<div class="col-md-6">
								<div class="company-values-chart-area">
									<div class="section-title">
										<h2>Company Values</h2>
									</div>
									<div class="company-values-tab">
										<ul class="nav nav-pills">
											<li class="active">
												<a href="#1a" data-toggle="tab">Analytics</a>
											</li>
											<li>
												<a href="#2a" data-toggle="tab">Our Skill</a>
											</li>
											<li>
												<a href="#3a" data-toggle="tab">Advantage</a>
											</li>
										</ul>
										<div class="tab-content clearfix">
											<div class="tab-pane active" id="1a">
												<div class="company-values-chart">
													<canvas id="linechart-one" class="linechart linecharts" width="400" height="230"></canvas>
												</div>
											</div>
											<div class="tab-pane" id="2a">
												<div class="tab-skill-content">
													<!-- Skills -->
													<div class="skillbar" data-percent="85">
														<p class="skillbar-title">Finance</p>
														<span class="skill-bar-percent"></span>
														<div class="skillbar-bar-wrapper">
															<div class="skillbar-bar"></div>
														</div>
													</div>
													<!-- End -->
													<!-- Skills -->
													<div class="skillbar" data-percent="90">
														<p class="skillbar-title">Analysis</p>
														<span class="skill-bar-percent"></span>
														<div class="skillbar-bar-wrapper">
															<div class="skillbar-bar"></div>
														</div>
													</div>
													<!-- End -->
													<!-- Skills -->
													<div class="skillbar" data-percent="70">
														<p class="skillbar-title">Marketing</p>
														<span class="skill-bar-percent"></span>
														<div class="skillbar-bar-wrapper">
															<div class="skillbar-bar"></div>
														</div>
													</div>
													<!-- End -->
													<!-- Skills -->
													<div class="skillbar" data-percent="80">
														<p class="skillbar-title">Support</p>
														<span class="skill-bar-percent"></span>
														<div class="skillbar-bar-wrapper">
															<div class="skillbar-bar"></div>
														</div>
													</div>
													<!-- End -->
												</div>
											</div>
											<div class="tab-pane" id="3a">
												<div class="company-values-chart">
													<canvas id="linechart-three" class="linechart linecharts" width="400" height="230"></canvas>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="latest-news-section">
				<div class="container">
					<div class="latest-news-inner">
						<div class="row">
							<div class="service-heading">
								<div class="col-md-6">
									<div class="section-title">
										<h2>Latest News</h2>
									</div>
								</div>
								<div class="col-md-6">
									<div class="page-link">
										<a href="">
											More News 
											<i class="fa fa-caret-right" aria-hidden="true"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-sm-6">
								<div class="latest-news-block">
									<div class="thumb">
										<img src="images/misc/5.jpg" alt="img" class="img-responsive">
										<div class="overlay"></div>
										<div class="latest-news-content">
										
												<h6>
													We offer financial guardiance
												</h6>
										
											<div class="post-meta">
												<span class="date"><i class="fa fa-clock-o" aria-hidden="true"></i> January 16, <?php $year=date('y'); echo'$year';?></span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<div class="latest-news-block">
									<div class="thumb">
										<img src="images/misc/6.jpg" alt="img" class="img-responsive">
										<div class="overlay"></div>
										<div class="latest-news-content">
											
												<h6>
												We help your business florish
												</h6>
											
											<div class="post-meta">
												<span class="date"><i class="fa fa-clock-o" aria-hidden="true"></i> May 24, <?php $year=date('y'); echo'$year';?></span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<div class="latest-news-block last">
									<div class="thumb">
										<img src="images/misc/7.jpg" alt="img" class="img-responsive">
										<div class="overlay"></div>
										<div class="latest-news-content">
										
												<h6>
													Finacial growth is simplified
												</h6>
										
											<div class="post-meta">
												<span class="date"><i class="fa fa-clock-o" aria-hidden="true"></i> May 26, <?php $year=date('y'); echo'$year';?></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="contact-section">
				<div class="container">
					<div class="contact-section-inner">
						<div class="row">
							<div class="col-md-8">
								<div class="map-area">
									<div class="section-title">
										<h2>We are Near at You</h2>
										<p>
										Your Location is not a barrier<br>
											We have branches all over and all accounts can be managed through our online banking right here in our web site.
										</p>
									</div>
									<div class="map-one-wrap">
										<img src="images/misc/5.png" alt="img" class="img-responsive">
										<div class="map-info-block one">
											<div class="map-info-btn">
												<span class="fa"></span>
											</div>
											<div class="map-info">
												<div class="map-info-inner">
													<p>
														Fin&sult Inc, 06 Highley St,Victoria, <strong>Germany</strong>
													</p>
													<a class="map-hyperlink" href="https://maps.google.com/maps?q=1+Place+Giovanni+da+Verrazzano,+69009+Lyon,+France&amp;hl=fr&amp;iframe=true">Google map <i class="fa fa-caret-right"></i></a>
												</div>
											</div>
										</div>
										<div class="map-info-block two">
											<div class="map-info-btn">
												<span class="fa"></span>
											</div>
											<div class="map-info">
												<div class="map-info-inner">
													<p>
														Fin&sult Inc, 06 Highley St,Victoria, <strong>Germany</strong>
													</p>
													<a class="map-hyperlink" href="https://maps.google.com/maps?q=1+Place+Giovanni+da+Verrazzano,+69009+Lyon,+France&amp;hl=fr&amp;iframe=true">Google map <i class="fa fa-caret-right"></i></a>
												</div>
											</div>
										</div>
										<div class="map-info-block three">
											<div class="map-info-btn">
												<span class="fa"></span>
											</div>
											<div class="map-info">
												<div class="map-info-inner">
													<p>
														Fin&sult Inc, 06 Highley St,Victoria, <strong>Germany</strong>
													</p>
													<a class="map-hyperlink" href="https://maps.google.com/maps?q=1+Place+Giovanni+da+Verrazzano,+69009+Lyon,+France&amp;hl=fr&amp;iframe=true">Google map <i class="fa fa-caret-right"></i></a>
												</div>
											</div>
										</div>
										<div class="map-info-block four">
											<div class="map-info-btn">
												<span class="fa"></span>
											</div>
											<div class="map-info">
												<div class="map-info-inner">
													<p>
														Fin&sult Inc, 06 Highley St,Victoria, <strong>Germany</strong>
													</p>
													<a class="map-hyperlink" href="https://maps.google.com/maps?q=1+Place+Giovanni+da+Verrazzano,+69009+Lyon,+France&amp;hl=fr&amp;iframe=true">Google map <i class="fa fa-caret-right"></i></a>
												</div>
											</div>
										</div>
										<div class="map-info-block five">
											<div class="map-info-btn">
												<span class="fa"></span>
											</div>
											<div class="map-info">
												<div class="map-info-inner">
													<p>
														Fin&sult Inc, 06 Highley St,Victoria, <strong>Germany</strong>
													</p>
													<a class="map-hyperlink" href="https://maps.google.com/maps?q=1+Place+Giovanni+da+Verrazzano,+69009+Lyon,+France&amp;hl=fr&amp;iframe=true">Google map <i class="fa fa-caret-right"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="contact-form-area">
									<div class="section-title">
										<h2>Request a Call Back</h2>
									</div>
									<form action="#" method="post" class="form-common call-back-form">
										<div class="form-select">
											<select>
												<option value="top-topics">Topic To Discuss</option>
												<option value="finance">Finance</option>
												<option value="marketing">Marketing</option>
											</select>
										</div>
										<input type="text" placeholder="Your Name">
										<input type="email" placeholder="Email">
										<input type="text" placeholder="Phone Number">
										<button type="submit" class="btn-one">Submit</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<div class="partner-sction partner-one">
				<div class="container">
					<div class="partner-inner">
						<ul>
							<li><img src="images/partneer/6.png" alt="img" class="img-responsive"></li>
							<li><img src="images/partneer/7.png" alt="img" class="img-responsive"></li>
							<li><img src="images/partneer/8.png" alt="img" class="img-responsive"></li>
							<li><img src="images/partneer/9.png" alt="img" class="img-responsive"></li>
							<li><img src="images/partneer/10.png" alt="img" class="img-responsive"></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<?php
        include('footer.php');
		?>
			<div class="container">
				<div class="copyright">
					<p>&copy; <?php $year=date('Y'); echo"$year";?> FinSult. With Love by <a href="#">DixiPixi</a></p>
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
		
		<!-- CHART JS -->
		<script src="assets/js/chart/Chart.bundle.js"></script>
		<script src="assets/js/chart/chart-custom.js"></script>
		
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

<!-- Mirrored from dixipixi.com/finsult/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Feb 2017 11:44:01 GMT -->
</html>
