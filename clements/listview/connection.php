<?php

	$host = "robin";
	$username = "usccredi";
	$pwd = "1Q2go83wkX";
	$db = "usccredi_listview";

	$con = mysqli_connect($host,$username, $pwd, $db) or die("Unable to connect");

	if(mysqli_connect_error($con))
	{
		echo "failed to connect";
	}

?>