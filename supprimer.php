<?php
// connexion a la bdd 
include_once "connexion.php";
// recupération de l'id dans le lien
$id= $_GET['id'];
// requete de suppression
$req = mysqli_query($con , "DELETE FROM employe WHERE id = $id");
// redirection vers la page index.php
header("Location:index.php")
?>