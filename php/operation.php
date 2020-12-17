<?php
session_start();
require'db.php';
require_once("component.php");
// Connect();
// echo$servername;
// On create button clic
if(isset($_POST['creer'])){
    // echo'Ajouterrrrrrrrrrr';
    $nom_du_livre=htmlspecialchars_decode($_POST['nom']);
    $auteur_du_livre=htmlspecialchars_decode($_POST['auteur']);
    $prix_du_livre=htmlspecialchars_decode($_POST['prix']);
    if ($nom_du_livre && $auteur_du_livre && $prix_du_livre) {
        # code...
        // echo"saisi";
    $insererLivre=$bdd->prepare("INSERT INTO livres(nom,auteur,prix) VALUES(?,?,?)");
    $insererLivre->execute(array($nom_du_livre,$auteur_du_livre,$prix_du_livre));
    // echo"ajouté";
    TexteNode("success","Livre ajouté");

    }else{
    // echo"non saisi";
    TexteNode("Attention","Veuillez remplir tous les champs"); 
}
}















if(isset($_POST['lire'])){
    echo'lire';
    // Lire();
}
if(isset($_POST['update'])){
    // Update();
    $id=html_entity_decode($_POST['id']);
    $nom=html_entity_decode($_POST['nom']);
    $auteur=html_entity_decode($_POST['auteur']);
    $prix=html_entity_decode($_POST['prix']);
    // $ladate=current
    $date =date('Y-m-d H:i:s');
    // echo($date);
    if($id && $nom && $prix && $auteur){
        $req=$bdd->prepare("UPDATE livres SET nom=?,auteur=?,prix=?,datepub=? WHERE id='$id'");
        $req->execute(array($nom,$auteur,$prix,$date));
    TexteNode("success","Modifiction reussi");
    }else{
        TexteNode("Attention","Veuillez remplir tous les champs");
    }
}
if(isset($_POST['delete'])){
    $id=htmlspecialchars($_POST['id']);
    if($id){
        $req=$bdd->prepare("DELETE FROM livres WHERE id='$id'");
        $req->execute();
        TexteNode("success","Supprimé avec succes");
    }else{
   TexteNode("attention","Aucun ID selectioné");
    }
}




// messages

function TexteNode($class,$message){
    $element="<h5  class='$class'>$message</h5>";
    echo$element;

}
?>