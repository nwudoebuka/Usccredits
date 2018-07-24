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

$name = $_POST['name'];
$school = $_POST['school'];
$rank = $_POST['rank'];
$department = $_POST['department'];
$finger = $_POST['finger'];



$sql = "INSERT INTO fp_register (name,test, school_name, rank, department)
VALUES ('$name','$finger', '$school', '$rank', '$department')";

if ($conn->query($sql) === TRUE) {
echo"Registeration successful";
}else{
   
   echo'failed';
}

?>