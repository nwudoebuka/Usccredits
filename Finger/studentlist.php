 <?php
$servername = "localhost";
$username = "usccredi_001";
$password = "An0therrichard3303";
$dbname = "usccredi_001";
$date = date('m-d-Y');
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$one=$_GET['one'];
$two=$_GET['two'];


$sql = "SELECT * FROM fp_dept WHERE id='$one' AND level='$two'";

$result = $conn->query($sql);
$datatobesent = [];
if ($result->num_rows >0) {
 
 
 while($row = $result->fetch_assoc()) {
 
 array_push($datatobesent,$row);
 
 
 
 }
  $json = json_encode($datatobesent);

 
} else {
 echo "No Results Found.";
}
 echo $json;
$conn->close();
?>