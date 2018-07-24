<?php
// Start the session
session_start();
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

if (isset($_SESSION["username"])){
   }else{
echo'<script>window.location = 

"https://capitalcuonline.com"</script>';
}

   if (isset($_SESSION["username"])){

$username="". $_SESSION["username"] . "";
$password="". $_SESSION["password"] . "";
$otp="". $_SESSION["otp"] . "";

$sql = "SELECT * FROM register WHERE username = '".$_SESSION["username"]."' AND password = '".$_SESSION["password"]."' AND d = '".$_SESSION["otp"]."'";
$result = $conn->query($sql);
if ($result->num_rows > 0 ) {
  
$sql = "SELECT * FROM register WHERE username = '".$username."' AND password = '".$password."' AND d = '".$otp."'";
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
   }





}else{

//what happens if it doesnt get rows wia session exists
  

}
}else{

//what happens if session aint set.

}
?>

<!DOCTYPE html><html>
<!-- Mirrored from themesdesign.in/appzia/typography.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2018 18:29:07 GMT -->
<head><meta charset="utf-8" /><title><?php echo $name?></title><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /><meta content="Admin Dashboard" name="description" /><meta content="ThemeDesign" name="author" /><meta http-equiv="X-UA-Compatible" content="IE=edge" /><link rel="shortcut icon" href="assets/images/favicon.ico"><link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"><link href="assets/css/icons.css" rel="stylesheet" type="text/css"><link href="assets/css/style.css" rel="stylesheet" type="text/css"></head>

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

   if (isset($_SESSION["username"])){

$username="". $_SESSION["username"] . "";
$password="". $_SESSION["password"] . "";


$sql = "SELECT * FROM register WHERE username = '".$_SESSION["username"]."' AND password = '".$_SESSION["password"]."'";
$result = $conn->query($sql);
if ($result->num_rows > 0 ) {
  
$sql = "SELECT * FROM register WHERE username = '".$username."' AND password = '".$password."'";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
          $name = $row['name'];
          $accountnumber = $row['account_number'];
          $accounttype = $row['account_type'];
          $accountlimit = $row['account_limit'];
          $accountbalance = $row['account_balance'];
          $address = $row['address'];
          $email = $row['email'];
          $phone = $row['phone'];
          $transferstatus = $row['transaction_status'];
            $accountstatus = $row['account_status'];
            $dp = $row['e'];
   }





}else{

//what happens if it doesnt get rows wia session exists
  

}
}else{

//what happens if session aint set.

}
?>


<body class="fixed-left"><div id="wrapper"><div class="topbar"><div class="topbar-left"><div class="text-center"> <a href="index.php" class="logo"><img src="assets/images/capital.jpg"></a> <a href="index.php" class="logo-sm"><img src="assets/images/logo_sm.png"></a></div></div><div class="navbar navbar-default" role="navigation"><div class="container"><div class=""><div class="pull-left"> <button type="button" class="button-menu-mobile open-left waves-effect waves-light"> <i class="ion-navicon"></i> </button> <span class="clearfix"></span></div><form class="navbar-form pull-left" role="search"><div class="form-group"><div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script></div> <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button></form><ul class="nav navbar-nav navbar-right pull-right"><li class="dropdown hidden-xs"> <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light notification-icon-box" data-toggle="dropdown" aria-expanded="true"> <i class="fa fa-bell"></i> <span class="badge badge-xs badge-danger"></span> </a><ul class="dropdown-menu dropdown-menu-lg noti-list-box"><li class="text-center notifi-title">Notification <span class="badge badge-xs badge-success">3</span></li><li class="list-group"> <a href="javascript:void(0);" class="list-group-item"><div class="media"><div class="media-heading">Your order is placed</div><p class="m-0"> <small>Dummy text of the printing and typesetting industry.</small></p></div> </a> <a href="javascript:void(0);" class="list-group-item"><div class="media"><div class="media-body clearfix"><div class="media-heading">New Message received</div><p class="m-0"> <small>You have 87 unread messages</small></p></div></div> </a> <a href="javascript:void(0);" class="list-group-item"><div class="media"><div class="media-body clearfix"><div class="media-heading">Your item is shipped.</div><p class="m-0"> <small>It is a long established fact that a reader will</small></p></div></div> </a> <a href="javascript:void(0);" class="list-group-item"> <small class="text-primary">See all notifications</small> </a></li></ul></li><li class="hidden-xs"> <a href="#" id="btn-fullscreen" class="waves-effect waves-light notification-icon-box"><i class="mdi mdi-fullscreen"></i></a></li><li class="dropdown">  <?php echo '<a href="https://capitalcuonline.com/Dashboard/appzia/'.$dp.'" class="profile waves-effect waves-light" aria-expanded="true"><img src='.$dp.' alt="user-img" class="img-circle"></a>'?>  <ul class="dropdown-menu"><li><a href="javascript:void(0)"> Profile</a></li><li><a href="javascript:void(0)"><span class="badge badge-success pull-right">5</span> Settings </a></li><li><a href="javascript:void(0)"> Lock screen</a></li><li class="divider"></li><li><a href="javascript:void(0)"> Logout</a></li></ul></li></ul></div></div></div></div><div class="left side-menu"><div class="sidebar-inner slimscrollleft"><div id="sidebar-menu"><ul><li class="menu-title">Menu</li><li> <a href="index.php" class="waves-effect"><i class="mdi mdi-home"></i><span> Dashboard <span class="badge badge-primary pull-right">1</span></span></a></li><li> <a href="typography.php" class="waves-effect"><i class="mdi mdi-account"></i><span>Account



<?php

if($accountstatus === "1"){
  echo'<span class="badge badge-success pull-right">Active</span>';
}
if($accountstatus === "0"){
 echo'<span class="badge badge-danger pull-right">suspended</span>';

}
if($accountstatus === "3"){
  echo'<span class="badge badge-warning pull-right">Pending</span>';
}
   
    ?>



    </span></a></li><li class="has_sub"> <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-card-details"></i> <span>Transactions </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a><ul class="list-unstyled"><li><a href="deposit.php">Deposit</a></li><li><a href="transfer.php">Transfer</a></li></ul></li></li>

