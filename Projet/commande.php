<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Commandes</title>

    <!-- Custom fonts for this template -->
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css”/>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css” />

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />


</head>

<body id="page-top">

   
                    


<?php
$conn = new PDO("mysql:host=localhost;dbname=GreenStore1", "root", "");
$req = "SELECT ID_Com,user.Nom,user.Prenom,ID_Prod,Quantite,Total,Statut FROM commande,user WHERE user.ID_User=commande.ID_User";
$res=$conn->query($req);
?>
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Les Produits</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID CMD</th>
                                            <th>Client</th>
                                            <th>Produits</th>
                                            <th>Quantité</th>
                                            <th>Prix Total</th>
                                            <th>Statut</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    <?php
    while($ligne =$res -> fetch(PDO::FETCH_ASSOC)){
    ?>
    <link rel="stylesheet" href="style.css">
    <tr>
        <td><?php echo $ligne['ID_Com'] ?></td>
        <td><?php echo $ligne['Nom']." ".$ligne['Prenom'] ?></td>
        <td><?php echo $ligne['ID_Prod'] ?></td>
        <td><?php echo $ligne['Quantite'] ?></td>
        <td><?php echo $ligne['Total'] ?></td>
        <td><?php echo $ligne['Statut'] ?></td>
        <td value=<?php echo $ligne['ID_Com'] ?> ><a  class="btn btn-danger btn-circle btn-sm" value="STATUT A" value=<?php echo $ligne['ID_Com'] ?> onclick = "modify(event)">  
                      </a>
                      <a  class="btn btn-info btn-circle btn-sm" value="STATUT B" onclick = "modify(event)">           
                                    </a>
                                    <a href="#"  class="btn btn-warning btn-circle btn-sm" value="STATUT C" onclick = "modify(event)"></a>
    </tr>
    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
           

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>






