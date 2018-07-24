<?php
    include('connection.php');

       if($_SERVER['REQUEST_METHOD'] == 'POST')
     {
     $DefaultId = 0;
     
     $ImageData = $_POST['image_path'];
     
     $ImageName = $_POST['image_name'];
     
     $EmailName = $_POST['email_name'];
     
     $DefaultId = $ImageName.$EmailName;
     
     
     $ImagePath = "image/$DefaultId.jpg";
     
     $ServerURL = "http://usccredits.com/clements/listview/image/$DefaultId.jpg";
     
     $InsertSQL = "insert into profile (name,email,photo) values ('$ImageName','$EmailName','$ServerURL')";
     
     if(mysqli_query($con, $InsertSQL)){
    
     file_put_contents($ImagePath,base64_decode($ImageData));
    
     echo "Your Image Has Been Uploaded.";
     }
     
     mysqli_close($con);
     }else{
     echo "Not Uploaded";
     }
?>