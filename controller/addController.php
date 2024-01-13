<?php
include_once("../../shema/connection_bd.php");

if (isset($_POST) & !empty($_POST)) {
    $name = htmlspecialchars($_POST['name']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $filier = htmlspecialchars($_POST['filier']);
    $niveau = htmlspecialchars($_POST['niveau']);
    $phone = htmlspecialchars($_POST['phone']);
    $genre = htmlspecialchars($_POST['genre']);
    $age = htmlspecialchars($_POST['age']);

    $sql =  "INSERT INTO `etudiants` (`name`, `prenom`, `email`, `filier`, `niveau`, `phone`, `date`, `genre`, `age`) VALUES ('$name', ' $prenom', '$email', '$filier', '$niveau', '$phone', current_timestamp(), '$genre', '$age')";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        $message = "l'ajour de l'etudiant a été effectue avec succes!";
    }
}