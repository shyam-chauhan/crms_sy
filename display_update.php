<?php

include "connection.php";

$sql = "SELECT * FROM criminal_dtl";

$result = mysqli_query($conn,$sql);

//echo $result;
$rowss = mysqli_num_rows($result);

?>
<html>
    <head>
        <title>My webpage</title>
    </head>
    <body>
    <link rel="stylesheet" href="css/display.css"> 
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
    <th>Picture of Criminal : </th>
    <th>Actions</th>
</tr>

<tbody>
        <?php
        while($rows = mysqli_fetch_assoc($result)) {?>
        <tr>
        <td><?php echo $rows['id']; ?></td>
        <td><?php echo $rows['name']; ?></td>
        <td><?php echo $rows['dob'];?></td>
        <td><?php echo $rows['gender'];?></td>
        <td><?php echo $rows['height'];?></td>
        <td><?php echo $rows['alive_st'];?></td>
        <td><?php echo $rows['crime_dt']; ?></td>
        <td><?php echo $rows['retribution_dt'];?></td>
        <td><center><?php $pic = $rows['photo']; ?><img src=<?php echo $pic?> width="100" height="100" alt="criminal's pic"></img></center></td>
        <td><a href="update_html.php?id=<?php echo $rows['id']; ?>">view</a></td>
    </tr>
      <?php  }
        ?>
</tbody>

</center>   

    </body>
</html>