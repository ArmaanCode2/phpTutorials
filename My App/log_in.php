<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Log in</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="index.php">Sign up</a>
        <a class="nav-link" href="log_in.php">Log in</a>
      </div>
    </div>
  </div>
</nav>

<div class="container mt-3">
  <form action="/FIRST/MY App/log_in.php" method="post">
    <div class="mb-3">
        <label for="email" class="form-label"> Your Email</label>
        <input type="text" name="email"class="form-control" id="email" placeholder="Email...">
    </div>
    <div class="mb-3">
        <label for="passsword" class="form-label">Your Password</label>
        <input type="text" name="password" class="form-control" id="password" placeholder="Password...">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>


<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
$servername = "localhost";
$username = "root";
$password = "";
$dataBase = "log in";

$email = $_POST['email'];
$password1 = $_POST['password'];

$conn = mysqli_connect($servername,$username,$password,$dataBase);//this takes 3 arguments
if(!$conn){
    die("Sorry We failed to connect" . mysqli_connect_error());
}else{
    echo "connection was Success<br>";
}
$sql = "SELECT * FROM `signin` WHERE `email` = '$email' AND `password` = '$password1'";
$result = mysqli_query($conn,$sql);
// $row = mysqli_fetch_assoc($result);
// echo var_dump($row);
echo "To Be Created";
}
?>
</body>
</html>