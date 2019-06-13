<?php
	include './src/php/db.php';
	$contact = '';
	$email = '';
	$faculty_id = '';
	$joining = '';
	$level = '';
	$faculty_name = '';
	$institute_name = '';
	$login = $_SESSION['usertype'];
	$username = $_SESSION['username'];
	$userid = $_SESSION['institution_code'];
	if($login == 'Institution') {
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
	elseif($login == 'Hod' || $login == 'Faculty') {
		$sql = "SELECT * from faculty where faculty_Univ_Code = '$userid' AND faculty_id = '$username';";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if($resultCheck < 1) {
			echo("Error");
		}
		else {
			while($row = mysqli_fetch_assoc($result)) {
				$faculty_name = $row['faculty_Name'];
				$institute_name = $row['institution_name'];
				$contact = $row['faculty_Contact'];
				$email = $row['faculty_Email'];
				$level = $row['faculty_level'];
				$joining = $row['faculty_Date_Of_Joining'];
			}
		}
	}
?>