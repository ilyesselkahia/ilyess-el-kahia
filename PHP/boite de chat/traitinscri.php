<?php
session_destroy();
session_start();

include_once('database.php');


$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$pseudo = $_POST['pseudo'];
$mail = $_POST['mail'];
$pwd = $_POST['mdp'];


if (!empty($nom) && !empty($prenom) && !empty($pseudo) && !empty($mail) && !empty($pwd)) {


    $req = ("INSERT INTO inscriminiboite ( `nom`, `prenom`, `pseudo`, `mail`, `motdepasse`) VALUES ('" . $nom . "','" . $prenom . "','" . $pseudo . "','" . $mail . "','" . $pwd . "')");
    $pro = mysqli_query($link, $req);

    // $requ = "INSERT INTO `` VALUES  ('$nom', '$prenom', '$pseudo', '$mail', '$pwd')";
    // mysqli_query($link, $requ)
    //     or die(mysqli_error($link));
    if ($pro) {
        header('location:login.php');
    } else {
        $_SESSION["error"] =  "Quelque chose est incorrect";
        header('location:inscription.php');
    }
} else {
    $_SESSION["error"] =  "Merci de remplir les champs";
    header('location:inscription.php');
}
