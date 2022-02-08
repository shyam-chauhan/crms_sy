<html>
    <head></head>
    <title>Admin Panel</title>
    <style>
        body {
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
    <body background="back/5.jpg">
    <center>
<?php
session_start();


if($_SESSION['userid'] == "admin") {?>

<br>
    <h1 style="color: white;">ADMIN PANEL</h1>
    <link rel="stylesheet" href="css/pnl_btn.css">
    <a href="insert_html.php" id="btn">INSERT RECORD</a>
    <br><br>
    <a href="search_html.php" id="btn">SEARCH RECORD</a>
    <br><br>
    <a href="display.php" id="btn">VIEW & DELETE RECORDS</a>
    <br><br>
    <a href="display.php" id="btn">VIEW & UPDATE RECORDS</a> 
    <br><br>
    <a href="search_html.php" id="btn">SEARCH & UPDATE RECORD</a>
    <br><br>
    <a href="search_html.php" id="btn">SEARCH & DELETE RECORD</a>
    <br><br>
    <a href="logout.php" id="lbtn">LOGOUT</a>
    
    


<?php }

else {
    header("location:login.html");
}

?>
</center>
</body>
</html>