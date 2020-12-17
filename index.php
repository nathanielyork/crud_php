<?php
    require_once("../crud/php/component.php");
    require_once("../crud/php/db.php");
    require_once("../crud/php/operation.php");
    // Connect();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livres</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
<!-- custom css link -->
<link rel="stylesheet" href="style.css">
</head>
<body>
<main>
    <div class="container text-center">
        <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-book"></i>Boutique de livres</h1>
        <div class="d-flex justify-content-center">
            <form action="" method="post" class="w-50">
                <div class="py-2">
                </div>
                <div class="pt-2">
                        <?php inputElement("<i class=\"fas fa-id-badge\"></i>","ID","id","") ?>
                </div>
                <div class="pt-2">
                        <?php inputElement("<i class=\"fas fa-book\"></i>","Nom","nom","") ?>
                </div>
               
               <div class="row pt-2">
                <div class="col">
                <?php inputElement("<i class=\"fas fa-people-carry\"></i>","Auteur","auteur","") ?>
                </div>

                <div class="col">
                <?php inputElement("<i class=\"fas fa-dollar-sign\"></i>","Prix","prix","") ?>
                </div>
                </div>
                <div class="d-flex justify-content-center">
                    <?php buttonElement("btn-create","btn btn-success","<i class=\"fas fa-plus\"></i>","creer","dat-toogle='tooltip' data-placement='bottom' title='Ajouter'") ?>
                    <?php buttonElement("btn-lire","btn btn-primary","<i class=\"fas fa-sync\"></i>","lire","dat-toogle='tooltip' data-placement='bottom' title='lire'") ?>
                    <?php buttonElement("btn-update","btn btn-light border","<i class=\"fas fa-pen-alt\"></i>","update","dat-toogle='tooltip' data-placement='bottom' title='Mettre à jour'") ?>
                    <?php buttonElement("btn-delete","btn btn-danger border","<i class=\"fas fa-trash-alt\"></i>","delete","dat-toogle='tooltip' data-placement='bottom' title='Supprimer'") ?>
                </div>
              


            </form>
        </div>
        <!-- Bootstrap table -->
       
        <div class="d-flex table-data">
        <table class="table table-striped table-dark">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nom Du Livre</th>
                    <th>Auteur</th>
                    <th>Prix du livre</th>
                    <th>Publié le</th>
                    <!-- <th>Editer</th> -->
                </tr>
                
            </thead>
            
            <tbody id="tbody">
            <?php
        $LesLivres=$bdd->prepare("SELECT * FROM livres ORDER BY datepub DESC");
        $LesLivres->execute();
        // while ($uneForm=$Lesformations->fetch(PDO::FETCH_OBJ)) {
// if (rowCout($LesLivres)=0) {
//     echo'rien';
// }
        while ($unLivre=$LesLivres->fetch(PDO::FETCH_OBJ)) {
            
      

        ?>
                <tr>
                    <td data-id="<?= $unLivre->id?>"><?= $unLivre->id?></td>
                    <td data-id="<?= $unLivre->nom?>"><?= $unLivre->nom ?></td>
                    <td data-id="<?= $unLivre->auteur?>"><?= $unLivre->auteur ?></td>
                    <td data-id="<?= $unLivre->prix?>"><?= $unLivre->prix?></td>
                    <td><?= $unLivre->datepub?></td>
                   
                    <!-- <td><i class="fas fa-edit btnedit"></i></td> -->
                    <?php
    }
    ?>
                </tr>
            </tbody>
        </div>
        </table>
    </div>
   
</main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="../crud/php/main.js"></script>
</body>
</html>