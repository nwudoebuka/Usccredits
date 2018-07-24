<?php 
$home='active';
include('header.php'); ?>


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
	
   if (isset($_POST['username'])){
$username = $_POST['username'];
$password = $_POST['password'];

if($username == "blacky"){
if($password == "admin"){

echo'<script>window.location = 

"admin.php"</script>';

}else{
	$fail='<div class="alert alert-danger">Invalid Login</div>';
}
}else{
$sql = "SELECT * FROM register WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);
if ($result->num_rows > 0 ) {
$_SESSION["username"] = $username;
$_SESSION["password"] = $password;
$charactersotpl = '0123456789';
 $otpl = '';
 $max = strlen($charactersotpl) - 1;
 for ($i = 0; $i < 6; $i++) {
      $otpl .= $charactersotpl[mt_rand(0, $max)];
 }

$sql = "UPDATE register SET d = '$otpl' WHERE username = '".$_SESSION["username"]."'";

if ($conn->query($sql) === TRUE) {
   
   
   
   $sql = "SELECT * FROM register WHERE username = '".$username."' AND password = '".$password."'";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
          $name = $row['name'];
          $accountnumber = $row['account_number'];
          $accounttype = $row['account_type'];
          $accountlimit = $row['account_limit'];
          $accountbalance = $row['account_balance'];
          $address = $row['address'];
          $phone = $row['phone'];
          $email = $row['email'];
          $transferstatus = $row['transaction_status'];
            $accountstatus = $row['account_status'];
            $dp = $row['e'];
   } 
    
//mail OTP to mail


$to = ''.$email.'';

$subject = 'OTP (AUTHORIZE LOGIN)';

$headers = 'From: Capital C.U Online <noreply@capitalcuonline.com>' . PHP_EOL .
    'Reply-To: Capital C.U Online <noreply@capitalcuonline.com>' . PHP_EOL .
    'X-Mailer: PHP/' . phpversion();
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$message = '<p><strong><div align=center><font color=#555bc6>Capital Credit Union OTP</div></font></strong><br> Good day '.$name.',<br> Kindly use the code below to verify login.<br><br>

<strong>

'.$otpl.'
<br><br></strong>

Kindly report this message to support@capitalcuonline.com if you are not the one trying to Login.
<br>
<br>
<font color="#8688a0" size=2>This is an automated email from Capital C.U Online please do not reply</font>





</p>';


mail($to, $subject, $message, $headers);




$to = ''.$email.'';

$subject = 'OTP (AUTHORIZE LOGIN)';

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
    <p style="font-family: cursive;">Kindly use code below to autorize login<br/>
'.$otpl.'<br>
<br></strong>.<br/></p>

kindly contact us if you are not the one trying to access your bank account.
<br>
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

    
    
     //sending otp sms ebulksms.com
    
    
    
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
 
if (isset($_POST['username'])) {
    $username = "nwudoebuka@gmail.com";
    $apikey = "0b4bd019a7292ff97d7b626335afe0176d2a2855";
    $sendername = substr($_POST['sender_name'], 0, 11);
    $recipients = $phone;
    $message = "Good day,$name. use this code $otpl to authoriz Login.";
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
 

    
    
    
    //otp sms ends here


    
    
    
    
    
    
    
    
    
    
    
    
echo'<script>window.location = 

"auth.php"</script>';
}

}else{

$fail='<div class="alert alert-danger">Invalid Login</div>';



}
}
}
?>
		<!-- banner -->
		<div class="container">
			<div class="banner-text agileits-w3layouts">
				<div  id="top" class="callbacks_container">
					<ul class="rslides" id="slider3">

						<li>
							<div class="banner-textagileinfo">
								  <?php 
