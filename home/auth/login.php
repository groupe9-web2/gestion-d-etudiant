<?php
include_once("../../header/header1.php");
include_once ("../../controller/loginController.php");
?>

<main>
    <form action="" method="POST">

        <h1>connexion</h1>
        <?php if (isset($message)) { ?>

            <p class="error"><?php echo $message; ?></p>
        <?php } ?>
        <div>
            <label for="">mail</label>
            <input type="email" name="email" placeholder="entrer votre adresse mail...">
        </div>
        <div>
            <label for="">mot de passe...</label>
            <input type="password" name="password" placeholder="entrer mot de passe...">

        </div>
        <button type="submit" name="login">valider</button>

    </form>
</main>