<?php
	include './src/php/db.php';
	$login_type = $_SESSION['usertype'];
	$username = $_SESSION['username'];
	$sql = "SELECT * FROM student_list WHERE student_id = '$username';";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);
	$course = '';
	$branch = '';
	$year = '';
	$semester = '';
	$section = '';
	if(!$result) {
		echo('Error');
	}
	else {
		while($row = mysqli_fetch_assoc($result)) {
			$course = $row['course'];
			$branch = $row['branch'];
			$year = $row['year'];
			$semester = $row['semester'];
			$section = $row['section'];
		}
	}
	//echo($login_type);
?>