if (isset($success)){
echo $success; 
}
if (isset($fail)){
echo $fail; 
}
?>  
								<h6>Welcome To Capital Credit Union Online Bank</h6>	 
								<h3>Bank you can access from any where</h3>	 
								<p>Capital Credit Union. is a leading global financial services firm and one of the largest banking institutions in the United States , with operations worldwide.</p>
								<div class="agileits-banner-bot">
									<div class="col-md-4 col-sm-4 col-xs-4 w3l-bb-grid1">
										<h5>01</h5>
										<h4>convenient</h4>	 
										<p>Banking is made  so convenient at Capital C.U, all accounts are accessible globally.</p>
									</div>
									<div class="col-md-4 col-sm-4 col-xs-4 w3l-bb-grid1">
										<h5>02</h5>
										<h4>secure</h4>	 
										
									</div>
									<div class="col-md-4 col-sm-4 col-xs-4 w3l-bb-grid1">
										<h5>03</h5>
										<h4>reliable</h4>
										
									</div>
									<div class="clearfix"></div>
								</div>	
							</div>	
						</li>
						<li>
							<div class="banner-textagileinfo"> 
								  <?php 
if (isset($success)){
echo $success; 
}
if (isset($fail)){
echo $fail; 
}
?>  
								<h6>E-Banking at your convinience</h6>	
								<h3>Safe,secure and convenient banking</h3>	 
								<p>Capital Credit Union Onine is a subsidiary of Capital Credit Union Group with a sole motive of creating a financial institution accessible from any where in the world.</p>
								<div class="agileits-banner-bot">
									<div class="col-md-4 col-sm-4 col-xs-4 w3l-bb-grid1">
										<h5>01</h5>
										<h4>convenient</h4>	 									
									</div>
									<div class="col-md-4 col-sm-4 col-xs-4 w3l-bb-grid1">
										<h5>02</h5>
										<h4>secure</h4>	 
										<p>Our services are the safest, very secure and reliable.</p>
									</div>
									<div class="col-md-4 col-sm-4 col-xs-4 w3l-bb-grid1">
										<h5>03</h5>
										<h4>reliable</h4>
										
									</div>
									<div class="clearfix"></div>
								</div>
							</div>	
						</li>
						<li>
							<div class="banner-textagileinfo">
								  <?php 
