<?php
include_once("../../shema/connection_bd.php");
if (isset($_POST['login'])) {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $email = htmlspecialchars($_POST['email']);
        $password = sha1 ($_POST['password']);
        //acharge avec sha1
        // nous allons realiser la requette
        $rep = mysqli_query($conn,"SELECT * FROM  admin  WHERE email ='$email' and password ='$password'");
        $cpt = mysqli_num_rows($rep);
        if ($cpt>0){
            header("location: ../../home/admin/admin.php");
        }else {
            $message = "l'adresse email et le mot de passe est inco...";
        }
    
    } else {
        $message = " veillez remplir tous les champs";
    }
}