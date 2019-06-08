<?php
    include_once './db.php';
    $number = count($_POST['name']);

    if ($number > 0) {
        for ($i=0; $i<$number; $i++) {
            if (trim($_POST['name'][$i] != '')) {
                $sql = "INSERT INTO name(name) VALUES(".mysqli_real_escape_string($conn, $_POST['name'][$i]).")";
                mysqli_query($conn, $sql);
            }
        }
        echo 'Data Inserted';
    } else {

    }
?>