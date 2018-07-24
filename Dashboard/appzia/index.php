<?php
// Start the session
session_start();
?>

<!DOCTYPE html><html>
<!-- Mirrored from themesdesign.in/appzia/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2018 18:26:35 GMT -->
<head><meta charset="utf-8" /><title>Dashboard</title><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /><meta content="Admin Dashboard" name="description" /><meta content="ThemeDesign" name="author" /><meta http-equiv="X-UA-Compatible" content="IE=edge" /><link rel="shortcut icon" href="assets/images/favicon.ico"><link rel="stylesheet" href="assets/plugins/morris/morris.css"><link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"><link href="assets/css/icons.css" rel="stylesheet" type="text/css"><link href="assets/css/style.css" rel="stylesheet" type="text/css"><script>
var data = [
      { y: '2014', a: 50, b: 90},
      { y: '2015', a: 65,  b: 75},
      { y: '2016', a: 50,  b: 50},
      { y: '2017', a: 75,  b: 60},
      { y: '2018', a: 80,  b: 65},
      { y: '2019', a: 90,  b: 70},
      { y: '2020', a: 100, b: 75},
      { y: '2021', a: 115, b: 75},
      { y: '2022', a: 120, b: 85},
      { y: '2023', a: 145, b: 85},
      { y: '2024', a: 160, b: 95}
    ],
    config = {
      data: data,
      xkey: 'y',
      ykeys: ['a', 'b'],
      labels: ['Total Income', 'Total Outcome'],
      fillOpacity: 0.6,
      hideHover: 'auto',
      behaveLikeLine: true,
      resize: true,
      pointFillColors:['#ffffff'],
      pointStrokeColors: ['black'],
      lineColors:['gray','red']
  };
config.element = 'area-chart';
Morris.Area(config);
config.element = 'line-chart';
Morris.Line(config);
config.element = 'bar-chart';
Morris.Bar(config);
config.element = 'stacked';
config.stacked = true;
Morris.Bar(config);
Morris.Donut({
  element: 'pie-chart',
  data: [
    {label: "Friends", value: 30},
    {label: "Allies", value: 15},
    {label: "Enemies", value: 45},
    {label: "Neutral", value: 10}
  ]
});
</script></head>





<body class="fixed-left"><div id="wrapper"><div class="topbar"><div class="topbar-left"><div class="text-center"> <a href="index.php" class="logo">
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
 
 if (isset($_SESSION["username"])){
   }else{
echo'<script>window.location = 

"https://usccredits.com"</script>';
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
            $dp = $row['e'];
   }

//setting values for transactions performed
   $sql = "SELECT * FROM transfer WHERE account_number = '".$accountnumber."'";
$result = $conn->query($sql);
if ($result->num_rows > 0 ) {
  
$sql = "SELECT * FROM transfer WHERE account_number = '".$accountnumber."'";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
          $name = $row['name'];
          $accountnumber = $row['account_number'];
          $reciever = $row['reciever'];
          $sender = $row['sender'];
          $amount = $row['amount'];
          $date = $row['dateid'];
        
          
   }


}



}else{

//what happens if it doesnt get rows wia session exists
  

}
}else{

//what happens if session aint set.

}
?>


  <img src="assets/images/capital.jpg"></a> <a href="index.php" class="logo-sm"><img src="assets/images/logo_sm.png"></a></div></div><div class="navbar navbar-default" role="navigation"><div class="container"><div class=""><div class="pull-left"> <button type="button" class="button-menu-mobile open-left waves-effect waves-light"> <i class="ion-navicon"></i> </button> <span class="clearfix"></span></div><form class="navbar-form pull-left" role="search"><div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button></form><ul class="nav navbar-nav navbar-right pull-right"><li class="dropdown hidden-xs"> <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light notification-icon-box" data-toggle="dropdown" aria-expanded="true"> <i class="fa fa-bell"></i> <span class="badge badge-xs badge-danger"></span> </a><ul class="dropdown-menu dropdown-menu-lg noti-list-box"><li class="text-center notifi-title">Notification <span class="badge badge-xs badge-success">3</span></li><li class="list-group"> <a href="javascript:void(0);" class="list-group-item"><div class="media"><div class="media-heading">Your order is placed</div><p class="m-0"> <small>Dummy text of the printing and typesetting industry.</small></p></div> </a> <a href="javascript:void(0);" class="list-group-item"><div class="media"><div class="media-body clearfix"><div class="media-heading">New Message received</div><p class="m-0"> <small>You have 87 unread messages</small></p></div></div> </a> <a href="javascript:void(0);" class="list-group-item"><div class="media"><div class="media-body clearfix"><div class="media-heading">Your item is shipped.</div><p class="m-0"> <small>It is a long established fact that a reader will</small></p></div></div> </a> <a href="javascript:void(0);" class="list-group-item"> <small class="text-primary">See all notifications</small> </a></li></ul></li><li class="hidden-xs"> <a href="#" id="btn-fullscreen" class="waves-effect waves-light notification-icon-box"><i class="mdi mdi-fullscreen"></i></a></li><li class="dropdown"><?php echo '<a href="https://usccredits.com/Dashboard/appzia/'.$dp.'" class="profile waves-effect waves-light" aria-expanded="true"><img src='.$dp.' alt="user-img" class="img-circle"></a>'?><ul class="dropdown-menu"><li><a href="javascript:void(0)"> Profile</a></li><li><a href="javascript:void(0)"><span class="badge badge-success pull-right">5</span> Settings </a></li><li><a href="javascript:void(0)"> Lock screen</a></li><li class="divider"></li><li><a href="javascript:void(0)"> Logout</a></li></ul></li></ul></div></div></div></div><div class="left side-menu"><div class="sidebar-inner slimscrollleft"><div id="sidebar-menu"><ul><li class="menu-title">Menu</li><li> <a href="index.php" class="waves-effect"><i class="mdi mdi-home"></i><span> Dashboard <span class="badge badge-primary pull-right">1</span></span></a></li><li> <a href="typography.php" class="waves-effect"><i class="mdi mdi-account"></i><span>Account


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

