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

    
$sql = "SELECT * FROM `contactus` WHERE `name` = 'armaan'";
$result = mysqli_query($conn,$sql);

//find the no. of records

$num = mysqli_num_rows($result);
echo $num . " " . "Records found in dataBase";
echo "<br>";
$no = 1;

if($num > 0){
    while($row = mysqli_fetch_assoc($result)){
    echo $no." hello". " " .$row['name'] . " We hacked You and Your email is " . $row['email'];
    echo "<br>";
    $no = $no+1;
    }
}

//usage of where clause to updat data

$sql = "UPDATE `contactus` SET `name` = 'boruto' WHERE `contactus`.`sno` = 2";
$result = mysqli_query($conn,$sql);
$aff = mysqli_affected_rows($conn);//tells how many rows affetced
echo "$aff <br>";
if($result){
    echo "we updated";
}else{
    echo "we could not update";
}
?>