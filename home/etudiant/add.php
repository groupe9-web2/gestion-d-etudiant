<?php
include_once("../../header/header2.php");
include_once("../../controller/addController.php");

?>
<div class="container mt-5">
    <div class="row pt-4">
        <form action="" method="POST" class="form-horizontal  col-md-12 pt-4">
            <h2>ajouter de l'etudiant</h2>
            <?php if (isset($message)) { ?>

                <p class="error"><?php echo $message; ?></p>
            <?php } ?>
            <div class="form-group">
                <label for="nom" class="col-12  control-label mb-3">nom</label>
                <div class="col-sm-12">
                    <input type="text" name="name" class="form-control" id="nom">

                </div>
            </div>
            <div class="form-group">
                <label for="nom" class="col-12  control-label mb-3">prenom</label>
                <div class="col-sm-12">
                    <input type="text" name="prenom" class="form-control" id="nom">

                </div>
            </div>
            <div class="form-group col-sm-10">
                <label for="optionradio" class="col-12  control-label mb-3">genre</label>

                <label class="mr-15">
                    homme: <input type="radio" name="genre" id="optionradio" value="h" checked>
                </label>
                <label>
                    femme: <input type="radio" name="genre" id="optionradio" value="h">
                </label>


            </div>
            <div class="form-group">
                <label for="nom" class="col-12  control-label mb-3">age</label>
                <div class="col-sm-12">
                    <input type="text" name="age" class="form-control" id="nom">

                </div>
            </div>
            <div class="form-group">
                <label for="nom" class="col-12  control-label mb-3">filiére</label>
                <div class="col-sm-12">
                    <input type="text" name="filier" class="form-control" id="nom">
                </div>
            </div>
            <div class="form-group">
                <label for="nom" class="col-12  control-label mb-3">niveau</label>
                <div class="col-sm-12">
                    <input type="number" name="niveau" class="form-control" id="nom">

                </div>
            </div>

            <div class="form-group">
                <label for="nom" class="col-12  control-label mb-3">email</label>
                <div class="col-sm-12">
                    <input type="email" name="email" class="form-control" id="nom">

                </div>
            </div>
            <div class="form-group">
                <label for="nom" class="col-12  control-label mb-3">telephone</label>
                <div class="col-sm-12">
                    <input type="tele" name="phone" class="form-control" id="nom">
                </div>
            </div>
            <div class="pt-4">
                <button type="submit" class="btn btn-primary m-3">valider</button>
                <a href="../../home/etudiant/index.php">
                    <button class="btn btn-success">liste</button>
                </a>
            </div>
        </form>

    </div>
</div>


<script src="../../asset/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>