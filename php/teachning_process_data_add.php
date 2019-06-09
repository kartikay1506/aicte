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
			$semester = mysqli_real_escape_string($connect, $_POST['semester'][$i]);
			$courseCode = mysqli_real_escape_string($connect, $_POST['courseCode'][$i]);
			$scheduleClass = mysqli_real_escape_string($connect, $_POST['scheduleClass'][$i]);
			$heldClass = mysqli_real_escape_string($connect, $_POST['heldClass'][$i]);
			// $file = mysqli_real_escape_string($connect, $_POST['file'][$i]);
			$proof = "NA";
			$sql = "INSERT INTO teaching_process(year, semester, course, number_schedule_class, number_actually_held_class, proof) VALUES('$year', '$semester', '$courseCode', '$scheduleClass', '$heldClass', '$proof');";
			mysqli_query($connect, $sql);
		}
	}
	echo "Data Inserted".$number;
}
else
{
	echo "Please Enter Name";
}