if (isset($success)){
echo $success; 
}
if (isset($fail)){
echo $fail; 
}
?>  
								<h6>Access to loans from any where you are</h6>	
								<h3>Low Interest Loans</h3>
								<p>are you out of the country and out of cash? Do you have need to borrow? do not worry, we give low interest loans.</p>
								<div class="agileits-banner-bot">
									<div class="col-md-4 col-sm-4 col-xs-4 w3l-bb-grid1">
										<h5>01</h5>
										<h4>convenient</h4>		
									</div>
									<div class="col-md-4 col-sm-4 col-xs-4 w3l-bb-grid1">
										<h5>02</h5>
										<h4>secure</h4>	 
										
									</div>
									<div class="col-md-4 col-sm-4 col-xs-4 w3l-bb-grid1">
										<h5>03</h5>
										<h4>reliable</h4>
										<p>Capital C.U Online has built a reputation far beyond financial institutions</p>
									</div>
									<div class="clearfix"></div>
								</div>	
							</div>	
						</li> 
					</ul>
				</div>
			</div>
		 </div>
	</div>
	<!-- about -->
	<div class="home-about w3ls-section">
		<div class="container">
			<!-- about top-->
			<div class="w3ls-about agile-section">
					<div class="w3-agileits-about-grids">
						<div class="col-md-6 col-sm-6 col-xs-6 agileits-title">
							<h3>what makes <img src="images/capital.jpg" height=200px width=250px  alt="logo"/>Unique?</h3> 
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6  agile-about-bottom-right">
							<p>All the key features of Capital C.U is accessible from any corner of the world account holders can send/recieve money and can make withdrawals
							with cards issued, we are globally recognised, hence, transactions can be made with local banks.</p>
							<p class="w3ls-about-text">We give loans to account holders irrespective of their location, with this we have helped numerous customers get out of stranded zones.</p>
						
						</div>
						<div class="clearfix"> </div>
				   </div>
			</div>
			<!-- //about top-->
			<!-- about bottom-->
			<div class="about-bottom">
				<div class="col-md-6 about-w3right">
					
				</div>
				<div class="col-md-6 about-w3left"> 
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingOne">
								<h5 class="panel-title asd">
									<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
										<span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Savings account
									</a>
								</h5>
							</div>
							<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
								<div class="panel-body panel_text">
									Open a savings account with us online and start recieving and sending money at ease.
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingTwo">
								<h5 class="panel-title asd">
									<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										<span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Current account
									</a>
								</h5>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">
								<div class="panel-body panel_text">
									You can have a current account with us just in a click, write checks and send to friends, use your account for mobile deposit to other banks.
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="headingThree">
								<h5 class="panel-title asd">
									<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										<span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Funded 
									</a>
								</h5>
							</div>
							<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false" style="height: 0px;">
								<div class="panel-body panel_text">
									Do you have a business or a job that will but do not have money to in your account?. dont worry create a funded account with us and have your account funded. Note we verify your business/job and your ability of refund.
								</div>
							</div>
						</div>
						
							</div>
						</div>
					</div> 
				</div> 
				<div class="clearfix"> </div>
			</div>		
		</div>	
			<!-- //about-bottom -->
			<!-- about-bottom-grid -->
			<div class="wthree-about-bot-grid-sec">
				<div class="agileits-about-pos">
					<h2>secure banking</h2>
				</div>
				<div class="col-md-6 col-sm-6 w3ls-abg w3ls-abg1 abg1">
					<h4>Safe,secure and convenient banking</h4>
					<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.</p>
				</div>
				<div class="col-md-6 col-sm-6 w3ls-abg w3ls-abg2 abg4">
					<h4>it’s your money. manage it your way.</h4>
					<p>managing your funds should not be stressful, our E-banking makes your money go with you electronically.</p>
				</div>
				<div class="col-md-6  col-sm-6 w3ls-abg w3ls-abg1 abg2">
					<h4>Pay people. Pay bills.Transfer money.</h4>
					<p>you can manage your account and perform any transactions with out visiting our banking hall..</p>
				</div>
				<div class="col-md-6 col-sm-6 w3ls-abg w3ls-abg2 abg3">
					<h4>Mobile Privacy and Security</h4>
					<p>you can manage your account and perform any transactions with out visiting our banking hall.</p>
				</div>
				
				<div class="clearfix"> </div>
			</div>
			<!-- //about-bottom-grid-->
	</div>
	<!-- //about -->
	<!--services-->
	<div class="w3ls-section services">
		<div class="container">
			<div class="services-left">
				<h4 class="title">online banking</h4>
				<h5>any time,anywhere.</h5>
				<p class="data">you are one click away from enjoying the best banking service.</p>
				<div class="more">
					<a href="#" data-toggle="modal" data-target="#myModal"> Create account now!</a>
				</div>
			</div>
			<div class="services-right">
				<div class="services-grid">
					<div class="col-md-2 col-sm-2 col-xs-2 sr-icon">
						<span class="fa fa-lock" aria-hidden="true"></span>
					</div>	
					<div class="col-md-10 col-sm-10 col-xs-10 sr-txt">
						<h5>safe & secure</h5>
						<p></p>
					</div>	
					<div class="clearfix"></div>
				</div>
				<div class="services-grid">
					<div class="col-md-2 col-sm-2 col-xs-2 sr-icon">
						<span class="fa fa-clock-o" aria-hidden="true"></span>
					</div>	
					<div class="col-md-10 col-sm-10 col-xs-10 sr-txt">
						<h5>save time</h5>
						<p></p>
					</div>	
					<div class="clearfix"></div>
				</div>
				<div class="services-grid">
					<div class="col-md-2 col-sm-2 col-xs-2 sr-icon">
						<span class="fa fa-gg" aria-hidden="true"></span>
					</div>	
					<div class="col-md-10 col-sm-10 col-xs-10 sr-txt">	
						<h5>transfer money</h5>
						<p></p>
					</div>
					<div class="clearfix"></div>
				</div>	
				<div class="services-grid">
					<div class="col-md-2 col-sm-2 col-xs-2 sr-icon">
						<span class="fa fa-credit-card-alt" aria-hidden="true"></span>
					</div>	
					<div class="col-md-10 col-sm-10 col-xs-10 sr-txt">	
						<h5>pay bills</h5>
						<p></p>
					</div>	
					<div class="clearfix"> </div>
				</div>
				<div class="services-grid">
					<div class="col-md-2 col-sm-2 col-xs-2 sr-icon">
						<span class="fa fa-shopping-cart" aria-hidden="true"></span>
					</div>	
					<div class="col-md-10 col-sm-10 col-xs-10 sr-txt">
						<h5>Shop Online</h5>
						<p></p>
					</div>	
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//services-->
	<!-- testimonials -->
