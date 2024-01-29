<?php 
// connexion a la bd
$con = mysqli_connect("localhost","root","","entrepise crud");
if(!$con) {
    echo "vous n'etes pas connecté a la base de donnée";
}
?>