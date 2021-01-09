<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$con = mysqli_connect($host, $user, $pass);
	
		if(!$con)
	{
		echo 'Not Connected To Server';
	}

	
		if(!mysqli_select_db($con,'registration'))
	{
		echo 'Database Not Selected';
	}
	
	$gname = $_POST['gname'];
	$relation = $_POST['relation'];
	$telg = $_POST['telG'];
	$officeg = $_POST['officeG'];
	$addressg1 = $_POST['addressg1'];
	$addressg2 = $_POST['addressg2'];
	$cityg = $_POST['cityg'];
	$stateg = $_POST['stateg'];
	$zipg = $_POST['zipg'];
	$echeck = $_POST['emer'];
	$namee = $_POST['namee'];
	$tele = $_POST['tele'];
	$officee = $_POST['officee'];
	
	$sql = "INSERT INTO guardian (name, relation, tel, office, address1, address2, city, state, zip, emergency) VALUES ('$gname' ,'$relation' ,'$telg' ,'$officeg' ,'$addressg1', '$addressg2' ,'$cityg' ,'$stateg' ,'$zipg' ,'$echeck')";
	$sql1 = "INSERT INTO emergency (name, tel, office) VALUES ('$namee', '$tele', '$officee')";
	
		if(!mysqli_query($con, $sql))
	{
		echo 'Not Inserted';
	}
		if(!mysqli_query($con, $sql1))
	{
		echo 'Not Inserted';
	}
		else
	{
		echo 'Inserted';
	}
	
	header("refresh:1; url=output.php");

?>