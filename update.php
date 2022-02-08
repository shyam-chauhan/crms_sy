<?php

include "connection.php";


if(isset($_POST['submit']))
{   
    $id = $_POST['id'];
    $name = $_POST['nm'];
    $ftnm = $_POST['fnm'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $mts = $_POST['mts'];
    $edu = $_POST['edu'];
    $add = $_POST['add'];
    $brmk = $_POST['brmk'];
    $mail = $_POST['mail'];
    $phno = $_POST['phno'];
    $alv = $_POST['alv'];
    $crdt = $_POST['crdt'];
    $crpt = $_POST['crpt'];
    $crdate = $_POST['crdate'];
    $retr = $_POST['retr'];
    $redt = $_POST['redt'];

    

    
    //SQL query
    $sql = ("UPDATE criminal_dtl SET name='$name',father_name='$ftnm',dob='$dob',gender='$gender',height='$height',weight='$weight',mati_st='$mts',edu_dtl='$edu',address='$add',sp_id='$brmk',mail='$mail',phno='$phno',alive_st='$alv',crime_dt='$crdt',crime_pt='$crpt',crime_date='$crdate',retribution_dt='$retr',relese_dt='$redt' WHERE id='$id';"); 
    
    //running sqlqery
    $res = mysqli_query($conn,$sql);

    echo $res;

    if($res == 1){
        echo "record updated Successfully";
    }
    else {
        echo "something went wrong!";
    }

}
else 
{
    $em = "Unknown Error! Please try again.";
    header("location:update_html.php?error=$em");
}

?>