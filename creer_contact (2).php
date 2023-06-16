<?php
session_start();
?>

<?php include('includes/header.php') ?>
    <div class="container mt-5">

        <?php
            include('message.php');
        ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Ajout de contact
                            <a href="index.php" class="btn btn-danger float-end">Retour</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="post">
                            <div class="mb-3">
                                <label for="nom">Nom</label>
                                <input type="text" name="nom" id="" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="nom">Prenom</label>
                                <input type="text" name="prenom" id="" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="nom">Pays</label>
                                <input type="text" name="pays" id="" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="nom">Genre</label>
                                <input type="text" name="genre" id="" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="nom">Email</label>
                                <input type="email" name="email" id="" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="nom">Telephone</label>
                                <input type="tel" name="telephone" id="" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="nom">Date</label>
                                <input type="date" name="date" id="" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_contact" class="btn btn-primary">Ajouter ce contact</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('includes/footer.php') ?>