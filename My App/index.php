<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Sign up</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a  class="navbar-brand" href="log_in.php">Log in</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="index.php">Sign up</a>
      </div>
    </div>
  </div>
</nav>

<!--Log in start-->
<div class="container mt-3">
  <form action="/FIRST/MY App/index.php" method="post">
  <div class="mb-3 center">
    <label for="name" class="form-label">Name</label>
    <input placeholder="Name..." type="name" class="form-control" name="name" id="name" aria-describedby="emailHelp">
  </div>
  <div class="mb-3 center">
    <label for="email" class="form-label">Email address</label>
    <input placeholder="Email..." type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your Email with anyone else.</div>
  </div>
  <div class="mb-3 center">
    <label for="password" class="form-label">Password</label>
    <input placeholder="Password..." name="password" type="password" class="form-control" id="exampleInputPassword1">
    <div id="passwordHelp" class="form-text">We'll never share your Password with anyone else.</div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<!--Log in end-->
<style>
    
</style>
<!-- PHP Start-->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
 $name = $_POST['name'];
 $email = $_POST['email'];
 $password1 = $_POST['password'];

 $servername = "localhost";
 $username = "root";
 $password = "";
 $dataBase = "log in";
 $conn = mysqli_connect($servername,$username,$password,$dataBase);//this takes 3 arguments
 if(!$conn){
     die("Sorry We failed to connect" . mysqli_connect_error());
 }else{
     echo "You Have Finally Signed up <br>";
 }
 
 $sql = "INSERT INTO `signin` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password1')";
 $result = mysqli_query($conn,$sql);
}
?>
<!-- PHP End-->
<!--make a log in and get data-->
   </body>
</html>