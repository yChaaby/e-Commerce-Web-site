<?php
include("connexion.php");
$id = $_POST['id'];
$req = "DELETE FROM `produit` WHERE ID_Prod = $id ";
$res = $conn->prepare($req);
$res->execute();
$mess = "Le Produits de ID : $id a ete supprimé !";
$rq = "INSERT INTO `history`(`time`, `Message`) VALUES (now(),'$mess')";
$conn->query($rq);
?>