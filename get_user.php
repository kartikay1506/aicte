<?php
	include './src/php/db.php';
	$contact = '';
	$email = '';
	$faculty_id = '';
	$joining = '';
	$level = '';
	$level_name = '';
	$faculty_name = '';
	$faculty_address = '';
	$faculty_department = '';
	$institute_name = '';
	$login = $_SESSION['usertype'];
	$username = $_SESSION['username'];
	$userid = $_SESSION['institution_code'];
	if($login == 'institution') {
		$sql = "SELECT * from institution where institution_code = '$userid';";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if($resultCheck < 1) {
			echo("Error");
		}
		else {
			while($row = mysqli_fetch_assoc($result)) {
				$institute_name = $row['institution_name'];
				$contact = $row['institution_contact_no'];
				$email = $row['institution_email'];
			}
		}
	}
	elseif($login == 'hod' || $login == 'faculty') {
		$sql = "SELECT * from faculty where faculty_Univ_Code = '$userid' AND faculty_id = '$username';";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if($resultCheck < 1) {
			echo("Error");
		}
		else {
			while($row = mysqli_fetch_assoc($result)) {
				$faculty_name = $row['faculty_Name'];
				$institute_name = $row['faculty_Univ_Name'];
				$faculty_address = $row['faculty_address'];
				$faculty_department = $row['faculty_department'];
				$contact = $row['faculty_Contact'];
				$email = $row['faculty_Email'];
				$level = $row['faculty_level'];
				$joining = $row['faculty_Date_Of_Joining'];
			}
		}
		$sql1 = "SELECT * from levels WHERE level_id = '$level';";
		$result1 = mysqli_query($conn, $sql1);
		$resultCheck1 = mysqli_num_rows($result1);
		if($resultCheck1 < 1) {
			echo("Error");
		}
		else {
			while($row = mysqli_fetch_assoc($result1)) {
				$level_name = $row['level_name'];
			}
		}
	}
?>