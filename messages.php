<?php
// Checking for the errors
if (isset($_GET['Message'])) {
    $message = $_GET['Message'];
    // Finding the empty fields
    if ($message === "EmptyFieldFound") {
        echo '
        <div class="alert alert-danger" role="alert">
            Empty Fields Found Please Check!
        </div>
        ';
    } else if ($message === "NotaValidEmail") {
        echo '
        <div class="alert alert-danger" role="alert">
            Not a Valid Email Please Check!
        </div>
        ';
    } else if ($message === "InvalidUserName") {
        echo '
        <div class="alert alert-danger" role="alert">
        Only letters and white space allowed Please Check!
        </div>
        ';
    } else if ($message === "HodAddedSuccess") {
        echo '
        <div class="alert alert-success" role="alert">
            HOD Added Hod Added Success!
        </div>
        ';
    } else if ($message === "InstitutionUpdatedSuccess") {
        echo '
        <div class="alert alert-success" role="alert">
            Institution Updated Success !
        </div>
        ';
    } else if ($message === "DepartmentAddedSuccess") {
        echo '
        <div class="alert alert-success" role="alert">
            Department Added Success !
        </div>
        ';
    }  else if ($message === "UpdatedDetailsSuccess") {
        echo '
        <div class="alert alert-success" role="alert">
           Details Updated Success !
        </div>
        ';
    } else if ($message === "FacultyAddedSuccess") {
        echo '
        <div class="alert alert-success" role="alert">
           Faculty Added Success !
        </div>
        ';
    }  else if ($message === "UploadedSuccess") {
        echo '
        <div class="alert alert-success" role="alert">
           File Uploaded!
        </div>
        ';
    }
}

?>