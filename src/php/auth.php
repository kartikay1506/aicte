<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ./login.php");
    exit();
}
?>
<script>
    $(document).ready(() => {
    var pageURL = window.location.href;
    var url = new URL(pageURL);
    var page = url.searchParams.get("task");
    if (page === "success") {
        swal({
            title: "Success",
            text: "You task is completed!",
            icon: "success",
            button: "Okay!",
        });
    } 
})
</script>