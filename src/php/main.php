<?php
include './db.php';

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
    header("Location: ../../index.php?task=success");
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
    header("Location: ../../index.php?task=success");

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
    header("Location: ../../index.php?task=success");
}

// Login Page
if (isset($_POST['login-btn'])) {
    // Session Started
    session_start();
    $_SESSION['institution_code'] = $_POST['university_code'];
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
        if ($_SESSION['usertype'] == "student") {
            header("Location: ../../feedback.php?userlogin=".$_SESSION['username']);
            exit();
        } else {
            header("Location: ../../index.php?userlogin=".$_SESSION['username']);
            exit();
        }
        
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

// Student Feedback handler
if (isset($_POST['studentFeedback_submit-btn'])) {
    $totalScore2 = 0;
    $totalComment2 = 0;
    $points = array();
    for ($select=1; $select <= 72; $select++) { 
        $totalScore = $_POST['score_'.$select];
        $totalScore2 = $totalScore2 + (int)$totalScore;
        array_push($points, $totalScore);
    }
    for ($comment=1; $comment <= 8; $comment++) { 
        $totalComment = $_POST['comment_'.$comment];
        $totalComment2 = $totalComment + (int)$totalComment2;
    }
    // Activity List
    $activity_1 = "Has the Teacher covered entire Syllabus as prescribed by University/ College/ Board?";
    $activity_2 = "Has the Teacher covered relevant topics beyond syllabus ";
    $activity_3 = "Effectiveness of Teacher in terms of :(a) Technical content/course content (b) Communication skills (c) Use of teaching aids";
    $activity_4 = "Pace on which contents were covered";
    $activity_5 = "Motivation and inspiration for students to learn";
    $activity_6 = "Support for the development of Students’ skill (a) Practical demonstration (b) Hands on training";
    $activity_7 = "Feedback provided on Students’ progress";

    $activity_Array = array($activity_1, $activity_2, $activity_3, $activity_4, $activity_5, $activity_6, $activity_7);
    // Session Started
    session_start();
    $uid = $_SESSION['username'];
    $keyword = "Good";
    $remarks = "Great";
    $activity = 0;
    for($i=1; $i <= 72; $i++) {
        if ( $activity > 7 ) {
            $activity = 0;
        }
        $sql = "INSERT INTO student_feedback(student_id, faculty_id, activity_name, points, keywords, remarks) VALUES('$uid', 'facultyID-Test123', '$activity_Array[$activity]', '$points[$i]', '$keyword', '$remarks');";
        mysqli_query($conn, $sql);
        $activity++;
    }
    $sql = "SELECT * FROM student_feedback WHERE student_id = '$uid';";
    $result = mysqli_query($conn, $sql);
    $resultChk = mysqli_num_rows($result);
    if ($resultChk < 1) {
        echo '<h2>No Result Found!</h2>';
    } else {
        $score = 0;
        $scoreCount = 0;
        $facultyScoreArray = array();
        while ($row = mysqli_fetch_assoc($result)) {
            if ($scoreCount > 7) {
                array_push($facultyScoreArray, $score);
                $score = 0;
            }
            $score = $score + (int)$row['points'];
            $scoreCount++;
        }
        for($i=0;$i<count($facultyScoreArray);$i++) {
            $sql2 = "INSERT INTO student_feedback_score(student_id, faculty_id, total_points) VALUES('$uid', 'facultyID-Test123', $facultyScoreArray[$i]);";
            mysqli_query($conn, $sql2);
        }
    }
    header("Location: ../../thankyou.php?task=success");
    exit();
}


// New Backend Code From Here XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX

// Adding HOD Data
if (isset($_POST['add_hod_details-btn'])) {
    $hod_details_universityCode = mysqli_real_escape_string($conn, $_POST['hod_details_universityCode']);
    $hod_details_department = mysqli_real_escape_string($conn, $_POST['hod_details_department']);
    $hod_details_hodID = mysqli_real_escape_string($conn, $_POST['hod_details_hodID']);
    $hod_details_hodLevel = mysqli_real_escape_string($conn, $_POST['hod_details_hodLevel']);
    $hod_details_hodName = mysqli_real_escape_string($conn, $_POST['hod_details_hodName']);
    $hod_details_hodContact = mysqli_real_escape_string($conn, $_POST['hod_details_hodContact']);
    $hod_details_hodEmail = mysqli_real_escape_string($conn, $_POST['hod_details_hodEmail']);
    $hod_details_hodDateOfJoining = mysqli_real_escape_string($conn, $_POST['hod_details_hodDateOfJoining']);
    /* Checking for the validation
     Checking For the Empty Fields */
     
    //  Fields Not Presend
    $hodUnivCode = "NA";
    $hodQualification = "NA";
    $hodProfilePic = "NA";
    $hod_detailsAddress = "NA";

    if (empty($hod_details_hodID) || empty($hod_details_hodLevel) || empty($hod_details_hodName) || empty($hod_details_hodContact) || empty($hod_details_hodEmail) || empty($hod_details_hodDateOfJoining)) {
        header("Location: ../../add_hod_diploma.php?Message=EmptyFieldFound");
        exit();
    }
    // Checking for the Valid Email
    else if (!filter_var($hod_details_hodEmail, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../../add_hod_diploma.php?Message=NotaValidEmail");
        exit();
    }
    // Checking for the User Name
    else if (!preg_match("/^[a-zA-Z ]*$/", $hod_details_hodName)) {
        header("Location: ../../add_hod_diploma.php?Message=InvalidUserName");
        exit();
    }
    // Final Passing the form
    else {
        // SQL Statement
        $sql = "INSERT INTO faculty(faculty_Univ_Code, faculty_department, faculty_id, faculty_level, faculty_Name, faculty_Contact, faculty_Email, faculty_Date_Of_Joining) VALUES ('$hodUnivCode', '$hod_details_department', '$hod_details_hodID', '$hod_details_hodLevel', '$hod_details_hodName', '$hod_details_hodContact', '$hod_details_hodEmail', '$hod_details_hodDateOfJoining');";
        mysqli_query($conn, $sql);
        session_start();
        $type = "hod";
        $institution_Code = $_SESSION['institution_code'];
        $username = $_SESSION['username'];
        $sql = "INSERT INTO user_login(login_type, institution_id, username, password) VALUE('$type', '$institution_Code', '$hod_details_hodID', '$hod_details_hodID');";
        mysqli_query($conn, $sql);
        header("Location: ../../add_hod_diploma.php?Message=HodAddedSuccess");
        exit();
    }
}

// Editing University Details
if (isset($_POST['updateUnivDetails-btn'])) {
    $univ_Name = mysqli_real_escape_string($conn, $_POST['univName']);
    $univ_Code = mysqli_real_escape_string($conn, $_POST['univCode']);
    $univ_State = mysqli_real_escape_string($conn, $_POST['univState']);
    $univ_District = mysqli_real_escape_string($conn, $_POST['univDistrict']);
    $univ_PostalCode = mysqli_real_escape_string($conn, $_POST['univPostalCode']);
    $univ_Address = mysqli_real_escape_string($conn, $_POST['univAddress']);
    $univ_Email = mysqli_real_escape_string($conn, $_POST['univEmail']);
    $univ_Type = mysqli_real_escape_string($conn, $_POST['univType']);
    $univ_Contact = mysqli_real_escape_string($conn, $_POST['univContact']);
    // Temp Data
    $univ_Logo = "NA";

    /* Checking for the validation
     Checking For the Empty Fields */
     
    //  Fields Not Presend
    if (empty($univ_Name) || empty($univ_Contact) || empty($univ_State) || empty($univ_District) || empty($univ_PostalCode) || empty($univ_Address) || empty($univ_Email) || empty($univ_Type)) {
        header("Location: ../../add_university_details.php?Message=EmptyFieldFound");
        exit();
    }
    // Checking for the Valid Email
    else if (!filter_var($univ_Email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../../add_university_details.php?Message=NotaValidEmail");
        exit();
    }
    // Checking for the Institution Name
    else if (!preg_match("/^[a-zA-Z ]*$/", $univ_Name)) {
        header("Location: ../../add_university_details.php?Message=InvalidUserName");
        exit();
    }
    else {
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
                    $fileDistination = '../../assets/university_logo/'.$fileNameNew;
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
        $sql = "INSERT INTO institution(institution_name, institution_code, institution_state, institution_district, institution_postal_code, institution_address, institution_contact_no, institution_email, institution_type, logo)
        VALUES ('$univ_Name', '$univ_Code', '$univ_State', '$univ_District', '$univ_PostalCode', '$univ_Address', '$univ_Contact', '$univ_Email', '$univ_Type', '$fileNameNew');";
		//$sql = "UPDATE `institution` SET `institution_name`='$univ_Name',`institution_state`='$univ_State',`institution_district`='$univ_District',`institution_postal_code`='$univ_PostalCode',`institution_address`='$univ_Address',`institution_contact_no`='$univ_Contact',`institution_email`='$univ_Email',`institution_type`='$univ_Type',`logo`='$fileNameNew' WHERE institution_code = '$univ_Code';";
        mysqli_query($conn, $sql);
        header("Location: ../../add_university_details.php?Message=InstitutionUpdatedSuccess");
        exit();
    }

}

// New Code For Faculty List
if (isset($_POST['viewfacultyListNew'])) {
    $sql = "SELECT * FROM faculty;";
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
            <td class="sorting_1">'.$row['faculty_Name'].'</td>
            <td>'.$row['faculty_level'].'</td>
            <td>'.$row['faculty_Date_Of_Joining'].'</td>
            <td>'.$row['faculty_department'].'</td>
            </tr>
            ';
        }
        echo '
        </tbody>
        </table>';
    }
}

// Edit HOD Details
if (isset($_POST['editHodDetails-btn'])) {
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
                    $fileDistination = '../../assets/hod_profile/'.$fileNameNew;
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
        $faculty_name = mysqli_real_escape_string($conn, $_POST['name']);
        $faculty_contact = mysqli_real_escape_string($conn, $_POST['contact']);
        $faculty_address = mysqli_real_escape_string($conn, $_POST['address']);
        $faculty_email = mysqli_real_escape_string($conn, $_POST['email']);
        $faculty_dateOfJoining = mysqli_real_escape_string($conn, $_POST['dateOfJoining']);
        $faculty_department = mysqli_real_escape_string($conn, $_POST['department']);
        $faculty_id = mysqli_real_escape_string($conn, $_POST['facultyid']);
        // SQL Statement
        session_start();
        $userId = $_SESSION['username'];
        $sql = "UPDATE faculty SET faculty_Name = '$faculty_name', faculty_Contact = '$faculty_contact', faculty_address = '$faculty_address', faculty_Email = '$faculty_email', faculty_profile_pic = '$fileNameNew' WHERE faculty_id = '$userId';";
        mysqli_query($conn, $sql);
        header("Location: ../../hod_details.php?Message=UpdatedDetailsSuccess");
        exit();
}

// Add Faculty Data
if (isset($_POST['addFaculty_Data-btn'])) {
    $univ_Code = mysqli_real_escape_string($conn, $_POST['university_code']);
    $department = mysqli_real_escape_string($conn, $_POST['department']);
    $facultyID = mysqli_real_escape_string($conn, $_POST['facultyID']);
    $facultyLevel = mysqli_real_escape_string($conn, $_POST['facultyLevel']);
    $facultyName = mysqli_real_escape_string($conn, $_POST['facultyName']);
    $facultyContact = mysqli_real_escape_string($conn, $_POST['facultyContact']);
    $facultyEmail = mysqli_real_escape_string($conn, $_POST['facultyEmail']);
    $facultyDateOfJoining = mysqli_real_escape_string($conn, $_POST['facultyDateOfJoining']);
    $type = "faculty";
    session_start();
    $institution_Code = $_SESSION['institution_code'];
    $sql = "INSERT INTO faculty(faculty_Univ_Code, faculty_department, faculty_id, faculty_level, faculty_Name, faculty_Contact, faculty_Email, faculty_Date_Of_Joining) VALUES('$univ_Code', '$department', '$facultyID', '$facultyLevel', '$facultyName', '$facultyContact', '$facultyEmail', '$facultyDateOfJoining');";
    mysqli_query($conn, $sql);
    $sql = "INSERT INTO user_login(login_type, institution_id, username, password) VALUE('$type', '$institution_Code', '$facultyID', '$facultyID');";
    mysqli_query($conn, $sql);
    header("Location: ../../add_faculty_diploma.php?Message=FacultyAddedSuccess");
}

// Adding Excel File
if (isset($_POST['uploadHod-btn'])) {
        session_start();
        $univId = $_SESSION['institution_code'];
        //Getting File Parameter
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileType = $_FILES['file']['type'];
        $fileError = $_FILES['file']['error'];
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

            if($fileError === 0){
                if($fileSize < 100000000){
                    $fileNameNew = uniqid('',true).".".$fileActualExt;
                    $fileDistination = '../../assets/excel_uploads/'.$univId.'_'.$fileNameNew;
                    $_SESSION['HOD_excel'] = $fileNameNew;
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
            $sql = "INSERT INTO file_upload(university_id, type,uploaded_for) VALUES('$univId', 'HOD', '$fileNameNew');";
            mysqli_query($conn, $sql);
            header("Location: ../../add_hod_diploma.php?Message=UploadedSuccess");
            exit();
}

// Excel HOD File Upload
if (isset($_POST['uploadExcelFile-btn'])) {
    require './excel/reader.php';
    session_start();
    $filePath = $_SESSION['HOD_excel'];
    $file = '../../assets/excel_uploads/'+$filePath;
    
}

?>