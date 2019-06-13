<?php
	include './src/php/db.php';
	include './student_detail.php';
	$sql = "SELECT * FROM time_table WHERE semester = '$semester' AND year = '$year' AND section = '$section';";
	$result1 = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result1);
	$faculty = '';
	if(!$result1) {
			echo('Error');
		}
	else {
			while($row = mysqli_fetch_assoc($result1)) {
				$faculty = $row['faculties'];
			}
		}
	$j = 0;
	$k = 0;
	$faculties[] = '';
	for($i = 0; $i < strlen($faculty); $i++) {
			$ch = $faculty[$i];
			if($ch == ','){
				$l = $i - $j;
				$temp = substr($faculty,$j,$l);
				$j = $i + 1;
				$faculties[$k] = $temp;
				$k++;
			}
		}
?>