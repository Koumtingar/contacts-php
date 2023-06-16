<?php
    session_start();
    require 'dbconn.php';
?>

<?php include('includes/header.php'); ?>
    <div class="container">

        <?php include('message.php') ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Details des contacts
                            <a href="creer_contact.php" class="btn btn-success float-end"><i class="bi bi-plus"></i> Ajouter</a>
                        </h4>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Pays</th>
                                <th>Genre</th>
                                <th>Email</th>
                                <th>Telephone</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                            <tbody>
                                <?php
                                    $query = "SELECT * FROM contacts";
                                    $query_run = mysqli_query($conn,$query);

                                    if (mysqli_run_rows($query_run) > 0) {
                                       foreach($query_run as $contact){
                                            ?>
                                            <tr>
                                                <td><?= $contact['id']; ?></td>
                                                <td><?= $contact['nom']; ?></td>
                                                <td><?= $contact['prenom']; ?></td>
                                                <td><?= $contact['pays']; ?></td>
                                                <td><?= $contact['genre']; ?></td>
                                                <td><?= $contact['email']; ?></td>
                                                <td><?= $contact['telephone']; ?></td>
                                                <td><?= $contact['date']; ?></td>
                                                <td>
                                                    <a href="voir-contact.php?id=<?= $contact['id']; ?>"><i class="fa fa-view"></i></a>
                                                    <a href="editer-contact.php?id=<?= $contact['id']; ?>"><i class="fa fa-edit"></i></a>
                                                    
                                                    <form action="code.php" method="post" class="d-inline">
                                                        <button type="submit" name="supprimer-contact" value="<? $contact['id']; class="fa fa-trash" ?>"></button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                       }
                                    }
                                    else {
                                        echo "<h5>Aucun enregistrement trouvé</h5>";
                                    }
                                ?>
                            </tbody>
                        </thead>
                    </table>
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('includes/footer.php') ?>
    