<?php
session_start();
session_destroy();
include_once('database.php');


$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$pseudo = $_POST['pseudo'];
$mail = $_POST['mail'];
$mail2 = $_POST['mail2'];
$pwd = $_POST['mdp'];
$pwd2 = $_POST['mdp2'];

if (!empty($nom) && !empty($prenom) && !empty($pseudo) && !empty($mail) && !empty($mail2) && !empty($pwd) && !empty($pwd2)) {


    $req = ("INSERT INTO inscriminiboite ( `nom`, `prenom`, `pseudo`, `mail`, `motdepasse`) VALUES ('" . $nom . "','" . $prenom . "','" . $pseudo . "','" . $mail . "','" . $pwd . "')");
    $pro = mysqli_query($link, $req);

    // $requ = "INSERT INTO `` VALUES  ('$nom', '$prenom', '$pseudo', '$mail', '$pwd')";
    // mysqli_query($link, $requ)
    //     or die(mysqli_error($link));
    if ($pro) {
        header('location:login.php');
    } else {
        echo "something went wrong";
    }
} else {
    echo "Field";
}
