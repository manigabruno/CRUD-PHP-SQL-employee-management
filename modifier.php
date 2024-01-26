<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ajouter</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
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