<?php
include './db.php';
$number = count($_POST['name']);
if ($number > 0 ){
    $univ_code = mysqli_real_escape_string($conn, $_POST['UnivId']);
    for ($i=0; $i<$number; $i++) {
        if (trim($_POST['name'][$i]) != '') {
            $department_name = mysqli_real_escape_string($conn, $_POST['name'][$i]);
            $department_code = mysqli_real_escape_string($conn, $_POST['code'][$i]);

            $sql = "INSERT INTO department(univ_code, department_name, department_code) VALUES('$univ_code' ,'$department_name', '$department_code');";
            mysqli_query($conn, $sql);
        }
    }
    header("Location ../add_department.php?Message=DepartmentAddedSuccess");
    exit();
} else {
    echo "Enter Name".$number;
}
?>