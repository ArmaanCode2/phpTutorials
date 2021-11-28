<?php
$servername = "localhost";
$username = "root";
$password = "";
$dataBase = "Favorites";

$conn = mysqli_connect($servername,$username,$password,$dataBase);

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $color = $_POST['color'];
$sql = "INSERT INTO `favor` (`name`, `color`) VALUES ('$name' , '$color' )";
$result = mysqli_query($conn,$sql);
}
?>