<?php
if (isset($_POST["submit"])) {
 // vérifie que le user utilise bien le bouton 'submit'

    $name = $_POST["fullname"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password1 = $_POST["password1"];
    $password2 = $_POST["password2"];
// récupération des données du formulaire de la page 'signin.php'

require_once 'databasehandler-inc.php'; //on se connecte à la base de données

require_once 'functions-inc.php'; //on fait appel à diférentes fonctions qu'on va utiliser ci-dessous

if (emptyInputSignup($name, $email, $username, $password1, $password2) !== false ){
    header("location: ../signin.php?error=emptyinput"); //si un des champs est vide, le user est renvoyé à la page 'signin" et on passe une info sur l'erreur dans l'url
    exit(); // après le renvoi, on force l'arrêt du script
}
if (invalidUid($username) !== false ){
    header("location: ../signin.php?error=invaliduid"); //si le username est invalide, le user est renvoyé à la page 'signin" et on passe une info sur l'erreur dans l'url
    exit(); 
}
if (invalidEmail($email) !== false ){
    header("location: ../signin.php?error=invalidemail"); // si l'email est invalide, le user est renvoyé à la page 'signin" et on passe une info sur l'erreur dans l'url
    exit(); 
}
if (pwdMatch($password1, $password2) !== false ){
    header("location: ../signin.php?error=passwordsdontmatch"); // si les mots de passe sont différents, le user est renvoyé à la page 'signin" et on passe une info sur l'erreur dans l'url
    exit(); 
}
if (uidExists($conn, $username, $email) !== false ){
    header("location: ../signin.php?error=usernametaken"); // si le username existe déjà, le user est renvoyé à la page 'signin" et on passe une info sur l'erreur dans l'url
    exit(); 
}

createUser($conn, $name, $email, $username, $password1);


}
else {
    header("location: ../signin.php");// dans la négative, il est renvoyé vers la page 'signin.php'
    exit();// après le renvoi, on force l'arrêt du script
}
