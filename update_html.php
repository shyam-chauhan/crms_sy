<html>
    <head>
        <title>Display</title>
    </head>

    <style>
        tr {
            text-align: center;
            margin-left: 10px;
        }
        #id {
            background:transparent;
            border:none;
            outline:none;
            font-size: 15px;
            font-weight: bolder;
        }
        #box {
            height: 30px;
        }
    </style>

<?php

session_start();
if($_SESSION['userid']=="admin") { 

include "connection.php";
// isset($_GET['id'])
$id = $_GET['id'];
// echo $id;
$sql = ("SELECT * FROM criminal_dtl WHERE id='$id';");

$result = mysqli_query($conn,$sql);
$row = mysqli_num_rows($result);

if ($row > 0) {
    $row = mysqli_fetch_assoc($result); ?>

<link rel="stylesheet" href="view.css">
<form method="post" action="update.php">
        <table border="1px solid" class="tbl">
        <tr>
            <th colspan="2"><h2>Criminal's Personal Details</h2></th>
        </tr>
        
        <tr>
            <th>ID (Can't Change) : </th>
            <td><b><input type="text" name="id" value="<?php echo $row['id'];?>"  id="id"></b></td>
        </tr>

        <tr>
            <th>Picture of Criminal : </th>
            <td><center><?php $pic = $row['photo']; ?><img src=<?php echo $pic?> width="150" height="200" alt="criminal's pic"></img>
        <br> <br></center></td> 
        </tr>

        <tr>
            <th>Name : </th>
            <td><input type="text" name="nm" value="<?php echo $row['name']; ?>" id="box"></td>
        </tr>

        <tr>
            <th><br>Father's Name : </th>
            <td><input type="text" name="fnm" value="<?php echo $row['father_name']; ?>"></td>
        </tr>

        <tr>
            <th><br>Birth date : </th>
            <td><input type="date" name="dob" value="<?php echo $row['dob'];?>"><br></td>
        </tr>

        <tr>
            <th>Gender : </th>
            <td><input type="radio" name="gender" value="male" checked>Male
            <input type="radio" name="gender" value="female">Female <br>Current :<?php echo $row['gender'];?></td>
        </tr>

        <tr>
            <th><br>Height(in centimeter) : </th>
            <td><input type="number" name="height" value="<?php echo $row['height'];?>"></td>
        </tr>

        <tr>
            <th><br>weight(in kilogram) : </th>
            <td><input type="number" name="weight" value="<?php echo $row['weight'];?>"></td>
        </tr>

        <tr>
            <th>Marital Status :</th>
            <td><input type="radio" name="mts" value="merried">Merried
            <input type="radio" name="mts" value="unmerried" checked>Unmerried <br>Current :<?php echo $row['mati_st'];?></td>
        </tr>

        <tr>
            <th><br>Education details : </th>
            <td><input type="text" id="box" name="edu" value="<?php echo $row['edu_dtl'];?>"></td>
        </tr>

        <tr>
            <th><br>Address : </th>
            <td><input type="text" name="add" value="<?php echo $row['address'];?>"></td>
        </tr>
        
        <tr>
            <th> Any special identity : </th>
            <td><input type="text" id="box" name="brmk" value="<?php echo $row['sp_id'];?>"></td>
        </tr>

        <tr>
            <th>Mail ID : </th>
            <td><input type="mail" name="mail" value="<?php echo $row['mail'];?>"></td>
        <tr>
            <th>Phone number : </th>
            <td><input type="number" name="phno" value="<?php echo $row['phno'];?>"></td>
        </tr>

        <tr>
            <th>Alive Status : </th>
            <td><input type="radio" name="alv" value="alive" checked>Alive
            <input type="radio" name="alv" value="dead">Dead <br>Current :<?php echo $row['alive_st'];?></td>
        </tr>

        
</table>



<table class="tblrgt" border="2px solid">
        <tr>
            <th colspan="2"><h2>Criminal's Crime Details</h2></th>
        </tr>

        <tr>
            <th>Crime Committed : </th>
            <td><input type="text" id="box" name="crdt" value="<?php echo $row['crime_dt']; ?>"></td>
        </tr>
        
        <tr>
            <th>Crime Partner name : </th>
            <td><input type="text" name="crpt" value="<?php echo $row['crime_pt']; ?>"></td>
        </tr>

        <tr>
            <th>Crime Date : </th>
            <td><input type="date" name="crdate" value="<?php echo $row['crime_date']; ?>"><br></td>
        </tr>

        <tr>
            <th>Retribution : </th>
            <td><input type="text" id="box" name="retr" value="<?php echo $row['retribution_dt'];?>"></td>
        </tr>

        <tr>
            <th>Release date : </th>
            <td><input type="date" name="redt" value="<?php echo $row['relese_dt'];?>"><br></td>
        </tr>

        <tr>
            <th colspan="2"><br><input type="submit" value="Update" name="submit"></th></th>
        </tr>
</table>
        

</form>



<?php } 
}

else {
  header("location:login.html");
}?>

</html>
