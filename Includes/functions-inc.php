<?php
function emptyInputSignup($name, $email, $username, $password1, $password2) {
    $result;
    if (empty($name) || empty($email) || empty($username) || empty($password1) || empty($password2)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
function invalidUid($username) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true; //s'il n'y a pas de correspondance avec ces caractères, la fonction retourne la valeur 'true'

    }
    else {
        $result = false;
    }
    return $result;
}
function invalidEmail($email) {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true; //si le champ ne contient pas un email valide (utilisation de"!"), la fonction retourne la valeur 'true'

    }
    else {
        $result = false;
    }
    return $result;
}
function pwdMatch($password1, $password2) {
    $result;
    if ($password1 !== $password2) {
        $result = true; //s'il n'y a pas de correspondance entre les mots de passe, la fonction retourne la valeur 'true'

    }
    else {
        $result = false;
    }
    return $result;
}

function uidExists($conn, $username, $email) {
    $sql = "SELECT * FROM users WHERE usersUsername = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);// on crée un 'prepared statement ' pour empêcher une injection dans la base via le champ 'username'
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signin.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else{
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

function createUser($conn, $name, $email, $username, $password1) {
    $sql = "INSERT INTO users (usersFullname, usersEmail, usersUsername, usersPassword1) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);// on crée un 'prepared statement ' pour empêcher une injection dans la base via le champ 'username'
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signin.php?error=stmtfailed");
        exit();
    }
    $hashedPwd = password_hash($password1, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signin.php?error=none");
    exit();
}
