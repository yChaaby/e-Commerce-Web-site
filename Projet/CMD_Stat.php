<?php
$conn = new PDO("mysql:host=localhost;dbname=GreenStore1", "root", "");
$id = $_POST['id'];
$st = $_POST['stat'];
$req = "UPDATE commande SET Statut='$st' WHERE ID_Com= $id";
$res=$conn->query($req);
?>