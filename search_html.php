<?php
session_start();
if($_SESSION['userid']=="admin") { ?>
<html>
<head>
    <title>Search records</title>
<body background="back/6.jpg">
<style>
        body {
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
            }
        table {
        font-size: 20px;
        text-align: center;
        border-collapse: collapse;
        }
        td{
            padding: 20px;

        }
    </style>


<form method="post" action="search.php">
    <center>
        <br>

    <table border="1px">
    <tr>
        <th>Search By ID:</th>
        <td><input type="text" placeholder="Enter ID" name="id"></td>
        <td><input type="submit" value="Search" name="ck_id"></td>
    </tr>
    
    <tr>
        <th>Search By Name:</th>
        <td><input type="text" placeholder="Enter Name" name="nm"></td>
        <td><input type="submit" value="Search" name="ck_nm"></td>
    </tr>

    <tr>
        <th>Search By Crime date / Birthdate :</th>
        <td><input type="date" name="dt"></td>
        <td><input type="submit" value="Search" name="ck_dt"></td>
    </tr>

    </table>
    </center>

</form>

</body>
</head>

<?php }

else {
  header("location:login.html");
}
  ?>