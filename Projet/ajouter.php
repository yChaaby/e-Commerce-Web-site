<?php 
include("connexion.php");
$idCAT = 0;
$var = random_int(1, 10000000);
if (1) {
    
    $nom = $_POST['nom'];
    $Prix = $_POST['prix'];
    $Des = $_POST['des'];
    $IMG = $_POST['URL'];
    $Nc = $_POST['nomCAT'];
    
    $req = "SELECT ID_Cat FROM `category` WHERE Nom_Cat='$Nc' ";
    $res = $conn->prepare($req);
    $res->execute();

    while($ligne =$res -> fetch(PDO::FETCH_ASSOC)){
        $idCAT = $ligne['ID_Cat'];
    }
    $res1 = $conn->prepare("insert into produit VALUES ($var,'$idCAT','$nom',$Prix,'$Des','$IMG')");
    $res1->execute();
    
}

$mess = "un Produit de ID : $var a ete ajouté !";
$rq = "INSERT INTO `history`(`time`, `Message`) VALUES (now(),'$mess')";
$conn->query($rq);


?>