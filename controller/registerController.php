<?php
include_once("../../shema/connection_bd.php");
if (isset($_POST['register'])) {
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])) {
        $name = htmlspecialchars($_POST['name']);
        $email =htmlspecialchars($_POST['email']);
        $password = sha1($_POST['password']);
        $sql = "INSERT INTO `admin` (`name`, `password`, `email`) VALUES ('$name', '$password', '$email')";
        $rep = mysqli_query($conn, $sql);

        if ($rep){
            header("location: ../../home/auth/login.php");
            $message = "bien";
            
        }else {
            $message = "villez remplir les champs";
        }
        
    }else {
        $message = "champ vide!";
    }
}