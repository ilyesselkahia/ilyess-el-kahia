<?php

include_once('database.php');
session_start();

$mail = $_POST['pseudo'];
$mdp = $_POST['mdp'];

if (!empty($mail) && !empty($mdp)) {


    $req = ("SELECT * FROM inscriminiboite WHERE mail = '$mail' and motdepasse = '$mdp' ");
    $pro = mysqli_query($link, $req);
    $row = mysqli_num_rows($pro);





    if ($row == 0) {
        echo "Quelque chose est incorrect!";
    } else {



        foreach ($pro as $row) {
            $_SESSION['nom'] = $row['pseudo'];
            $_SESSION['id'] = $row['id'];
        }
        header('location:index.php');
    }
} else {
    echo "Merci de remplir les champs!";
}
