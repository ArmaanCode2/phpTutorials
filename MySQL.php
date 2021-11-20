<?php
    echo "Welcome to The  Database <br>";
    //Ways to connect to Database
    //1.MySQLi extension only works with MySQL
    //2. PDO Works with every DataBase Systems
    //Connecting to a dataBase
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
?>