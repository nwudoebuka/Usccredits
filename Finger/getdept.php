

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


$sql = "SELECT Department FROM fp_studentinfo";
$result = $conn->query($sql);
$fingerArray = [];
$tempArray =[];
$tem =[];
$all = array('Department'=>"All");
array_push($tem,$all);
while($row = $result->fetch_assoc()) {
         
          
          array_push($tem,$row);
          //echo"$finger";
           //$tem = $row;
 

          
}
 $json = json_encode(array('result'=>$tem));
// $getfingerprints = json_encode($fingerArray);
// var_dump($fingerArray[0]['fingerprint']);
echo" $json";

?>
