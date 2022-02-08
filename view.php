<?php
session_start();
if(isset($_SESSION['userid'])) { ?>


<?php

include "connection.php";

$id = $_GET['id'];
// echo $id;
$sql = ("SELECT * FROM criminal_dtl WHERE id = $id;");

$result = mysqli_query($conn,$sql);
$row = mysqli_num_rows($result);

if ($row > 0) {
    $row = mysqli_fetch_assoc($result); ?>

<html>
<head>
        <title>Display</title>
    </head>
    <style>
        body {
            background-repeat: no-repeat;
            background-size: cover;
            /* color: white; */
            }
    </style>

<body background="back/12.jpg">

<link rel="stylesheet" href="css/view.css">

        <table border="1px solid" class="tbl">
        <tr>
            <th colspan="2"><h2>Criminal's Personal Details</h2></th>
        </tr>
        <tr>
            <th>Picture of Criminal</th>
            <td><center><?php $pic = $row['photo']; ?><img src=<?php echo $pic?> width="150" height="200" alt="criminal's pic"></img></center></td> 
        </tr>
        <tr>
            <th>ID : </th>
            <td id="tbr"><?php echo $row['id']; ?></td>
        </tr>

        <tr>
            <th>Name : </th>
            <td id="tbr"><?php echo $row['name']; ?></td>
        </tr>

        <tr>
            <th><br>Father's Name : </th>
            <td id="tbr"><?php echo $row['father_name']; ?></td>
        </tr>

        <tr>
            <th><br>Birth date : </th>
            <td id="tbr"><?php echo $row['dob'];?></td>
        </tr>

        <tr>
            <th>Gender : </th>
            <td id="tbr"><?php echo $row['gender'];?></td>
        </tr>

        <tr>
            <th><br>Height(in centimeter) : </th>
            <td id="tbr"><?php echo $row['height'];?></td>
        </tr>

        <tr>
            <th><br>weight(in kilogram) : </th>
            <td id="tbr"><?php echo $row['weight'];?></td>
        </tr>

        <tr>
            <th> Marital status : </th>
            <td id="tbr"><?php echo $row['mati_st'];?></td>
        </tr>

        <tr>
            <th><br>Education details : </th>
            <td id="tbr"><?php echo $row['edu_dtl'];?></td>
        </tr>

        <tr>
            <th><br>Address : </th>
            <td id="tbr"><?php echo $row['address'];?></td>
        </tr>
        
        <tr>
            <th> Any special identity : </th>
            <td id="tbr"><?php echo $row['sp_id'];?></td>
        </tr>

        <tr>
            <th>Mail ID : </th>
            <td id="tbr"><?php echo $row['mail'];?></td>
        <tr>
            <th>Phone number : </th>
            <td id="tbr"><?php echo $row['phno'];?></td>
        </tr>

        <tr>
            <th>Alive Status : </th>
            <td id="tbr"><?php echo $row['alive_st'];?></td>
        </tr>

</table>



<table class="tblrgt" border="2px solid">
        <tr>
            <th colspan="2"><h2>Criminal's Crime Details</h2></th>
        </tr>

        <tr>
            <th>Crime Committed : </th>
            <td id="tbr"><?php echo $row['crime_dt']; ?></td>
        </tr>
        
        <tr>
            <th>Crime Partner name : </th>
            <td id="tbr"><?php echo $row['crime_pt']; ?></td>
        </tr>

        <tr>
            <th>Crime Date : </th>
            <td id="tbr"><?php echo $row['crime_date']; ?></td>
        </tr>

        <tr>
            <th>Retribution : </th>
            <td id="tbr"><?php echo $row['retribution_dt'];?></td>
        </tr>

        <tr>
            <th>Release date : </th>
            <td id="tbr"><?php echo $row['relese_dt'];?></td>
        </tr>
</table>

</body>

<?php } ?>

</html>

<?php }

else {
    header("location:login.html");
}

?>