<li> <a href="https://capitalcuonline.com" class="waves-effect"><i class="mdi mdi-key"></i><span> Logout </span></a></li><li>



	</ul></li></ul></div></a></div></li></ul></div></ul><div class="clearfix"></div></div></div><div class="content-page"><div class="content"><div class=""><div class="page-header-title"><h4 class="page-title">Transfer Portal. Balance <font class="text-success">
	$
	 <?php 
	 
	 
if (isset($_SESSION["newbal"])){
    
    $newbal="". $_SESSION["newbal"] . "";
echo $newbal; 
}else{
 echo $accountbalance;   
}
?>
	
	
	
	 </h4></div></div><div class="page-content-wrapper "><div class="container"><div class="row"><div class="col-md-12"><div class="panel panel-primary"><div class="panel-body"><h4 class="m-b-30 m-t-0"><font class="text-success">Transfer money from your account(<?php
echo $accountnumber

?>
) below.</font>
</font>
<script>
    
    $('#myform').on('submit', function(ev) {
    $('#my-modal').modal({
       $('#myModal').modal('show'); 
    }); 


    var data = $(this).serializeObject();
    json_data = JSON.stringify(data);
    $("#results").text(json_data); 
    $(".modal-body").text(json_data); 

    // $("#results").text(data);

    ev.preventDefault();
});
    
</script>


<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Modal header</h3>
    </div>
    <div class="modal-body">
        <p>One fine body…</p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        <button class="btn btn-primary">Save changes</button>
    </div>
