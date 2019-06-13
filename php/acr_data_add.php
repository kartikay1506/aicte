<?php
include './db.php';
$number = count($_POST["year"]);
session_start();
$institutionId = $_SESSION['institution_code'];
if($number > 0)
{
	for($i=0; $i<$number; $i++)
	{
		if(trim($_POST["year"][$i] != ''))
		{
			$year = mysqli_real_escape_string($conn, $_POST['year'][$i]);
			$activity = mysqli_real_escape_string($conn, $_POST['activity'][$i]);
			$credit = mysqli_real_escape_string($conn, $_POST['credit'][$i]);
			// $file = mysqli_real_escape_string($connect, $_POST['file'][$i]);
			$proof = "NA";
			$sql = "INSERT INTO acr(institution_code, year, activity, credit) VALUES('$institutionId', '$year', '$activity', '$credit');";
			mysqli_query($conn, $sql);
		}
	}
	echo "Data Inserted".$number;
}
else
{
	echo "Please Enter Name";
}