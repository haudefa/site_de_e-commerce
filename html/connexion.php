<?php 
//connexion à la base de données
$con = mysqli_connect("localhost","root","","e-commerce");
//verifier la connexion
if(!$con) die('Erreur : '.mysqli_connect_error());



?>