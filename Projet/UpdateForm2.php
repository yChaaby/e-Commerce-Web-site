<?php
include("config.php");
include("Password.php");

$password = $_POST["Cpassword"];

if( !empty($password) ) {

    $sql3 = "update user set Password='$password' where ID_User='$id' ";
    $result = $conn->query($sql3);
}
else {
    echo "<script> 
    alert('Update failed, an input field is empty!'); 
    </script>";
}
?>