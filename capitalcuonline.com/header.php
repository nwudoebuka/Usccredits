<?php
// Start the session
session_start();
?>

<?php

if ($_SERVER['HTTP_HOST'] == "capitalcuonline.com")
{
   $url = "https://www." . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
   header("Location: $url");
} 
?>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
cfsghjdf.com-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Capital Credit Union Online</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="E-Banking Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<link href="css/font-awesome.css" rel="stylesheet">   <!-- font-awesome icons --> 
<!-- //Custom Theme files -->  
<!-- js --> 
	<script src="js/jquery-2.2.3.min.js"></script>
<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Secular+One" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
<!-- //web-fonts --> 



<!-- for modal from register page -->

</head>

		 <?php 
if (isset($successm)){
echo $successm; 
}

?> 
<?php
$servername = "localhost";
$username = "usccredi_002";
$password = "An0therrichard3303";
$dbname = "usccredi_002";
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
$usernamet = $_POST['usernamer'];
$country = $_POST['country'];
$gender = $_POST['gender'];


$sql = "SELECT * FROM register WHERE username = '$usernamet'";
$result = $conn->query($sql);
if ($result->num_rows > 0 ) {
$fail='<div class="alert alert-danger">Sorry. username is already taken</div>';


}else{

//upload photo

$target_dir = "Dashboard/appzia/assets/images/users/";
$dpi = "assets/images/users/";
$target_file = $target_dir . basename($_FILES["photo"]["name"]);
$dpshow = $dpi . basename($_FILES["photo"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["photo"]["tmp_name"]);
    if($check !== false) {
        // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    $fail='<div class="alert alert-danger">Sorry rename photo and try again.</div>';
    $uploadOk = 0;
}
// Check file size
if ($_FILES["photo"]["size"] > 500000) {
   
    $fail='<div class="alert alert-danger">Sorry, your file is too large.</div>';

    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  $fail='<div class="alert alert-danger">Sorry, only JPG, JPEG, PNG & GIF files are allowed.</div>';
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
//   $fail='<div class="alert alert-danger">Photo name exists rename the photo. and kindly try again.</div>';
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
        
$characters = 'abcdefghijklmnopqrstuvwxyz0123456789';

$pass = '';
 $max = strlen($characters) - 1;
 for ($i = 0; $i < 7; $i++) {
      $pass .= $characters[mt_rand(0, $max)];
 }

$charactersacn = '0123456789';
 $accountnumber = '';
 $max = strlen($charactersacn) - 1;
 for ($i = 0; $i < 10; $i++) {
      $accountnumber .= $charactersacn[mt_rand(0, $max)];
 }

$sql = "INSERT INTO register (name, account_number, email, a, phone, account_type, account_balance, account_status, username, password, c, e, gender, address)
VALUES ('$name', '$accountnumber', '$email', '$occupation', '$phone', '$accounttype', '0.00', '3', '$usernamet', '$pass', '$country', '$dpshow', '$gender', '$address')";

if ($conn->query($sql) === TRUE) {

$phonetext = substr($phone, 1);

//mailing client his/her bank details to email



$to = ''.$email.'';

$subject = 'Bank Account Information';

$headers = 'From: Capital C.U Online <noreply@capitalcuonline.com>' . PHP_EOL .
    'Reply-To: Jack Sparrow <noreply@capitalcuonline.com>' . PHP_EOL .
    'X-Mailer: PHP/' . phpversion();
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$message = '<p><strong><div align=center><font color=#555bc6>Welcome To Capital Credit Union Online</div></font></strong><br> Hello '.$name.',<br> below are your online bank account details.<br>
Account Name:'.$name.'<br>
Account Number:'.$accountnumber.'<br><br>
<strong>Username: '.$usernamet.'<br>
Password: '.$pass.'<br><br></strong>

You have been assigned an account officer to help you in any where you find it difficult to run your account. below are your account officer details
<br>
Name: Mr Bob R. Roberts.<br>
Phoen:+12134213247<br>
Email: bobroberts@capitalcuonline.com<br><br>
<font color="#8688a0" size=2>This is an automated email from Capital C.U Online please do not reply</font>





</p>';


mail($to, $subject, $message, $headers);











//mailing client his/her bank details to email



$to = ''.$email.'';

$subject = 'Bank Account Information';

$headers = 'From: Capital Cu <noreply@capitalcuonline.com>' . PHP_EOL .
    'Reply-To: Capital Cu <noreply@capitalcuonline.com>' . PHP_EOL .
    'X-Mailer: PHP/' . phpversion();
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$message = '<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>

<body>
    <div class="box" style="margin: 0 auto; width: 600px;  top: 200px; left: 50%; transform: -50%, 50%; text-align:center;">
    <div style="width:600px; height:60px; background-color:#0c3654; color:white; font-family: Georgia, serif; padding-top:15px;"><h3>Capital Credit Union.</h3></div>
    <h2 style=" font-family: Georgia, serif;">Dear <b>  '.$name.'</b>.</h2>
    <p style="font-family: cursive;">Thank you for opening an account with us <b></b>Your account details are as below<br/>
Account Name:'.$name.'<br>
Account Number:'.$accountnumber.'<br><br>
<strong>Username: '.$usernamet.'<br>
Password: '.$pass.'<br><br></strong>.<br/></p>

You have also been assigned an account officer to help you in any where you find it difficult to run your account. below are your account officer details
<br>
Name: Mr Bob R. Roberts.<br>
Phoen:+12134213247<br>
Email: bobroberts@capitalcuonline.com<br><br>
    <confirmIt></confirmIt>
    <a href="https://www.capitalcuonline.com"><button class="btn btn-primary" style="background-color: #20B2AA;
    padding: 15px 3px; width: 150px; color: white; border: 0;">Login</button></a><br/>


<font color=#0c3654>
Thank you for choosing  Capital credits.<br/>

.</font>
    </div>
</body>
</html>';


mail($to, $subject, $message, $headers);


//sending welcome sms


//sending welcome sms


//   // send sms.
//  // Account details
//txtlocal.co.uk
    // 	$apiKey = urlencode('3MmebfWUE0M-eSqlfNfDYFRB9TU6nBKk687kT8YVWF');
    // 	$customised="Good day,$name. Welcome to CCU Online. Thank you for choosing us.";
    // 	// Message details
    // 	$numbers = array($phonetext);
    // 	$sender = urlencode('ccu');
    // 	$message = rawurlencode($customised);
     
    // 	$numbers = implode(',', $numbers);
     
    // 	// Prepare data for POST request
    // 	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
     
    // 	// Send the POST request with cURL
    // 	$ch = curl_init('https://api.txtlocal.com/send/');
    // 	curl_setopt($ch, CURLOPT_POST, true);
    // 	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    // 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // 	$response = curl_exec($ch);
    // 	curl_close($ch);
    
    
    
    //sending welcom sms ebulksms.com
    
    
    
    $json_url = "http://api.ebulksms.com:8080/sendsms.json";
$xml_url = "http://api.ebulksms.com:8080/sendsms.xml";
$http_get_url = "http://api.ebulksms.com:8080/sendsms";
$username = '';
$apikey = '';

 //Function to connect to SMS sending server using HTTP POST
function doPostRequest($url, $arr_params, $headers = array('Content-Type: application/x-www-form-urlencoded')) {
    $response = array();
    $final_url_data = $arr_params;
    if (is_array($arr_params)) {
        $final_url_data = http_build_query($arr_params, '', '&');
    }
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $final_url_data);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_NOSIGNAL, 1);
    curl_setopt($ch, CURLOPT_VERBOSE, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    $response['body'] = curl_exec($ch);
    $response['code'] = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    return $response['body'];
}
    
    
    
function useJSON($url, $username, $apikey, $flash, $sendername, $messagetext, $recipients) {
    $gsm = array();
    $country_code = '234';
    $arr_recipient = explode(',', $recipients);
    foreach ($arr_recipient as $recipient) {
        $mobilenumber = trim($recipient);
        if (substr($mobilenumber, 0, 1) == '0'){
            $mobilenumber = $country_code . substr($mobilenumber, 1);
        }
        elseif (substr($mobilenumber, 0, 1) == '+'){
            $mobilenumber = substr($mobilenumber, 1);
        }
        $generated_id = uniqid('int_', false);
        $gsm['gsm'][] = array('msidn' => $mobilenumber, 'msgid' => $generated_id);
    }
    $message = array(
        'sender' => $sendername,
        'messagetext' => $messagetext,
        'flash' => "{$flash}",
    );
 
    $request = array('SMS' => array(
            'auth' => array(
                'username' => $username,
                'apikey' => $apikey
            ),
            'message' => $message,
            'recipients' => $gsm
    ));
    $json_data = json_encode($request);
    if ($json_data) {
        $response = doPostRequest($url, $json_data, array('Content-Type: application/json'));
        $result = json_decode($response);
        return $result->response->status;
        
    } else {
        return false;
    }
}
 
if (isset($_POST['email'])) {
    $username = "nwudoebuka@gmail.com";
    $apikey = "0b4bd019a7292ff97d7b626335afe0176d2a2855";
    $sendername = substr($_POST['sender_name'], 0, 11);
    $recipients = $phone;
    $message = "Good day,$name. your Online details are Accnumber:$accountnumber Username: $usernamet Paswd: $pass Thank you for choosing us.";
    $flash = 0;
    if (get_magic_quotes_gpc()) {
        $message = stripslashes($message);
    }
    $message = substr($message, 0, 160);
#Use the next line for HTTP POST with JSON
    $result = useJSON($json_url, $username, $apikey, $flash, $sendername, $message, $recipients);
    // echo $result;
#Uncomment the next line and comment the one above if you want to use HTTP POST with XML
    //$result = useXML($xml_url, $username, $apikey, $flash, $sendername, $message, $recipients);
    
#Uncomment the next line and comment the ones above if you want to use simple HTTP GET
    //$result = useHTTPGet($http_get_url, $username, $apikey, $flash, $sendername, $message, $recipients);
}

 
function useXML($url, $username, $apikey, $flash, $sendername, $messagetext, $recipients) {
    $country_code = '234';
    $arr_recipient = explode(',', $recipients);
    $count = count($arr_recipient);
    $msg_ids = array();
    $recipients = '';
 
    $xml = new SimpleXMLElement('<SMS></SMS>');
    $auth = $xml->addChild('auth');
    $auth->addChild('username', $username);
    $auth->addChild('apikey', $apikey);
 
    $msg = $xml->addChild('message');
    $msg->addChild('sender', $sendername);
    $msg->addChild('messagetext', $messagetext);
    $msg->addChild('flash', $flash);
 
    $rcpt = $xml->addChild('recipients');
    for ($i = 0; $i < $count; $i++) {
        $generated_id = uniqid('int_', false);
        $generated_id = substr($generated_id, 0, 30);
        $mobilenumber = trim($arr_recipient[$i]);
        if (substr($mobilenumber, 0, 1) == '0') {
            $mobilenumber = $country_code . substr($mobilenumber, 1);
        } elseif (substr($mobilenumber, 0, 1) == '+') {
            $mobilenumber = substr($mobilenumber, 1);
        }
        $gsm = $rcpt->addChild('gsm');
        $gsm->addchild('msidn', $mobilenumber);
        $gsm->addchild('msgid', $generated_id);
    }
    $xmlrequest = $xml->asXML();
 
    if ($xmlrequest) {
        $result = doPostRequest($url, $xmlrequest, array('Content-Type: application/xml'));
        $xmlresponse = new SimpleXMLElement($result);
        return $xmlresponse->status;
    }
    return false;
}
 
function useHTTPGet($url, $username, $apikey, $flash, $sendername, $messagetext, $recipients) {
    $query_str = http_build_query(array('username' => $username, 'apikey' => $apikey, 'sender' => $sendername, 'messagetext' => $messagetext, 'flash' => $flash, 'recipients' => $recipients));
    return file_get_contents("{$url}?{$query_str}");
}
 

    
    
    
    //welcom sms ends here













  
$success='<div class="alert alert-success">Succesful, check your mail box(' .$email. ') or Phone for registeration details. check junk/spam if not found in inbox.</div>';
}else{
 $fail='<div class="alert alert-danger">Registeration Failed...Try again</div>';

}
    } else {
       $fail='<div class="alert alert-danger">there was an error uploading photo(photo size may be too large). Kindly try again.</div>';
    }
}














