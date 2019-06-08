$(document).ready(() => {
    var pageURL = window.location.href;
    var url = new URL(pageURL);
    var page = url.searchParams.get("page");
    if (page === "add_qualification") {
        $("#root").load("./src/php/main.php",{
            add_qualificationDetails: true
        })
        console.log('Data Loaded')
    } 
})