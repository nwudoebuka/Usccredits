<?php

   include 'connection.php';

    $conn = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);
     
     if($_SERVER['REQUEST_METHOD'] == 'POST')
     {
    
     
     $ImageData = $_POST['image_path'];
     $ImageName = $_POST['image_name'];
    
     
     $ImageOnlinePath = "image/$ImageName.png";
     $ImageSeverPath = "clements/uploadimage/image/$ImageName.png";
 
     $ServerURL = "http://usccredits.com/$ImageSeverPath";
     
     $InsertSQL = "insert into imagetable (image_name,image_path) values ('$ImageName','$ServerURL')";
     
     if(mysqli_query($conn, $InsertSQL)){
    
     file_put_contents($ImageOnlinePath,base64_decode($ImageData));
    
     echo "Your Image Has Been Uploaded.";
     }
     
     mysqli_close($conn);
     }else{
     echo "Not Uploaded";
 }

?>