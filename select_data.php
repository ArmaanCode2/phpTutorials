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

$sql = "SELECT * FROM `contactus`";
$result = mysqli_query($conn,$sql);

//find the no. of records

$num = mysqli_num_rows($result);
echo $num . " " . "Records found in dataBase";
echo "<br>";
//display returned by query
//we can fetch better by while loop
if($num > 0){
    while($row = mysqli_fetch_assoc($result)){
    // echo var_dump($row);
    echo $row['sno']. " " ."hello". " " .$row['name'] . " " . "We hacked You and Your email is" . " " . $row['email'];
    echo "<br>";
    }
}
?>