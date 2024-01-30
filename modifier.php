<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajouter</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php

    // verifier que le bouton cliqué a bien été ajouté
    if(isset($_POST['button'])) {
        // extraction des informations envoyé dans les variables par la methode POST
        extract($_POST);
        // vérifier que tous les champs on été remplis
        if(isset($nom) && isset($prenom) && $age) {
            // connexion a bdd
            include_once "connexion.php";
            // requete pour afficher les infos d'un employé
            $req = mysqli_query($con , "SELECT * FROM employe WHERE id = $id");
            if($req) { // si la requete à été effectué avec succes, on fait un redirection
                header("location: index.php");
            }else{ 
                $message = "employé non ajouté";
            }

        }else {
            // sinon 
            $message = "Veuillez remplir tous les champs";
        }
        
    }


    ?>
    <div class="form">
        <a href="index.php" class="back_btn"><img src="Gestion des employés/images/back.png">retour</a>
        <h2>Modifier l'employé</h2>
        <p class="erreur_message">
            veuillez remplir tous les champs
        </p>
        <form action="" method="POST">
            <label>Nom</label>
            <input type="text" name="nom">
            <label>prenom</label>
            <input type="text" name="prenom">
            <label>age</label>
            <input type="number" name="age">
            <input type="submit" value="modifier" name="button">
            


        </form>
    </div>
    




</body>
</html>