<?php
include_once './db.php';

// Add University Details
if (isset($_POST['addUnivDetails-btn'])) {
    $univName = mysqli_real_escape_string($conn, $_POST['univName']);
    $univCode = mysqli_real_escape_string($conn, $_POST['univCode']);
    $univState = mysqli_real_escape_string($conn, $_POST['univState']);
    $univDistrict = mysqli_real_escape_string($conn, $_POST['univDistrict']);
    $univPostalCode = mysqli_real_escape_string($conn, $_POST['univPostalCode']);
    $univAddress = mysqli_real_escape_string($conn, $_POST['univAddress']);
    $univContact = mysqli_real_escape_string($conn, $_POST['univContact']);
    $univEmail = mysqli_real_escape_string($conn, $_POST['univEmail']);
    $univType = mysqli_real_escape_string($conn, $_POST['univType']);
    $isState = "NA";
    //Photos
    //Getting File Parameter
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileType = $_FILES['file']['type'];
    $fileError = $_FILES['file']['error'];
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('png', 'jpeg', 'jpg', 'pdf');

    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 500000){
                $fileNameNew = uniqid('',true).".".$fileActualExt;
                $fileDistination = '../../public/university_logo/'.$fileNameNew;
                //Upload the file
                move_uploaded_file($fileTmpName, $fileDistination);
            }
            else{
                echo "Could not Upload File Size Exceed!";
            }
        }
        else{
            echo "There was an ERROR in the Uploading File!";
        }
    }
    else{
        echo "You cannot upload the file!";
    }
    // SQL Statement
    $sql = "INSERT INTO university (university_code, university_name, university_state, technical_diploma, is_state, university_district, university_postalCode, university_address, university_contact, university_email, university_logo)
    VALUES ('$univCode', '$univName', '$univState', '$univType', '$isState', '$univDistrict', '$univPostalCode', '$univAddress', '$univContact', '$univEmail', '$fileNameNew');
    ";
    // Query Init
    mysqli_query($conn, $sql);
    header("Location: ../../index.php?universityaddedd=success");
}


// Add Qualification Details
if (isset($_POST['add_qualificationDetails'])) {
    $sql = "SELECT * FROM technical_min_qualifications;";
    $result = mysqli_query($conn, $sql);
    $resultChk = mysqli_num_rows($result);

    if ($resultChk < 1) {
        echo '<h2> Nothing Found </h2>';
    } else {
        echo '
        <section class="content">
        <div class="card">
            <div class="card-body">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-reorder" style="margin-right: 5px"></i>Add Qualifications
                    </div>
                    <form action="" method="post">
                        <div class="card-body">
                            <table class="table table-responsive table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 60vw">Qualifications required for Promotion</th>
                                        <th>Proof</th>
                                    </tr>
                                </thead>
                                <tbody>
        ';
        while ($row = mysqli_fetch_assoc($result)) {
            echo '
                    <tr>
                        <td>
                            <div class="form-check" style="margin-bottom:5px">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="qualification" value="'.$row['id'].'" style="margin-right: 10px">'.$row['qualification_name'].'
                                </label>
                            </div>
                        </td>
                        <td>
                            <input name="file'.$row['id'].'" type="file">
                                </td>
                        </tr>
            ';
        }
        echo '
        </tbody>
        </table>
        </div>
        </form>
        </div>
        </div>
        </div>
        </section>
        ';
    }
}

// Add HOD Diploma
if (isset($_POST['addHodDiploma-btn'])) {
    $hodCode = mysqli_real_escape_string($conn, $_POST['hodCode']);
    $hodDepartment = mysqli_real_escape_string($conn, $_POST['hodDepartment']);
    $hodId = mysqli_real_escape_string($conn, $_POST['hodId']);
    $hodLevel = mysqli_real_escape_string($conn, $_POST['hodLevel']);
    $hodName = mysqli_real_escape_string($conn, $_POST['hodName']);
    $hodContact = mysqli_real_escape_string($conn, $_POST['hodContact']);
    $hodEmail = mysqli_real_escape_string($conn, $_POST['hodEmail']);
    $hodDateOfJoining = mysqli_real_escape_string($conn, $_POST['hodDateOfJoining']);
    
    // Temp Use Only For HOD
    $UnivCode = "NA";
    $hodQualification = "NA";
    $hodAddress = "NA";
    $hodProfile = "NA";

    $sql = "INSERT INTO faculty_technical(university_code, name, contact, qualification, date_of_joining, department
    , level, faculty_id, address, email, profile_pic) VALUES('$UnivCode', '$hodName', '$hodContact', '$hodQualification', '$hodDateOfJoining', '$hodDepartment', '$hodLevel', '$hodId', '$hodAddress', '$hodEmail', '$hodProfile');";
    mysqli_query($conn, $sql);
    header("Location: ../../index.php?hodDiploma=success");

}

