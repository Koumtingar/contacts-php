<?php

    session_start();
    require 'dbconn.php';

    if (isset($_POST['supprimer-contact.php'])) {
        $contact_id = mysqli_real_escape_string($conn, $_POST['supprimer-contact']);

        $query = "DELETE FROM contacts WHERE id='$contact_id' ";
        $query_run = mysqli_query($conn, $query);

        if ($query_run) {
            $_SESSION['message'] = "Contact supprimé avec succès !";
            header("Location: index.php");
            exit(0); 
        }
        else {
            $_SESSION['message'] = "Contact non supprimé !";
            header("Location: index.php");
            exit(0); 
        }
    }

    if (isset($_POST['update_contact'])) {
        $contact_id = mysqli_real_escape_string($conn, $_POST['contact_id']);

        $nom=mysqli_real_escape_string($conn, $_POST['nom']);
        $prenom=mysqli_real_escape_string($conn, $_POST['prenom']);
        $pays=mysqli_real_escape_string($conn, $_POST['pays']);
        $genre=mysqli_real_escape_string($conn, $_POST['genre']);
        $email=mysqli_real_escape_string($conn, $_POST['email']);
        $telephone=mysqli_real_escape_string($conn, $_POST['telephone']);
        $date=mysqli_real_escape_string($conn, $_POST['date']);

        $query = "UPDATE contacts SET nom='$nom',prenom='$prenom',pays='$pays',genre='$genre',email='$email',telephone='$telephone',dates='$date' WHERE id='$contact_id' ";
        $query_run = mysqli_query($conn, $query)

        if ($query_run) {
            $_SESSION['message'] = "Contact modifié avec succès !";
            header("Location: index.php");
            exit(0); 
        }
        else {
            $_SESSION['message'] = "Contact modifié avec succès !";
            header("Location: index.php");
            exit(0);
        }
    }

    if (isset($_POST['save_contact'])) {
        $nom=mysqli_real_escape_string($conn, $_POST['nom']);
        $prenom=mysqli_real_escape_string($conn, $_POST['prenom']);
        $pays=mysqli_real_escape_string($conn, $_POST['pays']);
        $genre=mysqli_real_escape_string($conn, $_POST['genre']);
        $email=mysqli_real_escape_string($conn, $_POST['email']);
        $telephone=mysqli_real_escape_string($conn, $_POST['telephone']);
        $date=mysqli_real_escape_string($conn, $_POST['date']);

        $query = "INSERT INTO contacts (nom,prenom,pays,genre,email,telephone,dates) VALUES ($nom,$prenom,$pays,$genre,$email,$telephone,$date)";

        $query_run = mysqli_query($conn,$query);
        if ($query_run) {
            $_SESSION['message'] = "Contact ajouté avec succès !";
            header("Location: creer_contact.php");
            exit(0);
        }
        else {
            $_SESSION['message'] = "Contact ajouté avec succès !";
            header("Location: creer_contact.php");
            exit(0);
        }
    }
?>