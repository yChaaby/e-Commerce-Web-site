<?php include("connexion.php");
$res = $conn->prepare("SELECT category.ID_Cat,Nom_Cat,COUNT(*) from produit,category where produit.ID_Cat=category.ID_Cat GROUP by Nom_Cat");
$res->execute();
$res1 = $conn->prepare("select Nom_CAT,`ID_Cat` from category where ID_Cat not in(SELECT category.ID_Cat from produit,category where produit.ID_Cat=category.ID_Cat GROUP by Nom_Cat)");
$res1->execute();
?>
<?php
while ($ligne = $res->fetch(PDO::FETCH_ASSOC)) {
    ?>
<div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    <?php echo $ligne['Nom_Cat']; ?></div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $ligne['COUNT(*)']; ?></div>
                                </div>
                                <div class="col-auto">
                                      <a  class="btn btn-danger btn-circle btn-sm" value=<?php echo $ligne['ID_Cat']; ?> onclick = "del(event)">  <i value=<?php echo $ligne['ID_Cat']; ?> class="fas fa-trash "></i>
                                      </a>
                                      
                                </div>
                            </div>
                        </div>
                    </div>
</div>

<?php } ?>
<?php
while ($ligne1 = $res1->fetch(PDO::FETCH_ASSOC)) {
    ?>
<div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    <?php echo $ligne1['Nom_CAT']; ?></div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                                </div>
                                <div class="col-auto">
                                      <a  class="btn btn-danger btn-circle btn-sm" value=<?php echo $ligne1['ID_Cat']; ?> onclick = "del(event)">  <i value=<?php echo $ligne1['ID_Cat']; ?> class="fas fa-trash "></i>
                                      </a>
                                      
                                </div>
                            </div>
                        </div>
                    </div>
</div>
<?php } ?>