<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gestion des employés</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <a href="ajouter.php" class="Btn_add"> <img src="Gestion des employés/images/plus.png">Ajouter</a>
        
        <table>
            <tr id="items">
                <th>Nom</th>
                <th>prenom</th>
                <th>Age</th>
                <th>Modifier</th>
                <th>supprimer</th>
            </tr>
            <?php
                //inclure la page de connexion 
                include_once "connexion.php";
                //requete pour afficher la listes des employes
                $req = mysqli_query($con , "SELECT * FROM employe");
                if(mysqli_num_rows($req) == 0) {
                    // s'il n'existe pas d'employé dans la base de donnée, alors on affiche ce message
                    echo "il n'y pas encore d'employé ajouté !";
                } else {
                    // sinon on affiche la liste des employés
                    while($row=mysqli_fetch_assoc($req)) {
                        ?>
                        <tr>
                            <td> <?= $row['nom']?></td>
                            <td> <?= $row['prenom']?></td>
                            <td> <?= $row['age']?></td>
                            <!-- nous allons mettre l'id de chaque emplyé dans ce lien  -->
                            <td><a href="modifier.php?id=<?=$row['id']?>"><img src="Gestion des employés/images/pen.png"></a></td>
                            <td><a href="supprimer.php?id=<?=$row['id']?>"><img src="Gestion des employés/images/trash.png"></a></td>
                        </tr>
                        <?php
                    }
                }
             ?>
            
        </table>












    </div>
</body>
</html>