<?php error_reporting(0); ?>

<?php
$conn=mysqli_connect("localhost","root", "","greenstore1") or die(mysqli_error($conn));

$Email = $_POST['email'];
$Pass = $_POST['password'];
$Prenom= $_POST['prenom'];
$Nom = $_POST['nom'];
$Num = $_POST['num'];
$count = $_POST['country'];
$Add = $_POST['address'];




if(!empty($Email) && !empty($Pass) && !empty($Prenom) && !empty($Nom) && !empty($Num) && !empty($count) && !empty($Add)) {

$req = "INSERT INTO user (Email, Password, Role, Prenom, Nom, Num_Tel, Country, Address) VALUES ('$Email', '$Pass', '0', '$Prenom', '$Nom', '$Num' , '$count', '$Add')";

$rs=mysqli_query($conn, $req); 
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN-UP</title>
    <link rel="stylesheet" href="./style.css">
   </head>
<body>
  <div class="wrapper">
    <h2>Registration</h2>
    <form action="sign.php" method="post">

      <div class="input-box">
        <input type="text" name="email" placeholder="Enter your Email">
      </div>

      <div class="input-box">
       <input type="password" name="password" placeholder="Enter Your Password">
      </div>

      <div class="input-box">
       <input type="text" name="prenom" placeholder="Enter Your Name">
      </div>

      <div class="input-box">
       <input type="text" name="nom" placeholder="Enter Your Family Name">
      </div>

      <div class="input-box">
       <input type="text" name="num" placeholder="Enter Your Number">
      </div>

      <div class="input-box">
       <input type="text" name="country" placeholder="Enter Your Country">
      </div>

      <div class="input-box">
       <input type="text" name="address" placeholder="Enter Your Address">
      </div>

      <div class="input-box button">
        <input type="Submit" value="Sign Up">
      </div>

      <div class="text">
        <h3>Already have an account? <a href="login.html">Login now</a></h3>
      </div>
    </form>
  </div>
</body>
</html>
 