<html>
    <head></head>
    <title>User Panel</title>
    <body background="back/5.jpg">
    <center>
<?php


session_start();
if(isset($_SESSION['userid'])) { ?>

    <br>
    <h1 style="color: white;">USER PANEL</h1>
    <br><br>
    <link rel="stylesheet" href="css/pnl_btn.css">
    <a href="display_user.php" id="btn">View records</a>
    <br><br><br><br>
    <a href="search_uhtml.php" id="btn">SEARCH RECORD</a>
    <br><br><br><br>
    <a href="logout.php" id="lbtn">LOGOUT</a>
</center>
</body>
</html>

<?php }



else {
    header("location:login.html");
}

?>