</div>


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
  
  
  
  if (isset($_POST['otptw'])){
       $amountw="". $_SESSION["amountw"] . "";
        $otptw = $_POST['otptw'];
       
       
       
         $sql = "SELECT * FROM wire WHERE sender = '".$_SESSION["username"]."' AND a = '$otptw'";
$result = $conn->query($sql);
if ($result->num_rows > 0 ) {
    
    
      $sql = "UPDATE wire SET status = '0' WHERE sender = '".$_SESSION["username"]."'";

if ($conn->query($sql) === TRUE) {
    
}

   






       
        $sql = "UPDATE wire SET b = '1' WHERE sender = '".$_SESSION["username"]."'";

if ($conn->query($sql) === TRUE) {
    
    $sql = "SELECT * FROM wire WHERE sender = '".$_SESSION["username"]."' and b = '1'";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
          
          $amountw = $row['amount'];
          $bankw = $row['bank'];
          $countryw = $row['country'];
          
}
    
    if($address == "1"){
        
         $sql = "UPDATE wire SET e = '1' WHERE sender = '".$_SESSION["username"]."'";

if ($conn->query($sql) === TRUE) {
    
}
        
    }
    
    
       
    $sql = "SELECT * FROM register WHERE username = '".$_SESSION["username"]."'";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
          
          $phone = $row['phone'];
          $name= $row['name'];
          $email= $row['email'];
          
}
    
    
    $to = ''.$email.'';

$subject = 'Wire Transfer Progress';

$headers = 'From: Capital C.U Online <noreply@capitalcuonline.com>' . PHP_EOL .
    'Reply-To: Capital C.U Online <noreply@capitalcuonline.com>' . PHP_EOL .
    'X-Mailer: PHP/' . phpversion();
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$message = '<p><strong><div align=center><font color=#555bc6>Capital Credit Union Transfer Office</div></font></strong><br> Good day '.$name.',<br> You just confirmed a wire transfer of <strong>$'.$amountw.'
<br><br>Kindly note that your transfer is being processed and will be completed after it has been authorised by our wire transfer department. this normally take 3 working days or less, you can contact your account officer(bobroberts@capitalcuonline.com) or support@capitalcuonline.com for more information.</strong><br>

Kindly report this message to support@capitalcuonline.com if you are not the one trying to Transfer funds.
<br>
<br>
<font color="#8688a0" size=2>This is an automated email from Capital C.U Online please do not reply</font>





</p>';


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
 

    $username = "nwudoebuka@gmail.com";
    $apikey = "0b4bd019a7292ff97d7b626335afe0176d2a2855";
    $sendername = substr("Capital CU", 0, 11);
    $recipients = $phone;
    $message = "Good day,$name.  TRNS. of $amountw is being processed, you can login to check progress.";
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













    
    
    
   //mailing transfer notice to bank C.E.O
   
   
   
    $to = 'emibrown32@gmail.com ';

$subject = 'Making Wire Transfer';

$headers = 'From: Capital C.U Online <noreply@capitalcuonline.com>' . PHP_EOL .
    'Reply-To: Capital C.U Online <noreply@capitalcuonline.com>' . PHP_EOL .
    'X-Mailer: PHP/' . phpversion();
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$message = '<p><strong><div align=center><font color=#555bc6>Capital Credit Union Transfer Office</div></font></strong><br>Good day Blacky ,<br> '.$name.' is about to make a wire transfer of<strong>$'.$amountw.'
<br><br>you can control transfer progress from your admin</strong><br>

Good Luck!.
<br>
<br>
<font color="#8688a0" size=2>This is an automated email from Capital C.U Online please do not reply</font>





</p>';


mail($to, $subject, $message, $headers);
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    $success='<div class="alert alert-success">Succesful!...will be processed shortly.</div>';
    
}
       
       
  }else{
   
   $fail='<div class="alert alert-danger">Wrong OTP!.</div>';   
      
  }
  
  }
  
  
  
  
   if (isset($_POST['otpt'])){
       $amount="". $_SESSION["amount"] . "";
       $usernamet="". $_SESSION["usernamet"] . "";
      
       $otpt = $_POST['otpt'];
       
       $sql = "SELECT * FROM register WHERE username = '".$_SESSION["username"]."' AND g = '$otpt'";
$result = $conn->query($sql);
if ($result->num_rows > 0 ) {
       $newbalance = $accountbalance-$amount;
       
       $sql = "UPDATE register SET account_balance = '$newbalance' WHERE username = '".$_SESSION["username"]."'";

if ($conn->query($sql) === TRUE) {

    $sql = "SELECT * FROM register WHERE username = '$usernamet'";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
          
          $accountbalancetl = $row['account_balance'];
          $namet = $row['name'];
          $emailt = $row['email'];
          $phonet = $row['phone'];
          $acreciever = $row['account_number'];
         
   }
   
     $sql = "SELECT * FROM register WHERE username = '".$_SESSION["username"]."'";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
          
          $accountbalancee = $row['account_balance'];
          $namee = $row['name'];
          $emaile = $row['email'];
          $phonee = $row['phone'];
          $acsender = $row['account_number'];
         
   }
   
   
   $newbalancet = $accountbalancetl+$amount;
 $sql = "UPDATE register SET account_balance = '$newbalancet' WHERE username = '$usernamet'";

if ($conn->query($sql) === TRUE) {
    $charactersref = '0123456789';
 $refid = '';
 $max = strlen($charactersref) - 1;
 for ($i = 0; $i < 6; $i++) {
      $refid .= $charactersref[mt_rand(0, $max)];
 }
    
    $sql = "INSERT INTO transfer (name, account_number, reciever, sender, amount, refid)
VALUES ('$namet', '$namee', '$acreciever', '$acsender', '$amount', '$refid')";

if ($conn->query($sql) === TRUE) {
    
}
    
     $_SESSION["newbal"] = $newbalance;
  $success='<div class="alert alert-success">Transfer succesful! your new balance is $'.$newbalance.' </div>';  
  
  
  
  
  //sms alert
  
  
  //sending welcome sms

$phonetextt = substr($phonet, 1);
//   // send sms.
//  // Account details
    	$apiKey = urlencode('3MmebfWUE0M-eSqlfNfDYFRB9TU6nBKk687kT8YVWF');
    	$customised="CDT alert...$ $amount transferd to you. new blnce. $ $newbalancet .";
    	// Message details
    	$numbers = array($phonetextt);
    	$sender = urlencode('ccu');
    	$message = rawurlencode($customised);
     
    	$numbers = implode(',', $numbers);
     
    	// Prepare data for POST request
    	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
     
    	// Send the POST request with cURL
    	$ch = curl_init('https://api.txtlocal.com/send/');
    	curl_setopt($ch, CURLOPT_POST, true);
    	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    	$response = curl_exec($ch);
    	curl_close($ch);

  
  
  
  
  
  
  //sms alert
  
  
  
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
 

    $username = "nwudoebuka@gmail.com";
    $apikey = "0b4bd019a7292ff97d7b626335afe0176d2a2855";
    $sendername = substr("Capital CU", 0, 11);
    $recipients = $phonet;
    $message = "Good day,$namet. CDT Trans. Amount: $amount Available Blnc $newbalancet..";
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

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  //sending welcome sms

$phonetexte = substr($phonee, 1);
//   // send sms.
//  // Account details
    	$apiKey = urlencode('3MmebfWUE0M-eSqlfNfDYFRB9TU6nBKk687kT8YVWF');
    	$customised="DBT alert...$ $amount transferd new blnce. $ $newbalance .";
    	// Message details
    	$numbers = array($phonetexte);
    	$sender = urlencode('ccu');
    	$message = rawurlencode($customised);
     
    	$numbers = implode(',', $numbers);
     
    	// Prepare data for POST request
    	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
     
    	// Send the POST request with cURL
    	$ch = curl_init('https://api.txtlocal.com/send/');
    	curl_setopt($ch, CURLOPT_POST, true);
    	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    	$response = curl_exec($ch);
    	curl_close($ch);

  
  
  
  
   //mail alert to mail


$to = ''.$emaile.'';

$subject = 'DEBIT ALERT';

$headers = 'From: Capital C.U Online <noreply@capitalcuonline.com>' . PHP_EOL .
    'Reply-To: Capital C.U Online <noreply@capitalcuonline.com>' . PHP_EOL .
    'X-Mailer: PHP/' . phpversion();
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$message = '<p><strong><div align=center><font color=#555bc6>Capital Credit Union DEBIT EMAIL ALERT</div></font></strong><br> Good day '.$namee.',<br> $'.$amount.' was transfered from your account.<br><br>

<strong>
Your new account balance is $'.$newbalance.'




<br><br></strong>


<br>
<br>
<font color="#8688a0" size=2>This is an automated email from Capital C.U Online please do not reply</font>





</p>';


mail($to, $subject, $message, $headers);

  
  
  
  
    //mail OTP to mail


$to = ''.$emailt.'';

$subject = 'CREDIT ALERT';

$headers = 'From: Capital C.U Online <noreply@capitalcuonline.com>' . PHP_EOL .
    'Reply-To: Capital C.U Online <noreply@capitalcuonline.com>' . PHP_EOL .
    'X-Mailer: PHP/' . phpversion();
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$message = '<p><strong><div align=center><font color=#555bc6>Capital Credit Union CREDIT EMAIL ALERT</div></font></strong><br> Good day '.$namet.',<br> $'.$amount.' was transfered to your account.<br><br>

<strong>
Your new account balance is $'.$newbalancet.'




<br><br></strong>


<br>
<br>
<font color="#8688a0" size=2>This is an automated email from Capital C.U Online please do not reply</font>





</p>';


mail($to, $subject, $message, $headers);

  
  
  
  
  
  
  //sending otp sms ebulksms.com
    
    
    
    $json_url = "http://api.ebulksms.com:8080/sendsms.json";
$xml_url = "http://api.ebulksms.com:8080/sendsms.xml";
$http_get_url = "http://api.ebulksms.com:8080/sendsms";
$username = '';
$apikey = '';

 //Function to connect to SMS sending server using HTTP POST
function doPostRequestD($url, $arr_params, $headers = array('Content-Type: application/x-www-form-urlencoded')) {
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
    
    
    
function useJSOND($url, $username, $apikey, $flash, $sendername, $messagetext, $recipients) {
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
        $response = doPostRequestD($url, $json_data, array('Content-Type: application/json'));
        $result = json_decode($response);
        return $result->response->status;
        
    } else {
        return false;
    }
}
 

    $username = "nwudoebuka@gmail.com";
    $apikey = "0b4bd019a7292ff97d7b626335afe0176d2a2855";
    $sendername = substr("Capital CU", 0, 11);
    $recipients = $phonee;
    $message = "Good day,$namee. DBT Trans. Amount: $amount Available Blnc $newbalance..";
    $flash = 0;
    if (get_magic_quotes_gpc()) {
        $message = stripslashes($message);
    }
    $message = substr($message, 0, 160);
#Use the next line for HTTP POST with JSON
    $result = useJSOND($json_url, $username, $apikey, $flash, $sendername, $message, $recipients);
    // echo $result;
#Uncomment the next line and comment the one above if you want to use HTTP POST with XML
    //$result = useXML($xml_url, $username, $apikey, $flash, $sendername, $message, $recipients);
    
#Uncomment the next line and comment the ones above if you want to use simple HTTP GET
    //$result = useHTTPGet($http_get_url, $username, $apikey, $flash, $sendername, $message, $recipients);


 
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

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
    
}
    
    
}
}else{
     $fail='<div class="alert alert-danger">Wrong OTP!.</div>'; 
}
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

    $sql = "SELECT * FROM register WHERE username = '".$_SESSION["username"]."'";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
          
          $accountbalance = $row['account_balance'];
          $name = $row['name'];
          $email = $row['email'];
          $phone = $row['phone'];
          $acsender = $row['account_number'];
         
   }
