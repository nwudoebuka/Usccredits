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

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
                
</head>
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


$sql = "SELECT * FROM register WHERE address !='1'";
$result = $conn->query($sql);
if ($result->num_rows > 0 ) {
$sql = "SELECT * FROM register WHERE address !='1'";
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


$sql = "SELECT * FROM wire WHERE e!='1'";
$result = $conn->query($sql);
if ($result->num_rows > 0 ) {
$sql = "SELECT * FROM wire WHERE e!='1'";
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
$fail='<div class="alert alert-danger">There are no wire transfers.</div>';

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
        
	
</body>
</html>