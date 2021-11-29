<?php
$serverName = 'localhost';
$dBUsername = 'root';
$dBPassword = 'root';
$dBName = 'nerdflix';

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName); //connexion à la base de données -> on passe des paramètres de connexion

if (!$conn)  {
    die("connection failed" . mysqli_connect_error());
    /* si la fonction mysqli_connect() retourne 'false', on interrompt la tentative et on produit un message d'erreur */
}