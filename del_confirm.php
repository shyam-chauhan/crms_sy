<?php

include "connection.php";
$id = $_GET['id'];

?>


<html>
    <head>
        <title>Confirm</title>
    </head>
    <style>
        body{
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>

    <body background="back/3.jpg">
        <center>
        <form method="post" action="del_confirm.php">
        <br><br><br><br><br><br><br><br><br><br>
            DO YOU REALLY WANT TO DELETE THOS RECORD ?
            <br><br><br>
            <a href="delete.php?id=<?php echo $id ?>"> YES</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="display.php">NO</a>
        </form>
        </center>
    </body>
</html>