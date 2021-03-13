

<?php
session_start();
$pseudo = $_SESSION['nom'];
include_once('database.php');

// if (!empty($_POST['formins'])) {
//     $requ = "INSERT INTO inscriminiboite (nom , prenom , pseudo , mail , motdepasse) VALUES (" . $_POST['nom'] . " , " . $_POST['prenom'] . " , " . $_POST['pseudo'] . " , " . $_POST['mail'] . " , " . $_POST['pwd'] . ")";
//     $pro1 = mysqli_query($link, $requ);
//     header('location: index.php');
// } else {
//     header('location:index.php');
// }
// echo $_POST['message'];
if (!empty($_POST['message'])) {


    $req = ("INSERT INTO messages(utilisateur, contenu_message) VALUES ('" . $pseudo . "','" . $_POST['message'] . "')");
    $pro = mysqli_query($link, $req);
    header('Location: index.php');
} else {
    header('Location: index.php');
}

// si le message est envoyé correctement
    // récupérer les données dans des variables
    // si les valeurs récupéré sont vides
        //se redériger ver la page index avec le message d'erreur sauvgarde dans un query string
    // si non afficher préparer la requête d'insertion
    // vérifier qu'elle s'execute correctement
    // s'il y a une erreur afficher le message puis arrêter le programme avec la "die"
    // si non se redériger à la page index qui devera insérer le message nouvellement inséré
