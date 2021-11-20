<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    //Create a connection
    $conn = mysqli_connect($servername,$username,$password);//this takes 3 arguments
    //Die if Connection was not Success
    if(!$conn){
        die("Sorry We failed to connect" . mysqli_connect_error());
    }else{
        echo "connection was Success<br>";
    }


    //create a DB
    $sql = "CREATE DATABASE dbArmaan";//CREATE DATABSE Name_of_Database
    $result = mysqli_query($conn,$sql);//This Function takes 2 Parameters (Conection of dataBase , Created dataBse) 
    //Check for dataBase Creation Success 
    if($result){
        echo "The dataBase was created Successfuly";
    }else {
        echo "The dataBase was not created Successfuly Becuase ---> " . mysqli_error($conn)/*mysqli_error Gets The Error*/ ;
    }
    // echo "the result is <br>";//IF datBase is Already Created it Will Show False 
    // echo var_dump($result);
    // echo "<br>";
?>