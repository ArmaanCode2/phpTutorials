<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dataBase = "armaan";

    //Create a connection
    $conn = mysqli_connect($servername,$username,$password,$dataBase);//this takes 3 arguments
    //Die if Connection was not Success
    if(!$conn){
        die("Sorry We failed to connect" . mysqli_connect_error());
    }else{
        echo "connection was Success<br>";
    }


    //create a table in DB
        $sql = "CREATE TABLE `new` ( `sno` INT(11) NOT NULL ,  
        `name` VARCHAR(11) NOT NULL ,  `age` INT(11) NOT NULL ,  
        `gender` VARCHAR(11) NOT NULL )";
        $result = mysqli_query($conn,$sql);//This Function takes 2 Parameters (Conection of dataBase , Created dataBse) 

        //Check for Table Creation Success 
        if($result){
            echo "The Table was created Successfuly";
        }else {
            echo "The Table was not created Successfuly Becuase ---> " . mysqli_error($conn)/*mysqli_error Gets The Error*/ ;
        }
?>