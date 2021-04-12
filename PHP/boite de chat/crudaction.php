

<?php

session_start();
$mysqli = new mysqli('localhost', 'root', '', 'miniboite') or die(mysqli_error($mysqli));
$id = 0;
$update = false;
$nom = '';
$prenom = '';
$pseudo = '';
$mail = '';
$pwd = '';
if (isset($_POST['inscrire'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $pseudo = $_POST['pseudo'];
    $mail = $_POST['mail'];
    $pwd = $_POST['mdp'];



    $sql = " INSERT INTO inscriminiboite ( `nom`, `prenom`, `pseudo`, `mail`, `motdepasse`) VALUES ('$nom','$prenom','$pseudo','$mail','$pwd')";
    $result = mysqli_query($mysqli, $sql);

    $_SESSION['message'] = "L'utilisateur a été sauvegardé";
    $_SESSION['msg_type'] = "success";

    if ($result) {
        header("Location:crud.php");
    } else {
        echo ("error");
    }
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM inscriminiboite WHERE id=$id") or die(mysqli_error($mysqli));
    header("Location:crud.php");

    $_SESSION['message'] = "L'utilisateur a été suprimé";
    $_SESSION['msg_type'] = "danger";
}

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];

    $update = true;
    $result = $mysqli->query("SELECT * FROM inscriminiboite WHERE id=$id");

    $row = $result->fetch_array();
    $nom = $row['nom'];
    $prenom = $row['prenom'];
    $pseudo = $row['pseudo'];
    $mail = $row['mail'];
    $pwd = $row['motdepasse'];
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $pseudo = $_POST['pseudo'];
    $mail = $_POST['mail'];
    $pwd = $_POST['mdp'];

    $mysqli->query("UPDATE inscriminiboite SET nom='$nom', prenom='$prenom', pseudo='$pseudo', mail='$mail', motdepasse='$pwd' WHERE id=$id");

    $_SESSION['message'] = "Le changement a été fait";
    $_SESSION['msg_type'] = "warning";

    header('location:crud.php');
}
?>