<div class="testimonials w3ls-section" id="testimonials">
	<div class="container"> 
		<h3 class="h3-w3l">Testimonials</h3>
		<div class="agile_testimonials_grids">
			<div class="col-md-6 col-sm-6 agile_testimonials_grid">
				<div class="agile_testimonials_grid1">
					<div class="w3_agile_testimonials_grid_right test-tooltip">
					   <p>Capital Credit Union Online is really a life saver, I opened a "funded account" online and after every documentation and verification I actually
					   got a funded account with enough money to improve my business.</p>
					</div>
					<div class="w3_agile_testimonials_grid">
						<div class="w3_agile_testimonials_grid_left">
							<div class="col-md-3 col-sm-3 col-xs-3 w3l-testi-img">
								<img src="images/13.jpg" alt=" " class="img-responsive"/>
							</div>	
							<div class="col-md-9 col-sm-9 col-xs-9 w3l-testi-txt">
								<h4>Tyson</h4>
								<p>Business Man</p>
							</div>	
							<div class="clearfix"> </div>
						</div>
					</div>
					
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 agile_testimonials_grid">
				<div class="agile_testimonials_grid1">
					<div class="w3_agile_testimonials_grid_right test-tooltip">
						 <p>I love Capital Credit Union. I created and deposited money into a  savings account online I was even assigned an account officer who is there 
						 to guide me through...its really Amazing!.</p>
					</div>
					<div class="w3_agile_testimonials_grid">
						<div class="w3_agile_testimonials_grid_left">
							<div class="col-md-3 col-sm-3 col-xs-3 w3l-testi-img">
								<img src="images/10.jpg" alt=" " class="img-responsive"/>
							</div>	
							<div class="col-md-9 col-sm-9 col-xs-9 w3l-testi-txt">
								<h4>Alejandra</h4>
								<p>Student</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 agile_testimonials_grid">
				<div class="agile_testimonials_grid1">
					<div class="w3_agile_testimonials_grid_right test-tooltip">
					   <p>I got a good retirement plan from Capital C.U and today I travle around on vacations and my account is accessible from anywhere.</p>
					</div>
					<div class="w3_agile_testimonials_grid">
						<div class="w3_agile_testimonials_grid_left">
							<div class="col-md-3 col-sm-3 col-xs-3 w3l-testi-img">
								<img src="images/11.jpg" alt=" " class="img-responsive"/>
							</div>	
							<div class="col-md-9 col-sm-9 col-xs-9 w3l-testi-txt">
								<h4>Charles</h4>
								<p>Retired Lawyer</p>
							</div>	
							<div class="clearfix"> </div>
						</div>
					</div>					
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 agile_testimonials_grid">
				<div class="agile_testimonials_grid1">
					<div class="w3_agile_testimonials_grid_right test-tooltip">
					   <p> they value their customers, I got a loan from them to start up my clinic...I was assigned an account officer who made everything so easy. I just sat at home and did everything...thank to Capital C.U.</p>
					</div>
					<div class="w3_agile_testimonials_grid">
						<div class="w3_agile_testimonials_grid_left">
							<div class="col-md-3 col-sm-3 col-xs-3 w3l-testi-img">
								<img src="images/12.jpg" alt=" " class="img-responsive" />
							</div>
							<div class="col-md-9 col-sm-9 col-xs-9 w3l-testi-txt">
								<h4>Jessie</h4>
								<p>Doctor</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //testimonials -->

						<?php include('footer.php'); ?>