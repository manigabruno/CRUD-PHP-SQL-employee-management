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
     // connexion a la bdd
     include_once "connexion.php";
    //  on recupere l'id dans le lien
    $id = $_GET['id'];
     // requete pour afficher les infos d'un employé
     $req = mysqli_query($con , "SELECT * FROM employe WHERE id = $id");
     $row = mysqli_fetch_assoc($req);

    // verifier que le bouton cliqué a bien été ajouté
    if(isset($_POST['button'])) {
        // extraction des informations envoyé dans les variables par la methode POST
        extract($_POST);
        // vérifier que tous les champs on été remplis
        if(isset($nom) && isset($prenom) && $age) {
            // requete de modification
            $req = mysqli_query($con, "UPDATE employe SET nom = '$nom' , prenom = '$prenom' , age = '$age' WHERE id = $id");

            if($req) { // si la requete à été effectué avec succes, on fait un redirection
                header("location: index.php");
            }else{ 
                $message = "employé non modifier";
            }

        }else {
            // sinon 
            $message = "Veuillez remplir tous les champs";
        } 
    }

    ?>
    <div class="form">
        <a href="index.php" class="back_btn"><img src="Gestion des employés/images/back.png">retour</a>
        <h2>Modifier l'employé: <?=$row['nom']?> </h2>
        <p class="erreur_message">
            <?php
            if(isset($message)) {
                echo $message ;
            }

            ?>
        </p>
        <form action="" method="POST">
            <label>Nom</label>
            <input type="text" name="nom" value="<?=$row['nom']?>">
            <label>prenom</label>
            <input type="text" name="prenom" value="<?=$row['prenom']?>">
            <label>age</label>
            <input type="number" name="age" value="<?=$row['age']?>">
            <input type="submit" value="modifier" name="button">
            


        </form>
    </div>
    




</body>
</html>