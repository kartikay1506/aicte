<?php
$connect = mysqli_connect("localhost", "root", "", "aicte_v2");
$number = count($_POST["activity"]);
if($number > 1)
{
	for($i=0; $i<$number; $i++)
	{
		if(trim($_POST["activity"][$i] != ''))
		{
			$activity = mysqli_real_escape_string($connect, $_POST['activity'][$i]);
			$semester = mysqli_real_escape_string($connect, $_POST['semester'][$i]);
			$date = mysqli_real_escape_string($connect, $_POST['date'][$i]);
			$type = mysqli_real_escape_string($connect, $_POST['type'][$i]);
			// $file = mysqli_real_escape_string($connect, $_POST['file'][$i]);
			$activityProof = "NA";
			$facultyId = "NA";
			
			$sql = "INSERT INTO activity(activity_name, activity_semester, activity_year, activity_type, facultyId, activity_proof) VALUES('$activity', '$semester', '$date', '$type', '$facultyId', '$activityProof');";
			mysqli_query($connect, $sql);
		}
	}
	echo "Data Inserted".$number;
}
else
{
	echo "Please Enter Name";
}