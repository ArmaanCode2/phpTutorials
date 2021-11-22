<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dataBase = "contacts";
    $conn = mysqli_connect($servername,$username,$password,$dataBase);//this takes 3 arguments
    if(!$conn){
        die("Sorry We failed to connect" . mysqli_connect_error());
    }else{
        echo "connection was Success<br>";
    }


    $sql = "DELETE FROM `contactus` WHERE `name` = 'pratibha' LIMIT 3";//limit sets a limit to how many could be deleted
    $result = mysqli_query($conn,$sql);
    $aff = mysqli_affected_rows($conn);//tells how many rows affetced
    echo "$aff <br>";

    if($result){
        echo "deleted succesfully";
    }else{
        $err = mysqli_error($conn);
        echo "could not delete succesfully because $err";
    }
?>