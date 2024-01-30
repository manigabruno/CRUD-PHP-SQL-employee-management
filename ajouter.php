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
            // requete d'ajout
            $req = mysqli_query($con , "INSERT INTO employe VALUES(NULL, '$nom', '$prenom', '$age')");
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
        <h2>ajouter un employé</h2>
        <p class="erreur_message">
           <?php
        //    si la variable message existe, affichon son contenu
        if(isset($message)) {
            echo $message;
        }
           ?>
        </p>
        <form action="" method="POST">
            <label>Nom</label>
            <input type="text" name="nom">
            <label>prenom</label>
            <input type="text" name="prenom">
            <label>age</label>
            <input type="number" name="age">
            <input type="submit" value="Ajouter" name="button">
            


        </form>
    </div>
    




</body>
</html>