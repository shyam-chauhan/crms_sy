<?php
session_start();
if($_SESSION['userid']=="admin") { ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
table {
    margin-top: 50px;
    border-collapse: collapse;
}
#submit {
    margin : 5px;
    padding: 10px;
    font-size: 15px;
}
</style>

<?php if(isset($_GET['error'])):?>
    <p><?php echo ($_GET['error']); ?></p>
    <?php endif ?>
<body background="back/7.jpg">
    <link rel="stylesheet" href="css/insert.css">
    
    <form action="insert.php" method="post" class="table" enctype="multipart/form-data">
        <table class="tbl">

            <tr> <th colspan="2"><h3> Criminal's Personal Details</h3></th></tr>
            <tr>
                <th>Name :</th>
                <td><input type="text" id="name" placeholder="Enter name of criminal" name="nm" required></td>
            </tr>

            <tr>
                <th><br>Father's Name :</th>
                <td><br><input type="text" id="fn" placeholder="Criminal's father's name" name="fnm"></td>
            </tr>

            <tr>
                <th><br>Birth date :</th>
                <td><br><input type="date" id="dob" placeholder="Enter DOB" required name="dob"></td>
            </tr>

            <tr>
                <th>Gender :</th>
                <td><br><input type="radio" id="gender" name="gender" value="male" checked>Male
                <br><input type="radio" id="gender" name="gender" value="female">Female
                <br><input type="radio" id="gender" name="gender" value="other">Other</td>
            </tr>

            <tr>
                <th><br>Height (in centimeter) :</th>
                <td><br><input type="number" id="height" placeholder="Enter height" name="height" required></td>
            </tr>

            <tr>
                <th><br>weight (in kilogram) :</th>
                <td><br><input type="number" id="weight" placeholder="Enter weight" name="weight" required></td>
            </tr>

            <tr>
                <th><br> Marital status :</th>
                <td> <br><input type="radio" name="mts" id="mts" value="married">Married
                <input type="radio" name="mts" id="mts" value="unmerried" checked >Unmarried</td>

            </tr>

            <tr>
                <th><br>Education details :</th>
                <td><br><textarea rows="3" id="edu" placeholder="Education" name="edu"></textarea></td>
            </tr>
            
            <tr>
                <th><br>Address :</th>
                <td><br><textarea rows="3" id="edu" placeholder="Address" name="add"></textarea></td>
            </tr>

            <tr>
                <th><br> Any special identity (birthmark/tattoo) :</th>
                <td><br><textarea id="brmk" placeholder="Special Identity" rows="2" name="brmk"></textarea></td>
            </tr>

            <tr>
                <th><br>Mail ID:</th>
                <td><br><input type="email" placeholder="Email" id="mail" name="mail" required></td>
            </tr>

            <tr>
                <th><br>Phone number :</th>
                <td><br><input type="tel" placeholder="Phone number" id="phno" name="phno"></td>
            </tr>

            <tr> 
                <th><br>Alive Status :</th>
                <td><br><input type="radio" name="alv" value="alive"checked>Alive
                <input type="radio" name="alv" value="dead">Dead</td>
            </tr>

            <tr>
                <th><br>Picture of Criminal :</th>
                <td><br><input type="file" id="phto" name="phto"></td>
            </tr>
        </table>

    <br>
    <table class="tbl2">
        <tr><th colspan="2"><h3>Criminal's crime datails </h3></th></tr>

        <tr>
            <th> Crime Committed :</th>
            <td> <textarea id="crdetail" placeholder="Enter Crime Details" name="crdt" required></textarea></td>
        </tr>

        <tr>
            <th><br> Crime Partner name (if any) :</th>
            <td><br> <input type="text" id="crpt" placeholder="Name" name="crpt"></input></td>
        </tr>

        <tr>
            <th><br> Crime Date :</th>
            <td> <br><input type="date" id="crdt" required name="crdate"></input></td>
        </tr>

        <tr>
            <th><br>Retribution :</th>
            <td><br><textarea id="retribution" placeholder="Retribution Details" name="retr" required></textarea></td>
        </tr>
        <tr>
            <th><br>Release date :</th>
            <td><br><input type="date" id="redt" name="redt"></input></td>
        </tr>
    </table>

    <br>
    <input type="submit" id="submit" value="Submit" name="submit">    
    </form>
</center>
</body>
</html>
<?php }

else {
  header("location:login.html");
}
  ?>