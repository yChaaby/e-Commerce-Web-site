<?php 
include("connexion.php");

$var = random_int(1, 10000000);
    
    $nom = $_POST['nom'];
    $res1 = $conn->prepare("insert into category VALUES ($var,'$nom')");
    $res1->execute();
    $mess = "une CAT de ID : $var ete ajouté  ";
    $rq = "INSERT INTO `history`(`time`, `Message`) VALUES (now(),'$mess')";
    $conn->query($rq);

?>