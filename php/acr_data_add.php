<?php
$connect = mysqli_connect("localhost", "root", "", "aicte_v2");
$number = count($_POST["year"]);
if($number > 1)
{
	for($i=0; $i<$number; $i++)
	{
		if(trim($_POST["year"][$i] != ''))
		{
			$year = mysqli_real_escape_string($connect, $_POST['year'][$i]);
			$activity = mysqli_real_escape_string($connect, $_POST['activity'][$i]);
			$credit = mysqli_real_escape_string($connect, $_POST['credit'][$i]);
			$facultyId = "NA";
			
			$sql = "INSERT INTO acr(year, activity, credit, facultyId) VALUES('$year', '$activity', '$credit', '$facultyId');";
			mysqli_query($connect, $sql);
		}
	}
	echo "Data Inserted".$number;
}
else
{
	echo "Done!";
}