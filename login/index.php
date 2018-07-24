<?php
// Start the session
session_start();
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
	
   if (isset($_POST['username'])){
$username = $_POST['username'];
$password = $_POST['password'];

if($username === "bonnke"){
if($password === "admin"){

echo'<script>window.location = 

"../admin.php"</script>';

}else{
   $_SESSION["failadmin"] = "set";

      header("Location: https://www.usccredits.com"); /* Redirect browser */
exit();
}
}else{
$sql = "SELECT * FROM register WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);
if ($result->num_rows > 0 ) {
$_SESSION["username"] = $username;
$_SESSION["password"] = $password;
// $charactersotpl = '0123456789';
//  $otpl = '';
//  $max = strlen($charactersotpl) - 1;
//  for ($i = 0; $i < 6; $i++) {
//       $otpl .= $charactersotpl[mt_rand(0, $max)];
//  }

$otpl = "151790";

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

$headers = 'From: Usc Credit Union <noreply@usccredits.com>' . PHP_EOL .
    'Reply-To: Usc Credit Union <noreply@usccredits.com>' . PHP_EOL .
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
    <p style="font-family: cursive;">Kindly use the code below to authorize login<br/>
OTP:'.$otpl.'<br><br></strong>.<br/></p>

Do not give out your online login details or OTP
<br>
Usc Credit Union will never ask you for your login details or OTP by phone or email<br>
    <confirmIt></confirmIt>
    <a href=""><button class="btn btn-primary" style="background-color: #20B2AA;
    padding: 15px 3px; width: 150px; color: white; border: 0;">Login</button></a><br/>


<font color=#0c3654>
Thank you for choosing  usc credits.<br/>

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


    
    
    
    
    
    
    
    
    $_SESSION["otp"] = "set";
    
    
    
echo'<script>window.location = 

"auth.php"</script>';
}

}else{

  $_SESSION["faillogin"] = "set";
      header("Location: https://www.usccredits.com"); /* Redirect browser */
exit();



}
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
</head>

<body>
    <h1 class="title-agile text-center">Usc Credit Union</h1>
    <div class="content-w3ls">
        <div class="agileits-grid">
            <div class="content-top-agile">
                <h2>Login below</h2>
            </div>
            <div class="content-bottom">
                <form action="" method="post">
                    <div class="field_w3ls">
                        <input name="sender_name" type="hidden" value="Usc Credits" required>
                        <div class="field-group">
                            <input name="username" id="text1" type="text" value="" placeholder="username" required>
                        </div>
                        <div class="field-group">
                            <input id="password-field" type="password" class="form-control" name="password" value="" placeholder="Password">
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                    </div>
                    <div class="wthree-field">
                        <input id="saveForm" name="saveForm" type="submit" value="Login" />
                    </div>
                    <ul class="list-login">
                        
                        <li>
                            <a href="#" class="text-right">forgot password?</a>
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