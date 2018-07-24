<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    include('connection.php');
    
    
      $id = $_POST['rec_id'];
      
      $query = mysqli_query($con, "select * from profile where id = '$id'");
        	if($query)
        	{
 	    		while($row=mysqli_fetch_array($query))
            		{
            			$flag = $row;
            		}
            	print(json_encode($flag));
        	}

	mysqli_close($con);

} else{
    
    echo "not ok";
}

?>