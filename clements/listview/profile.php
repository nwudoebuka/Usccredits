<?php
    include('connection.php');

	$query = mysqli_query($con, "select * from profile");

	if($query)
	{

		while($row=mysqli_fetch_array($query))
		{
			$flag[] = $row;
		}
	print(json_encode($flag));
	}
	mysqli_close($con);
?>