<li> <a href="https://usccredits.com" class="waves-effect"><i class="mdi mdi-key"></i><span> Logout </span></a></li><li>

    </ul></div><div class="clearfix"></div></div></div><div class="content-page"><div class="content"><div class=""><div class="page-header-title"><h4 class="page-title">Welcome <?php
echo $name
  ?></h4><h4 class="page-title">Account Balance:$<?php
echo $accountbalance
?>
</h4></div></div><div class="page-content-wrapper "><div class="container"><div class="row"><div class="col-sm-6 col-lg-3"><div class="panel text-center"><div class="panel-heading"><h4 class="panel-title text-muted font-light">Widrawals</h4></div><div class="panel-body p-t-10"><h2 class="m-t-0 m-b-15"><i class="mdi mdi-arrow-down text-success m-r-10"></i><b>0</b></h2><p class="text-muted m-b-0 m-t-20"><b>Your</b>&nbsptotal number of widrawals</p></div></div></div><div class="col-sm-6 col-lg-3"><div class="panel text-center"><div class="panel-heading"><h4 class="panel-title text-muted font-light">Deposits</h4></div><div class="panel-body p-t-10"><h2 class="m-t-0 m-b-15"><i class="mdi mdi-arrow-up text-success m-r-10"></i><b>0</b></h2><p class="text-muted m-b-0 m-t-20"><b>Your</b> &nbsptotal number of deposits made</p></div></div></div><div class="col-sm-6 col-lg-3"><div class="panel text-center"><div class="panel-heading"><h4 class="panel-title text-muted font-light">Mobile Deposits</h4></div><div class="panel-body p-t-10"><h2 class="m-t-0 m-b-15"><i class="mdi mdi-arrow-up text-success m-r-10"></i><b>0</b></h2><p class="text-muted m-b-0 m-t-20"><b>Your</b>&nbsptotal number of mobile deposits made</p></div></div></div><div class="col-sm-6 col-lg-3"><div class="panel text-center"><div class="panel-heading"><h4 class="panel-title text-muted font-light">Transfers</h4></div><div class="panel-body p-t-10"><h2 class="m-t-0 m-b-15"><i class="mdi mdi-arrow-down text-success m-r-10"></i><b>0</b></h2><p class="text-muted m-b-0 m-t-20"><b>Your</b>&nbsptotal number of transfers made</p></div></div></div></div><div class="row"><div class="col-lg-4"><div class="panel panel-primary"><div class="panel-body"><h4 class="m-t-0">Description</h4><ul class="list-inline widget-chart m-t-20 text-center"><li><h4 class=""><b>$500000</b></h4><p class="text-muted m-b-0">Account Limit</p></li><li><h4 class=""><b>       </b></h4><p class="text-muted m-b-0">         </p></li><li><h4 class=""><b>           </b></h4><p class="text-muted m-b-0">               </p></li></ul><style>#area-chart,
#line-chart,
#bar-chart,
#stacked,
#pie-chart{
  min-height: 250px;
}</style>
</div></div></div><div class="col-lg-4"><div class="panel panel-primary"><div class="panel-body"><h4 class="m-t-0">Card Activity</h4><ul class="list-inline widget-chart m-t-20 text-center"><li><h4 class=""><b>$0.00</b></h4><p class="text-muted m-b-0">Today</p></li><li><h4 class=""><b>$0.00</b></h4><p class="text-muted m-b-0">Last week</p></li><li><h4 class=""><b>$0.00</b></h4><p class="text-muted m-b-0">Last Month</p></li></ul></div></div></div><div class="col-lg-4"><div class="panel panel-primary"><div class="panel-body"><h4 class="m-t-0">Overview</h4><ul class="list-inline widget-chart m-t-20 text-center"><li><h4 class=""><b><?php

