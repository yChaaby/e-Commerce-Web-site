<?php 

session_start();

$conn=mysqli_connect("localhost","root", "","greenstore1") or die(mysqli_error($con));
$email = $_POST['Email'];
$pass  = $_POST['Password'];

if(empty($email)){
    header("Location: login.php?error=Email is required"); 
} else if (empty($pass)){
    header("Location: pass.php?error=Password is required");
    exit();
} else {

    $sql = "SELECT * FROM user WHERE Email = '$email' AND Password = '$pass'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1){

        $row = mysqli_fetch_assoc($result);

        if($row['Email'] === $email && $row['Password'] === $pass){

            $_SESSION['Email'] = $row['Email'];
            $_SESSION['Nom'] = $row['Nom'];
            $_SESSION['Prenom'] = $row['Prenom'];
            $_SESSION['Password'] = $row['Password'];
            $_SESSION['Role'] = $row['Role'];
            $_SESSION['ID'] = $row['ID_User'];

            } else {
            header("Location: login.php?error=Incorrect username or password");
            exit();
        }
    } 
    }

    if ($_SESSION['Role'] == 1) {
        header("Location: index.php");
    } elseif ($_SESSION['Role'] == 0) {
        header("Location: My Account.php");
    } else {
        header("Location: login.php?error=User Not Found");
    }

?>