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
$one=$_POST['dept'];
$two = $_POST['level'];
$sql = "SELECT department,level FROM fp_dept WHERE id='$one' AND level='$two'";
$result = $conn->query($sql);
if ($result->num_rows >0) {
    $fp = fopen('file.csv', 'w');
    $list = array("department","level");
    fputcsv($fp, $list);
 while($row = $result->fetch_assoc()) {
 
 fputcsv($fp, [$row['department'], $row['level']]);
 
 
 
 }
 echo"file saved";
 fclose($fp);
}else{
    
    echo "error";
}

