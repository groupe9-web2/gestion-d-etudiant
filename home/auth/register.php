<?php
include_once("../../header/header1.php");

include_once ("../../controller/registerController.php");
?>
<main>
    <form action="" method="POST">

        <h1>inscription</h1>
        <?php if (isset($message)) { ?>

            <p class="error"><?php echo $message; ?></p>
        <?php } ?>
        <div>
            <label for="">nom d'utilisateur</label>
            <input type="text" name="name" placeholder="entrer votre nom ...">
        </div>
        <div>
            <label for="">mail</label>
            <input type="email" name="email" placeholder="entrer votre adresse mail...">
        </div>
        <div>
            <label for="">mot de passe...</label>
            <input type="password" name="password" placeholder="entrer mot de passe...">

        </div>
        <button type="submit" name="register">valider</button>

    </form>
</main>
<?php
include_once("footer.php");

?>