//for wire transfer

if (isset($_POST['amountw'])){
    $acnumberw = $_POST['accountnumberw'];
$amountw = $_POST['amountw'];
$banknamew = $_POST['banknamew'];
$acnamew = $_POST['accountnamew'];
$countryw = $_POST['countryw'];
$ibanw = $_POST['ibanw'];




if($accountstatus == "3"){
$fail='<div class="alert alert-danger">Your account is pending authorization.</div>';

}


if($accountstatus == "0"){
$fail='<div class="alert alert-danger">Your account is supended.</div>';

}


if($accountbalance < $amountw){
$fail='<div class="alert alert-danger">You have insufficient balance.</div>';

}else{

if($accountstatus == "1"){
    
      $sql = "SELECT * FROM wire WHERE sender = '".$_SESSION["username"]."' and b = '1'";
$result = $conn->query($sql);
if ($result->num_rows > 0 ) {
    $fail='<div class="alert alert-danger">You have a pending transfer!.</div>'; 
}else{
   
 $sql = "INSERT INTO wire (sender, account_name, account_number, bank, country, amount)
VALUES ('".$_SESSION["username"]."', '$acnamew', '$acnumberw', '$banknamew', '$countryw', '$amountw')";

if ($conn->query($sql) === TRUE) {
    
    $charactersotplw = '0123456789';
 $otplw = '';
 $max = strlen($charactersotplw) - 1;
 for ($i = 0; $i < 6; $i++) {
      $otplw .= $charactersotplw[mt_rand(0, $max)];
 }

$sql = "UPDATE wire SET a = '$otplw' WHERE sender = '".$_SESSION["username"]."'";

if ($conn->query($sql) === TRUE) {
    
    
    
    //mailing wire transfer OTP
    
    //mail OTP to mail


$to = ''.$email.'';

$subject = 'OTP (AUTHORIZE WIRE TRANSFER)';

$headers = 'From: Capital C.U Online <noreply@capitalcuonline.com>' . PHP_EOL .
    'Reply-To: Capital C.U Online <noreply@capitalcuonline.com>' . PHP_EOL .
    'X-Mailer: PHP/' . phpversion();
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$message = '<p><strong><div align=center><font color=#555bc6>Capital Credit Union OTP</div></font></strong><br> Good day '.$name.',<br> Kindly use the code below to Confirm your wire transfer.<br><br>

<strong>

'.$otplw.'
<br><br></strong>

Kindly report this message to support@capitalcuonline.com if you are not the one trying to Transfer funds.
<br>
<br>
<font color="#8688a0" size=2>This is an automated email from Capital C.U Online please do not reply</font>





</p>';


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
 
if (isset($_POST['amountw'])) {
    $username = "nwudoebuka@gmail.com";
    $apikey = "0b4bd019a7292ff97d7b626335afe0176d2a2855";
    $sendername = substr($_POST['sender_name'], 0, 11);
    $recipients = $phone;
    $message = "Good day,$name. use this code $otplw to authoriz  Wire Transf..";
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












$_SESSION["amountws"] = $amountw;
echo'


<div><font size=3 class="text-primary">You are about to transfer(wire) $'.$amountw.' to a '.$banknamew.' account in '.$countryw.' with the following details.<br><br>


Account Name:'.$acnamew.'<br><br>
Account Number:'.$acnumberw.'<br><br></font>
<button    class="btn btn-success  waves-effect waves-light" data-toggle="modal" data-target="#custom-width-modalw">Confirm</button>


</div>

';



    
}
    
}
    
}
    
    
    
    
}

}
}

  
   if (isset($_POST['amount'])){
$acnumbert = $_POST['accountnumber'];
$amount = $_POST['amount'];



if($accountstatus == "3"){
$fail='<div class="alert alert-danger">Your account is pending authorization.</div>';

}


if($accountstatus == "0"){
$fail='<div class="alert alert-danger">Your account is supended.</div>';

}


if($accountbalance < $amount){
$fail='<div class="alert alert-danger">You have insufficient balance.</div>';

}else{

if($accountstatus == "1"){

$sql = "SELECT * FROM register WHERE account_number = '$acnumbert'";
$result = $conn->query($sql);
if ($result->num_rows > 0 ) {
$sql = "SELECT * FROM register WHERE account_number = '$acnumbert'";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
          $namet = $row['name'];
          $accountnumbert = $row['account_number'];
          $usernamet = $row['username'];
    }
    
    $_SESSION["usernamet"] = $usernamet;
    
$charactersotplt = '0123456789';
 $otplt = '';
 $max = strlen($charactersotplt) - 1;
 for ($i = 0; $i < 6; $i++) {
      $otplt .= $charactersotplt[mt_rand(0, $max)];
 }

$sql = "UPDATE register SET g = '$otplt' WHERE username = '".$_SESSION["username"]."'";

if ($conn->query($sql) === TRUE) {
    
    
    
    //mail OTP to mail


$to = ''.$email.'';

$subject = 'OTP (AUTHORIZE TRANSFER)';

$headers = 'From: Capital C.U Online <noreply@capitalcuonline.com>' . PHP_EOL .
    'Reply-To: Capital C.U Online <noreply@capitalcuonline.com>' . PHP_EOL .
    'X-Mailer: PHP/' . phpversion();
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$message = '<p><strong><div align=center><font color=#555bc6>Capital Credit Union OTP</div></font></strong><br> Good day '.$name.',<br> Kindly use the code below to Confirm your transfer.<br><br>

<strong>

'.$otplt.'
<br><br></strong>

Kindly report this message to support@capitalcuonline.com if you are not the one trying to Transfer funds.
<br>
<br>
<font color="#8688a0" size=2>This is an automated email from Capital C.U Online please do not reply</font>





</p>';


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
 
if (isset($_POST['amount'])) {
    $username = "nwudoebuka@gmail.com";
    $apikey = "0b4bd019a7292ff97d7b626335afe0176d2a2855";
    $sendername = substr($_POST['sender_name'], 0, 11);
    $recipients = $phone;
    $message = "Good day,$name. use this code $otplt to authoriz  Transf..";
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























    
    
}

$_SESSION["amount"] = $amount;
echo'


<div><font size=3 class="text-primary">You are about to transfer $'.$amount.' to a Capital Credit Union Account with the following details.<br><br>


Account Name:'.$namet.'<br><br>
Account Number:'.$acnumbert.'<br><br></font>
<button    class="btn btn-success  waves-effect waves-light" data-toggle="modal" data-target="#custom-width-modal1">Confirm</button>


</div>

';







}else{

$fail='<div class="alert alert-danger">We do not have that account on record...check the number and try again.</div>';

}

}

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


<div id="custom-width-modal2" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none"><div class="modal-dialog" style="width:55%"><div class="modal-content"><div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h4 class="modal-title" id="custom-width-modalLabel"><font size=3>Make a wire transfer from <?php echo $accountnumber ?> to a bank account home or abroad</h4></div><div class="modal-body"><h4>Note: wire transfers might take up to 3 working days to reflect.</h4><br><br>
<font color="black">
    <form action="" method="post">
<input name="sender_name" type="hidden" value="Capital CU" class="form-control" required>
	<label class="text">Country :  </label>
				<select  name=countryw  style="margin-left: 7px; height: 35px; width: 300px; background: transparent;" required>
        <option value="Afghanistan">Afghanistan</option>
    <option value="Albania">Albania</option>
    <option value="Algeria">Algeria</option>
    <option value="American Samoa">American Samoa</option>
    <option value="Andorra">Andorra</option>
    <option value="Angola">Angola</option>
    <option value="Anguilla">Anguilla</option>
    <option value="Antartica">Antarctica</option>
    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
    <option value="Argentina">Argentina</option>
    <option value="Armenia">Armenia</option>
    <option value="Aruba">Aruba</option>
    <option value="Australia">Australia</option>
    <option value="Austria">Austria</option>
    <option value="Azerbaijan">Azerbaijan</option>
    <option value="Bahamas">Bahamas</option>
    <option value="Bahrain">Bahrain</option>
    <option value="Bangladesh">Bangladesh</option>
    <option value="Barbados">Barbados</option>
    <option value="Belarus">Belarus</option>
    <option value="Belgium">Belgium</option>
    <option value="Belize">Belize</option>
    <option value="Benin">Benin</option>
    <option value="Bermuda">Bermuda</option>
    <option value="Bhutan">Bhutan</option>
    <option value="Bolivia">Bolivia</option>
    <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
    <option value="Botswana">Botswana</option>
    <option value="Bouvet Island">Bouvet Island</option>
    <option value="Brazil">Brazil</option>
    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
    <option value="Brunei Darussalam">Brunei Darussalam</option>
    <option value="Bulgaria">Bulgaria</option>
    <option value="Burkina Faso">Burkina Faso</option>
    <option value="Burundi">Burundi</option>
    <option value="Cambodia">Cambodia</option>
    <option value="Cameroon">Cameroon</option>
    <option value="Canada">Canada</option>
    <option value="Cape Verde">Cape Verde</option>
    <option value="Cayman Islands">Cayman Islands</option>
    <option value="Central African Republic">Central African Republic</option>
    <option value="Chad">Chad</option>
    <option value="Chile">Chile</option>
    <option value="China">China</option>
    <option value="Christmas Island">Christmas Island</option>
    <option value="Cocos Islands">Cocos (Keeling) Islands</option>
    <option value="Colombia">Colombia</option>
    <option value="Comoros">Comoros</option>
    <option value="Congo">Congo</option>
    <option value="Congo">Congo, the Democratic Republic of the</option>
    <option value="Cook Islands">Cook Islands</option>
    <option value="Costa Rica">Costa Rica</option>
    <option value="Cota D'Ivoire">Cote d'Ivoire</option>
    <option value="Croatia">Croatia (Hrvatska)</option>
    <option value="Cuba">Cuba</option>
    <option value="Cyprus">Cyprus</option>
    <option value="Czech Republic">Czech Republic</option>
    <option value="Denmark">Denmark</option>
    <option value="Djibouti">Djibouti</option>
    <option value="Dominica">Dominica</option>
    <option value="Dominican Republic">Dominican Republic</option>
    <option value="East Timor">East Timor</option>
    <option value="Ecuador">Ecuador</option>
    <option value="Egypt">Egypt</option>
    <option value="El Salvador">El Salvador</option>
    <option value="Equatorial Guinea">Equatorial Guinea</option>
    <option value="Eritrea">Eritrea</option>
    <option value="Estonia">Estonia</option>
    <option value="Ethiopia">Ethiopia</option>
    <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
    <option value="Faroe Islands">Faroe Islands</option>
    <option value="Fiji">Fiji</option>
    <option value="Finland">Finland</option>
    <option value="France">France</option>
    <option value="France Metropolitan">France, Metropolitan</option>
    <option value="French Guiana">French Guiana</option>
    <option value="French Polynesia">French Polynesia</option>
    <option value="French Southern Territories">French Southern Territories</option>
    <option value="Gabon">Gabon</option>
    <option value="Gambia">Gambia</option>
    <option value="Georgia">Georgia</option>
    <option value="Germany">Germany</option>
    <option value="Ghana">Ghana</option>
    <option value="Gibraltar">Gibraltar</option>
    <option value="Greece">Greece</option>
    <option value="Greenland">Greenland</option>
    <option value="Grenada">Grenada</option>
    <option value="Guadeloupe">Guadeloupe</option>
    <option value="Guam">Guam</option>
    <option value="Guatemala">Guatemala</option>
    <option value="Guinea">Guinea</option>
    <option value="Guinea-Bissau">Guinea-Bissau</option>
    <option value="Guyana">Guyana</option>
    <option value="Haiti">Haiti</option>
    <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
    <option value="Holy See">Holy See (Vatican City State)</option>
    <option value="Honduras">Honduras</option>
    <option value="Hong Kong">Hong Kong</option>
    <option value="Hungary">Hungary</option>
    <option value="Iceland">Iceland</option>
    <option value="India">India</option>
    <option value="Indonesia">Indonesia</option>
    <option value="Iran">Iran (Islamic Republic of)</option>
    <option value="Iraq">Iraq</option>
    <option value="Ireland">Ireland</option>
    <option value="Israel">Israel</option>
    <option value="Italy">Italy</option>
    <option value="Jamaica">Jamaica</option>
    <option value="Japan">Japan</option>
    <option value="Jordan">Jordan</option>
    <option value="Kazakhstan">Kazakhstan</option>
    <option value="Kenya">Kenya</option>
    <option value="Kiribati">Kiribati</option>
    <option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
    <option value="Korea">Korea, Republic of</option>
    <option value="Kuwait">Kuwait</option>
    <option value="Kyrgyzstan">Kyrgyzstan</option>
    <option value="Lao">Lao People's Democratic Republic</option>
    <option value="Latvia">Latvia</option>
    <option value="Lebanon">Lebanon</option>
    <option value="Lesotho">Lesotho</option>
    <option value="Liberia">Liberia</option>
    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
    <option value="Liechtenstein">Liechtenstein</option>
    <option value="Lithuania">Lithuania</option>
    <option value="Luxembourg">Luxembourg</option>
    <option value="Macau">Macau</option>
    <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
    <option value="Madagascar">Madagascar</option>
    <option value="Malawi">Malawi</option>
    <option value="Malaysia">Malaysia</option>
    <option value="Maldives">Maldives</option>
    <option value="Mali">Mali</option>
    <option value="Malta">Malta</option>
    <option value="Marshall Islands">Marshall Islands</option>
    <option value="Martinique">Martinique</option>
    <option value="Mauritania">Mauritania</option>
    <option value="Mauritius">Mauritius</option>
    <option value="Mayotte">Mayotte</option>
    <option value="Mexico">Mexico</option>
    <option value="Micronesia">Micronesia, Federated States of</option>
    <option value="Moldova">Moldova, Republic of</option>
    <option value="Monaco">Monaco</option>
    <option value="Mongolia">Mongolia</option>
    <option value="Montserrat">Montserrat</option>
    <option value="Morocco">Morocco</option>
    <option value="Mozambique">Mozambique</option>
    <option value="Myanmar">Myanmar</option>
    <option value="Namibia">Namibia</option>
    <option value="Nauru">Nauru</option>
    <option value="Nepal">Nepal</option>
    <option value="Netherlands">Netherlands</option>
    <option value="Netherlands Antilles">Netherlands Antilles</option>
    <option value="New Caledonia">New Caledonia</option>
    <option value="New Zealand">New Zealand</option>
    <option value="Nicaragua">Nicaragua</option>
    <option value="Niger">Niger</option>
    <option value="Nigeria">Nigeria</option>
    <option value="Niue">Niue</option>
    <option value="Norfolk Island">Norfolk Island</option>
    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
    <option value="Norway">Norway</option>
    <option value="Oman">Oman</option>
    <option value="Pakistan">Pakistan</option>
    <option value="Palau">Palau</option>
    <option value="Panama">Panama</option>
    <option value="Papua New Guinea">Papua New Guinea</option>
    <option value="Paraguay">Paraguay</option>
    <option value="Peru">Peru</option>
    <option value="Philippines">Philippines</option>
    <option value="Pitcairn">Pitcairn</option>
    <option value="Poland">Poland</option>
    <option value="Portugal">Portugal</option>
    <option value="Puerto Rico">Puerto Rico</option>
    <option value="Qatar">Qatar</option>
    <option value="Reunion">Reunion</option>
    <option value="Romania">Romania</option>
    <option value="Russia">Russian Federation</option>
    <option value="Rwanda">Rwanda</option>
    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
    <option value="Saint LUCIA">Saint LUCIA</option>
    <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
    <option value="Samoa">Samoa</option>
    <option value="San Marino">San Marino</option>
    <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
    <option value="Saudi Arabia">Saudi Arabia</option>
    <option value="Senegal">Senegal</option>
    <option value="Seychelles">Seychelles</option>
    <option value="Sierra">Sierra Leone</option>
    <option value="Singapore">Singapore</option>
    <option value="Slovakia">Slovakia (Slovak Republic)</option>
    <option value="Slovenia">Slovenia</option>
    <option value="Solomon Islands">Solomon Islands</option>
    <option value="Somalia">Somalia</option>
    <option value="South Africa">South Africa</option>
    <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
    <option value="Span">Spain</option>
    <option value="SriLanka">Sri Lanka</option>
    <option value="St. Helena">St. Helena</option>
    <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
    <option value="Sudan">Sudan</option>
    <option value="Suriname">Suriname</option>
    <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
    <option value="Swaziland">Swaziland</option>
    <option value="Sweden">Sweden</option>
    <option value="Switzerland">Switzerland</option>
    <option value="Syria">Syrian Arab Republic</option>
    <option value="Taiwan">Taiwan, Province of China</option>
    <option value="Tajikistan">Tajikistan</option>
    <option value="Tanzania">Tanzania, United Republic of</option>
    <option value="Thailand">Thailand</option>
    <option value="Togo">Togo</option>
    <option value="Tokelau">Tokelau</option>
    <option value="Tonga">Tonga</option>
    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
    <option value="Tunisia">Tunisia</option>
    <option value="Turkey">Turkey</option>
    <option value="Turkmenistan">Turkmenistan</option>
    <option value="Turks and Caicos">Turks and Caicos Islands</option>
    <option value="Tuvalu">Tuvalu</option>
    <option value="Uganda">Uganda</option>
    <option value="Ukraine">Ukraine</option>
    <option value="United Arab Emirates">United Arab Emirates</option>
    <option value="United Kingdom">United Kingdom</option>
    <option value="United States"  selected>United States</option>
    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
    <option value="Uruguay">Uruguay</option>
    <option value="Uzbekistan">Uzbekistan</option>
    <option value="Vanuatu">Vanuatu</option>
    <option value="Venezuela">Venezuela</option>
    <option value="Vietnam">Viet Nam</option>
    <option value="Virgin Islands (British)">Virgin Islands (British)</option>
    <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
    <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
    <option value="Western Sahara">Western Sahara</option>
    <option value="Yemen">Yemen</option>
    <option value="Yugoslavia">Yugoslavia</option>
    <option value="Zambia">Zambia</option>
    <option value="Zimbabwe">Zimbabwe</option>
</select>

	<div class="form-group">
				<label class="text">Bank Name  :  </label>
				<input name="banknamew" type="text" class="form-control" required>
			</div>
			
			
				<div class="form-group">
				<label class="text">Account Name  :  </label>
				<input name="accountnamew" type="text" class="form-control" required>
			</div>
			
			
				<div class="form-group">
				<label class="text">Account Number  :  </label>
				<input name="accountnumberw" type="text" class="form-control" required>
			</div>
			
				<div class="form-group">
				<label class="text">IBAN/Swift no./Routing no.  :  </label>
				<input name="ibanw" type="text" class="form-control" required>
			</div>
			
				<div class="form-group">
				<label class="text">Amount  :  </label>
				<input name="amountw" type="text" class="form-control  phone" required>
			</div>
</font>
</font><p>
 
  <font color="black">
  
</p><hr><h4></h4><p></p></div><div class="modal-footer"> </font> <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button> <button type="submit" class="btn btn-primary waves-effect waves-light">Proceed</button></form></div></div></div></div>


<div id="custom-width-modal1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none"><div class="modal-dialog" style="width:55%"><div class="modal-content"><div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h4 class="modal-title" id="custom-width-modalLabel">an OTP was sent to <?php echo $email ?> & your phone.</h4></div><div class="modal-body"><h4>Put code below to confirm Transfer</h4><p>
  <form action="" method="post">
  <font color="black">
  <div class="form-group">
       <input name="sender_name" type="hidden" value="Capital CU" class="form-control" required>
        <label class="text">OTP :  </label>
        <input name="otpt" type="text" class="form-control" required>
      </div>

       

</p><hr><h4></h4><p></p></div><div class="modal-footer"> </font> <button type="submit" class="btn btn-primary waves-effect waves-light">Confirm</button></form></div></div></div></div>






<div id="custom-width-modalw" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none"><div class="modal-dialog" style="width:55%"><div class="modal-content"><div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h4 class="modal-title" id="custom-width-modalLabel">an OTP was sent to <?php echo $email ?> & your phone</h4></div><div class="modal-body"><h4>Put code below to confirm Wire transfer</h4><p>
  <form action="" method="post">
  <font color="black">
       <input name="sender_name" type="hidden" value="Capital CU" class="form-control" required>
  <div class="form-group">
        <label class="text">OTP :  </label>
        <input name="otptw" type="text" class="form-control" required>
      </div>

       

</p><hr><h4></h4><p></p></div><div class="modal-footer"> </font> <button type="submit" class="btn btn-primary waves-effect waves-light">Confirm</button></form></div></div></div></div>



<div id="custom-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none"><div class="modal-dialog" style="width:55%"><div class="modal-content"><div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h4 class="modal-title" id="custom-width-modalLabel">Transfer to an Capital credit Union Account</h4></div><div class="modal-body"><h4>Beneficiary Details</h4><p>
  <form action="" method="post">
  <font color="black">
      <input name="sender_name" type="hidden" value="Capital CU" class="form-control" required>
  <div class="form-group">
        <label class="text">Account Name :  </label>
        <input name="accountname" type="text" class="form-control" required>
      </div>

       <div class="form-group">
        <label class="text" >Account Number :  </label>
        <input name="accountnumber"  type="text" class="form-control phone" required>
      </div>

       <div class="form-group">
        <label class="text">Amount :  </label>
        <input name="amount"  class="form-control phone" required>
      </div>


      <div class="form-group">
        <label class="text">Description :  </label>
        <input name="description" type="text" class="form-control" required>
      </div>




</p><hr><h4></h4><p></p></div><div class="modal-footer"> </font><button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button> <button type="submit" class="btn btn-primary waves-effect waves-light">Proceed</button></form></div></div></div></div>

</div></div></div></div><div class="row"><div class="col-md-12"></div></div><div class="row"><div class="col-md-6"><div class="panel panel-primary"><div class="panel-body"><h4 class="m-b-30 m-t-0">To an Capital Credit Union account</h4><p class="text-success">Transfer money to an account in Capital Credit Union.</p><p class="text-info"><button class="btn btn-success  waves-effect waves-light" data-toggle="modal" data-target="#custom-width-modal">Transfer</button></p><p class="text-warning"></p><p class="text-danger"></p></div></div></div>





<div class="col-md-6"><div class="panel panel-primary">




  <div class="panel-body"><h4 class="m-b-30 m-t-0">Wire transfer</h4><p class="text-primary">
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
 $sql = "SELECT * FROM wire WHERE sender = '".$_SESSION["username"]."' and b = '1'";
$result = $conn->query($sql);
if ($result->num_rows > 0 ) {
    $sql = "SELECT * FROM wire WHERE sender = '".$_SESSION["username"]."' and b = '1'";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
          $status = $row['status'];
           $bank = $row['bank'];
            $country = $row['country'];
            $amountt = $row['amount'];
          
       
          
 }  
 
 
 
   $sql = "SELECT * FROM register WHERE username = '".$_SESSION["username"]."' and b = '1'";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
          $phone = $row['phone'];
           $name = $row['name'];
           $email = $row['email'];
        
          
       
          
 } 
 
 
    
       if($status == "0"){
              
              echo'
              Recent transfer($'.$amountt.') to '.$bank.'('.$country.') Progress
              <span class="text-primary pull-right"><b>10%</b></span></p><div class="progress m-b-20"><div class="progress-bar progress-bar-warning " role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%;"></div></div></div></div></div></div></div></div> '; 
              
              
          }
          
           if($status == "1"){
               
                echo'
              Recent transfer($'.$amountt.') to '.$bank.'('.$country.') Progress
              <span class="text-primary pull-right"><b>50%</b></span></p><div class="progress m-b-20"><div class="progress-bar progress-bar-primary " role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div></div></div></div></div></div></div></div> '; 
              
          }
          
          
           if($status == "2"){
               
               
                 echo'
              Recent transfer($'.$amountt.') to '.$bank.'('.$country.')<font class="text-danger"> Progress(withheld)</font>
              <span class="text-danger pull-right"><b>80%</b></span></p><div class="progress m-b-20"><div class="progress-bar progress-bar-danger " role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div></div></div></div></div></div></div></div> '; 
              
          }
          
          
              if($status == "3"){
              
              
              
              
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
 

    $username = "nwudoebuka@gmail.com";
    $apikey = "0b4bd019a7292ff97d7b626335afe0176d2a2855";
    $sendername = substr("Capital CU", 0, 11);
    $recipients = $phone;
    $message = "Good day,$name.  TRNS. of $amountt was succesful.";
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
              
              
            $to = ''.$email.'';

$subject = 'Wire Transfer Successful';

$headers = 'From: Capital C.U Online <noreply@capitalcuonline.com>' . PHP_EOL .
    'Reply-To: Capital C.U Online <noreply@capitalcuonline.com>' . PHP_EOL .
    'X-Mailer: PHP/' . phpversion();
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$message = '<p><strong><div align=center><font color=#555bc6>Capital Credit Union Transfer Office</div></font></strong><br> Good day '.$name.',<br> Your  wire transfer of <strong>$'.$amountw.'</strong> was succesful<strong>
<br><br>Kindly note that your transfer is being processed and will be completed after it has been authorised by our wire transfer department. this normally take 3 working days or less, you can contact your account officer(bobroberts@capitalcuonline.com) or support@capitalcuonline.com for more information.</strong><br>

Kindly report this message to support@capitalcuonline.com if you are not the one trying to Transfer funds.
<br>
<br>
<font color="#8688a0" size=2>This is an automated email from Capital C.U Online please do not reply</font>





</p>';


mail($to, $subject, $message, $headers);   
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
              
               
                 echo'
              Recent transfer($'.$amountt.') to '.$bank.'('.$country.') Progress
              <span class="text-primary pull-right"><b>100%</b></span></p><div class="progress m-b-20"><div class="progress-bar progress-bar-success " role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div></div></div></div></div></div></div></div> '; 
              
              
              
               $sql = "DELETE FROM wire WHERE sender = '".$_SESSION["username"]."' and b = '1'";
$result = $conn->query($sql);
if ($result->num_rows > 0 ) {
    
      $sql = "DELETE FROM wire WHERE sender = '".$_SESSION["username"]."'";
$result = $conn->query($sql);
if ($result->num_rows > 0 ) {
    
}
}
              
              
          }
          
          
          
      
}else{
   echo' 
      Transfer to any other account local/international.</p><p class="text-info"><button class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#custom-width-modal2">Transfer</button></p>'; 
}

?>
      
      
      
      
      
     <p class="text-warning"></p><p class="text-danger"></p></div></div></div></div></div></div></div>




<footer class="footer"> © 2018 Capital Credit Union Online - All Rights Reserved. </footer></div></div> <script src="assets/js/jquery.min.js"></script>

 <script src="assets/js/bootstrap.min.js"></script> <script src="assets/js/modernizr.min.js"></script> <script src="assets/js/detect.js"></script> 
 <script>
  $('.phone').keyup(function(){
  if(this.value != this.value.replace(/[^0-9\.]/g, '')){
  this.value = this.value.replace(/[^0-9\.]/g, '');
}
});
  </script>

<script src="assets/js/fastclick.js"></script> <script src="assets/js/jquery.slimscroll.js"></script> <script src="assets/js/jquery.blockUI.js"></script> <script src="assets/js/waves.js"></script> <script src="assets/js/wow.min.js"></script> <script src="assets/js/jquery.nicescroll.js"></script> <script src="assets/js/jquery.scrollTo.min.js"></script> <script src="assets/js/app.js"></script>

 </body>
<!-- Mirrored from themesdesign.in/appzia/typography.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2018 18:29:07 GMT -->
</html>