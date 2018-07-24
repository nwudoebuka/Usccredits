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

$name = $_POST['nameofuser'];
$school = $_POST['schoolofuser'];
$department = $_POST['departmentofuser'];
$rank = $_POST['rankofuser'];
$formnumber = $_POST['formnumber'];
$finger1 = $_POST['finger1'];
$finger2 = $_POST['finger2'];
$finger3 = $_POST['finger3'];
$finger4 = $_POST['finger4'];




$sql = "INSERT INTO fp_student (nameofuser,schoolofuser, departmentofuser, rankofuser, form_number,finger1,finger2,finger3,finger4,student_name,department,fees_status)
VALUES ('$name','$school', '$department', '$rank', '$formnumber','$finger1','$finger2','$finger3','$finger4','John Doe','Computer Science','Not Paid')";

if ($conn->query($sql) === TRUE) {
echo"Registeration successful";
}else{
   
   echo'failed';
}

?>