<?php

// se connecter à MySQL
$link = mysqli_connect('localhost', 'root', '', 'miniboite');

// tester la connexion
if (mysqli_connect_errno()) {
    die('erreur de connexion : ' . mysqli_connect_error());
}
?>