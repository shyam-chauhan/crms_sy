<?php

include "connection.php";

if(isset($_POST['submit']))
{
    echo "<pre>";
    //print_r($_FILES["phto"]);
    echo"</pre>";
    $img_name = $_FILES['phto']['name'];
    $img_size = $_FILES['phto']['size'];
    $tmp_name = $_FILES['phto']['tmp_name'];
    $error = $_FILES['phto']['error'];

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

    

    if($error === 0) 
    {

        if($img_size > 125000) 
        {
            $em="file is too large !";
            header("location:photo.php?error=$em");
        }

        else 
        {
            $image_ex = pathinfo($img_name , PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($image_ex);

            $allowed_exs = array("jpg","png","jpeg");

            if(in_array($img_ex_lc,$allowed_exs)) 
            {
                $new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc;
                $img_upload_path = 'uploads/'.$new_img_name;
                $mv = move_uploaded_file($tmp_name,$img_upload_path);

                //insert into database

                // $sql = "INSERT INTO photo(image_url) 
                //         VALUES('$new_img_name');";
                // mysqli_query($conn,$sql);
                // header("location:view.php");

            }
            else 
            {
                $em = "You can not uploa file of this type";
                header("location:photo.php?error=$em");
            }
        }
   
    }
    //SQL query
    $sql = "INSERT INTO criminal_dtl(name,father_name,dob,gender,height,weight,mati_st,edu_dtl,address,sp_id,mail,phno,alive_st,photo,crime_dt,crime_pt,crime_date,retribution_dt,relese_dt) 
    VALUES('$name','$ftnm','$dob','$gender','$height','$weight','$mts','$edu','$add','$brmk','$mail','$phno','$alv','$img_upload_path','$crdt','$crpt','$crdate','$retr','$redt');";
    
    //running sqlqery
    $res = mysqli_query($conn,$sql);
    $lastid = $conn->insert_id;

    echo $res;

    if($res == 1){
        echo "record inserted Successfully"."ID is : ".$lastid;
    }
    else {
        echo "something went wrong!";
    }

}
    else 
    {
        $em = "Unknown Error! Please try again.";
        header("location:insert_html.php?error=$em");
    }

?>