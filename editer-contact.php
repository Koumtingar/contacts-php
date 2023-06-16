<?php
session_start();
require 'dbconn.php';
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
                            Modifier contact
                            <a href="index.php" class="btn btn-danger float-end">Retour</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                            if (isset($_GET['id'])) {
                                echo $contact_id = mysqli_real_escape_string($conn, $_GET['id']);
                                $query = "SELECT * FROM contacts WHERE id='$contact_id' ";
                                $query_run = mysqli_query($conn, $query);

                                if (mysqli_num_rows($query_run) > 0) {
                                    $contact = mysqli_fetch_array($query_run);
                                    ?>
                                    
                        <form action="code.php" method="post">

                            <input type="hidden" name="contact_id" value="<?= $contact['id']; ?>">

                            <div class="mb-3">
                                <label for="nom">Nom</label>
                                <input type="text" name="nom" id="" class="form-control" value="<?= $contact['nom']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="nom">Prenom</label>
                                <input type="text" name="prenom" id="" class="form-control" value="<?= $contact['prenom']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="nom">Pays</label>
                                <input type="text" name="pays" id="" class="form-control" value="<?= $contact['pays']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="nom">Genre</label>
                                <input type="text" name="genre" id="" class="form-control" value="<?= $contact['genre']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="nom">Email</label>
                                <input type="email" name="email" id="" class="form-control" value="<?= $contact['email']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="nom">Telephone</label>
                                <input type="tel" name="telephone" id="" class="form-control" value="<?= $contact['telephone']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="nom">Date</label>
                                <input type="date" name="date" id="" class="form-control" value="<?= $contact['date']; ?>">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="update_contact" class="btn btn-primary">Modifier</button>
                                <button type="reset" class="btn btn-danger">Annuler</button>
                            </div>
                        </form>

                        <?php 
                                }
                                else {
                                    echo "<h4>Aucun ID trouvé</h4>";
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('includes/footer.php') ?>