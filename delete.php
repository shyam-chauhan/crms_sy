

<?php


include "connection.php";
session_start();
if($_SESSION['userid']=="admin") { 

$id = $_GET['id'];

$sql = ("DELETE FROM criminal_dtl WHERE id='$id';");

$res = mysqli_query($conn,$sql);

if($res==1) {
    echo "record deleted !";
}

else {
    $msg = "Failed to Delete";
    header ("location:diaplay.php?error=$msg");
}
?>

<a href="display.php"> GO BACK</a>


<?php }

else {
  header("location:login.html");
}
  ?>