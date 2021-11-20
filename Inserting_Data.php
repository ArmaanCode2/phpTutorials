<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dataBase = "armaan";
    $conn = mysqli_connect($servername,$username,$password,$dataBase);//this takes 3 arguments
    if(!$conn){
        die("Sorry We failed to connect" . mysqli_connect_error());
    }else{
        echo "connection was Success<br>";
    }
    
    $sql = "INSERT INTO `new` (`name`, `age`, `gender`) VALUES ('pratibha', '41', 'female')";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "The Table was created Successfuly";
    }else {
        echo "The Table was not created Successfuly Becuase ---> " . mysqli_error($conn)/*mysqli_error Gets The Error*/ ;
    }
?>