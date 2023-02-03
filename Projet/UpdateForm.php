<?php
include("config.php");
include("My Account.php");

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$password = $_POST["password"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$country = $_POST["country"];
$address = $_POST["adress"];

if( !empty($fname) &&  !empty($lname) && !empty($password) && !empty($email) &&  !empty($tel) && !empty($address) ) {

    $sql2 = "update user set Nom='$lname', Prenom='$fname', Email='$email', Num_Tel='$tel',Country='$country', Address='$address' where ID_User='$id' ";
    $result = $conn->query($sql2);
}
else {
    echo "<script> 
    alert('Update failed, an input field is empty!'); 
    </script>";
}
?>