if($accountstatus === "1"){
  echo'Active';
}
if($accountstatus === "0"){
 echo'Suspended';

}
if($accountstatus === "3"){
  echo'Pending';
  
}
   
    ?></b></h4><p class="text-muted m-b-0">Status</p></li><li><h4 class=""><b>$200000</b></h4><p class="text-muted m-b-0">Loan Eligible</p></li><li><h4 class=""><b><?php
echo $accounttype

?></b></h4><p class="text-muted m-b-0">Type</p></li></ul></div></div></div></div><div class="row"><div class="col-md-7"><div class="panel"><div class="panel-body"><h4 class="m-b-30 m-t-0">Recent Transactions</h4><div class="row"><div class="col-xs-12"><div class="table-responsive"><table class="table table-hover m-b-0"><thead><tr><th>Name</th><th>Acc. Number</th><th>Type</th><th>Ref.ID</th><th>Date</th><th>Amount</th></tr></thead><tbody>

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

   if (isset($_SESSION["username"])){

$username="". $_SESSION["username"] . "";
$password="". $_SESSION["password"] . "";


//setting values for transactions performed
   $sql = "SELECT * FROM transfer WHERE sender = '".$accountnumber."'";
$result = $conn->query($sql);
if ($result->num_rows > 0 ) {
  
$sql = "SELECT * FROM transfer WHERE sender = '".$accountnumber."'";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
          $recievername = $row['name'];
          $sendername = $row['account_number'];
          $recievernumber = $row['reciever'];
          $sendernumber = $row['sender'];
          $amount = $row['amount'];
          $date = $row['dateid'];
          $refid = $row['refid'];
      echo' <tr><td>'.$recievername.'</td><td>'.$recievernumber.'</td><td>Debit</td><td>'.$refid.'</td><td>'.$date.'</td><td>$'.$amount.'</td></tr>';    
   }


}else{

//what happens if it doesnt get rows wia session exists
  

}

}else{

//what happens if session aint set.

}

$sql = "SELECT * FROM transfer WHERE reciever = '".$accountnumber."'";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
          $recievername = $row['name'];
          $sendername = $row['account_number'];
          $recievernumber = $row['reciever'];
          $sendernumber = $row['sender'];
          $amount = $row['amount'];
          $date = $row['dateid'];
          $refid = $row['refid'];
      echo' <tr><td>'.$recievername.'</td><td>'.$recievernumber.'</td><td>Credit</td><td>'.$refid.'</td><td>'.$date.'</td><td>$'.$amount.'</td></tr>';    
   }



?>
 



 </tbody></table></div></div></div></div></div></div><div class="col-md-5"><div class="panel"><div class="panel-body"><h4 class="m-b-30 m-t-0"><?php

echo $accountnumber

?></h4><p class="font-600 m-b-5">Account completion<?php
if ($transferstatus === "1"){
echo '<span class="text-primary pull-right"><b>100%</b></span></p><div class="progress m-b-20"><div class="progress-bar progress-bar-success " role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div></div></div></div></div></div></div></div>';
}else{

echo'<span class="text-primary pull-right"><b>80%</b></span></p><div class="progress m-b-20"><div class="progress-bar progress-bar-warning " role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div></div></div></div></div></div></div></div> '; 
}


  ?></div></div><footer class="footer"> © <?php $year=date('Y'); echo"$year";?> Usc Credit Union Online - All Rights Reserved. </footer></div></div> <script src="assets/js/jquery.min.js"></script> <script src="assets/js/bootstrap.min.js"></script> <script src="assets/js/modernizr.min.js"></script> <script src="assets/js/detect.js"></script> <script src="assets/js/fastclick.js"></script> <script src="assets/js/jquery.slimscroll.js"></script> <script src="assets/js/jquery.blockUI.js"></script> <script src="assets/js/waves.js"></script> <script src="assets/js/wow.min.js"></script> <script src="assets/js/jquery.nicescroll.js"></script> <script src="assets/js/jquery.scrollTo.min.js"></script> <script src="assets/plugins/raphael/raphael-min.js"></script> <script src="assets/plugins/morris/morris.min.js"></script>    <script src="assets/plugins/raphael/raphael-min.js"></script><script src="assets/pages/dashborad.js"></script> <script src="assets/js/app.js"></script> 

</body>

<!-- Mirrored from themesdesign.in/appzia/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 Jan 2018 18:27:12 GMT -->
</html>