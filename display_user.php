<?php

include "connection.php";
session_start();
if(isset($_SESSION['userid'])) { 

$sql = "SELECT * FROM criminal_dtl";

$result = mysqli_query($conn,$sql);

//echo $result;
$rows = mysqli_num_rows($result);

?>
<html>
    <head>
        <title>VIEW RECORDS</title>
    </head>
    <link rel="stylesheet" href="css/display.css">
    <body background="back/9.jpg">

        <?php if(isset($_GET['error'])):?>
    <p><?php echo ($_GET['error']); ?></p>
    <?php endif ?>
    <center>
    <table border="1px solid" class="tbl">

    <tr> <th colspan="22"><h3> Criminal's Personal Details</h3></th></tr>
    <th>ID</th>
    <th>Name</th>
    <th><br>Birth date</th>
    <th>Gender</th>
    <th><br>Height(in centimeter)</th>
    <th>Alive Status</th>
    <th> Crime Committed</th>
    <th>Retribution</th>
    <th>Picture of Criminal</th>
    <th>Actions</th>
</tr>

<tbody>
        <?php
        while($row = mysqli_fetch_assoc($result)) {?>
        <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['dob'];?></td>
        <td><?php echo $row['gender'];?></td>
        <td><?php echo $row['height'];?></td>
        <td><?php echo $row['alive_st'];?></td>
        <td><?php echo $row['crime_dt']; ?></td>
        <td><?php echo $row['retribution_dt'];?></td>
        <td><center><?php $pic = $row['photo']; ?><img src=<?php echo $pic?> width="100" height="100" alt="criminal's pic"></img></center></td>
        <td><a href="view.php?id=<?php echo $row['id']; ?>">View</a></td>
    </tr>
      <?php  }
        ?>
</tbody>

</center>   

    </body>
</html>

<?php }

else {
    header("location:login.html");
}

?>