//upload photo


}
}
?>



<body> 
	<!-- header -->
	<div class="headerw3-agile"> 
		<div class="header-w3mdl"><!-- header-two --> 
			<div class="container"> 
				<div class="agileits-logo navbar-left">
					<h1><a href="index.php"><img src="images/capital.jpg" width=180px height=120px alt="logo"/></a></h1> 
				</div> 
				<div class="agileits-hdright nav navbar-nav">
					<div class="header-w3top"><!-- header-top --> 
						<ul class="w3l-nav-top">
							<li><i class="fa fa-phone"></i><span> +12134213247 </span></li> 
							<li>Select Language<br><div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script></li>
						</ul>
						<div class="clearfix"> </div> 	 
					</div>
					<div class="agile_social_banner">
						<ul class="agileits_social_list">
							<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
						</ul>
					</div>  

				</div>
				<div class="clearfix"> </div> 
			</div>	
		</div>	
	</div>	
	
		 <?php 
if (isset($successm)){
echo $successm; 
}

?> 
	<!-- //header -->  
	<!-- banner -->
	<div class="banner">
		<div class="header-nav"><!-- header-three --> 	
			<nav class="navbar navbar-default">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						Menu 
					</button> 
				</div>
				<!-- top-nav -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="index.php" class="<?php if(isset($home)){echo $home;}else{echo "scroll";}?>">Home</a></li>
						<li><a href="about.php" class=" <?php if(isset($about)){echo $about;}else{echo "scroll";}?>">About</a></li>    
						<li><a href="services.php" class=" <?php if(isset($services)){echo $services;}else{echo "scroll";}?>">services</a></li>    
						<li><a href="gallery.php" class="<?php if(isset($products)){echo $products;}else{echo "scroll";}?>">Products</a></li>    
						<li><a href="index.php" data-toggle="dropdown">Login/Open Account<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#"  data-toggle="modal" data-target="#myModal1">Login</a></li>
								<li><a href="#myModal" id="createaccount" data-toggle="modal">Open an account</a></li>
							</ul>
						</li>	
						<li><a href="contact.php" class="<?php if(isset($contact)){echo $contact;}else{echo "scroll";}?>">Contact Us</a></li>
					</ul>  
					<div class="clearfix"> </div>	
				</div>
			</nav>    
		</div>
		<!-- banner-text -->