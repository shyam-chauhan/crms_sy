<?php

$host = "localhost:3325";
$dbname = "project";
$user = "root";
$password = "";

$conn = new PDO("mysql:host=$host;dbname=$dbname","$user","$password");

if(isset($_POST["login"])) {

    $lt = $_POST['lt'];

    if($lt == 'admin'){

        $query = "SELECT * FROM adminlist WHERE userid = :userid AND password = :password";
        $statement = $conn->prepare($query);

        $statement->execute(
        array(
            'userid' => $_POST["userid"],
            'password' => $_POST["password"]
        )
        );
        $count = $statement->rowCount();

        if($count > 0)
        {
            session_start();
            $_SESSION['userid'] = $_POST['userid'];
            header("location:adminpanel.php");
        }
        else
        {
           header("location:login.html");
        }
    }


else {
            $query = "SELECT * FROM userlist WHERE userid = :userid AND password = :password";
            $statement = $conn->prepare($query);
    
            $statement->execute(
            array(
                'userid' => $_POST["userid"],
                'password' => $_POST["password"]
            )
            );
            $count = $statement->rowCount();
    
            if($count > 0)
            {
                session_start();
                $_SESSION["userid"] = $_POST["userid"];
                echo $_SESSION['userid'];
                header("location:userpanel.php");
            }
            else
            {
                header("location:login.html");
            }
        }
}

?>