// Add Faculty Btn
if (isset($_POST['addFaculty-btn'])) {
    $univ_Code = mysqli_real_escape_string($conn, $_POST['university_code']);
    $department = mysqli_real_escape_string($conn, $_POST['department']);
    $facultyID = mysqli_real_escape_string($conn, $_POST['facultyID']);
    $facultyLevel = mysqli_real_escape_string($conn, $_POST['facultyLevel']);
    $facultyName = mysqli_real_escape_string($conn, $_POST['facultyName']);
    $facultyContact = mysqli_real_escape_string($conn, $_POST['facultyContact']);
    $facultyEmail = mysqli_real_escape_string($conn, $_POST['facultyEmail']);
    $facultyDateOfJoining = mysqli_real_escape_string($conn, $_POST['facultyDateOfJoining']);
    
    
    // Temp Use Only For HOD
    $facultyQualification = "NA";
    $facultyAdderss = "NA";
    $facultyProfile = "NA";


    $sql = "INSERT INTO faculty_technical(university_code, name, contact, qualification, date_of_joining, department
    , level, faculty_id, address, email, profile_pic) VALUES('$univ_Code', '$facultyName', '$facultyContact', '$facultyQualification', '$facultyDateOfJoining', '$department', '$facultyLevel', '$facultyID', '$facultyAdderss', '$facultyEmail', '$facultyProfile');";
    mysqli_query($conn, $sql);
    header("Location: ../../index.php?facultyAdded=success");
}

// Login Page
if (isset($_POST['login-btn'])) {
    // Session Started
    session_start();
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $universityCode = mysqli_real_escape_string($conn, $_POST['university_code']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM user_login WHERE username = '$username' AND password = '$password';";
    $result = mysqli_query($conn, $sql);
    $resultChk = mysqli_num_rows($result);
    if ($resultChk < 1) {
        echo ' <h2>No User Found!</h2> ';
    } else {
        while ($row = mysqli_fetch_assoc($result)) {
            $_SESSION['usertype'] = $row['login_type'];
            $_SESSION['username'] = $row['username'];
        }
        header("Location: ../../index.php?userlogin=".$_SESSION['username']);
        exit();
    }
}

// Faculty List
if (isset($_POST['viewfacultyList'])) {
    $sql = "SELECT * FROM faculty_technical;";
    $result = mysqli_query($conn, $sql);
    $resultChk = mysqli_num_rows($result);
    if ($resultChk < 1) {
        echo '
            <h2> No List Found! </h2>
        ';  
    } else {
        echo '
        <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
        <thead>
            <tr role="row">
                <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 166.433px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name
                </th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 202.45px;" aria-label="Position: activate to sort column ascending">Position
                </th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 177.767px;" aria-label="Years of Service: activate to sort column ascending">Years of Service
                </th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 99.8667px;" aria-label="Department: activate to sort column ascending">Department
                <!-- </th> -->
                <!-- <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 142.15px;" aria-label="Feedback Score: activate to sort column ascending">Feedback Score -->
                <!-- </th> -->
            </tr>
        </thead>
        <tbody>
        ';
        while ($row = mysqli_fetch_assoc($result)) {
            echo '
            <tr role="row" class="odd">
            <td class="sorting_1">'.$row['name'].'</td>
            <td>'.$row['level'].'</td>
            <td>'.$row['date_of_joining'].'</td>
            <td>'.$row['department'].'</td>
            </tr>
            ';
        }
        echo '
        </tbody>
        </table>';
    }
}
?>