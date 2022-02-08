<?php

session_start();
if(isset($_SESSION['userid'])) { 

include "connection.php";


if(isset($_POST['ck_id']))
{
    $id = $_POST['id'];
    // echo $id.'<br>';
    
    $sql = ("SELECT * FROM criminal_dtl WHERE id LIKE'%$id%';");
    $res = mysqli_query($conn,$sql);
    $row = mysqli_num_rows($res); 
}
elseif(isset($_POST['ck_nm']))
{
    $nm = $_POST['nm'];
    // echo $nm.'<br>';
    
    $sql = ("SELECT * FROM criminal_dtl WHERE name LIKE'%$nm%';");
    $res = mysqli_query($conn,$sql);
    $row = mysqli_num_rows($res);
}

elseif(isset($_POST['ck_dt']))
{
    $dt = $_POST['dt'];
    // echo $dt.'<br>';
    
    $sql = ("SELECT * FROM criminal_dtl WHERE CONCAT(dob,crime_date) LIKE '%$dt%';");
    $res = mysqli_query($conn,$sql);
    $row = mysqli_num_rows($res);

}
else {
    $em = "something went wrong !";
    header("location:search_html.php?error=$em");
}
    
    ?>

    <html>
    <head>
        <title>My webpage</title>
    </head>
    <style>
        table {
        font-size: 20px;
        text-align: center;
        border-collapse: collapse;
        }
        td{
            padding: 20px;

        }
        body {
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
        }
        a {
            color: aqua;
        }
        a:hover {
            color: yellow;
        }
    </style>
    <body background="back/6.jpg"> 
    <center>
    <table border="1px solid" class="tbl">

    <tr> <th colspan="10"><h3> Criminal's Details</h3></th></tr>
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
        while($row = mysqli_fetch_assoc($res)) {?>
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
        <td><a href="view.php?id=<?php echo $row['id']; ?>">view</a></td>
    </tr>
      <?php }?>
</tbody>

</center>

</body>
</html>

<?php }

else {
    header("location:ind_ex.html");
}

?>