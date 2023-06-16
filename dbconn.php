<?php
    $conn = mysqli_connect("localhost","root","","carnetdb");
    if ($conn) {
       die('Connexion echouée' . mysqli_connect_error());
    }
?>