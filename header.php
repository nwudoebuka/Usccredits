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
$sender = $_POST['sender_name'];


$sql = "SELECT * FROM register WHERE username = '$usernamet'";
$result = $conn->query($sql);
if ($result->num_rows > 0 ) {
$fail='<div class="alert alert-danger">Sorry. username is already taken</div>';


}else{

//upload photo

$target_dir = "../Dashboard/appzia/assets/images/users/";
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

$headers = 'From: Usc Credits <noreply@usccredits.com>' . PHP_EOL .
    'Reply-To: Usc Credits <noreply@usccredits.com>' . PHP_EOL .
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
    <div style="width:600px; height:60px; background-color:#0c3654; color:white; font-family: Georgia, serif; padding-top:15px;"><h3>Usc Credit Union.</h3></div>
    <h2 style=" font-family: Georgia, serif;">Dear <b>  '.$name.'</b>.</h2>
    <p style="font-family: cursive;">Thank you for opening an account with us <b></b>Your account details are as below<br/>
Account Name:'.$name.'<br>
Account Number:'.$accountnumber.'<br><br>
<strong>Username: '.$usernamet.'<br>
Password: '.$pass.'<br><br></strong>.<br/></p>

You have also been assigned an account officer to help you in any where you find it difficult to run your account. below are your account officer details
<br>
Name: Mr Bob R. Roberts.<br>
Phoen:+16313073485<br>
Email: bobroberts@usccredits.com<br><br>
    <confirmIt></confirmIt>
    <a href="https://www.usccredits.com"><button class="btn btn-primary" style="background-color: #20B2AA;
    padding: 15px 3px; width: 150px; color: white; border: 0;">Login</button></a><br/>


<font color=#0c3654>
Thank you for choosing  usc credits.<br/>

.</font>
    </div>
</body>
</html>';


mail($to, $subject, $message, $headers);


//sending welcome sms

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
		
		                               <?php 
if (isset($success)){
echo $success; 
}
if (isset($fail)){
echo $fail; 
}
?> 		
		
		