<?php include("connexion.php"); 
$id = $_POST['id'];
$req = "delete from produit where ID_Cat = $id ";
$res = $conn->prepare($req);
$res->execute();
$req1 = "delete from category where ID_Cat = $id ";
$res1 = $conn->prepare($req1);
$res1->execute();
$mess = "La Cat de ID : $id a ete supprimé !";
$rq = "INSERT INTO `history`(`time`, `Message`) VALUES (now(),'$mess')";
$conn->query($rq);
?>