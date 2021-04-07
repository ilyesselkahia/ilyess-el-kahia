<?php
include_once('database.php');
session_start();
if (!empty($_SESSION["error"])) {
    $errr = $_SESSION["error"];
} else {
    $errr = "";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleins.css">
    <title>Inscription</title>
</head>

<body>
    <h1>Inscription</h1>
    <p><?php echo $errr;
        session_destroy(); ?></p>
    <form action="traitinscri.php" method="POST">
        <div class="frm">
            <label class="eye" for="nom">
                <input type="text" placeholder="Votre nom" name="nom" id="nom" autofocus>
            </label>


        </div>
        <div class="frm">

            <label class="eye" for="prenom">
                <input type="text" placeholder="Votre prenom" name="prenom" id="prenom">
            </label>



        </div>
        <div class="frm">
            <label class="eye" for="pseudo">
                <input type="text" placeholder="Votre pseudo" name="pseudo" id="pseudo">
            </label>



        </div>
        <div class="frm">
            <label class="eye" for="mail">
                <input type="email" placeholder="Votre mail" name="mail" id="mail">
            </label>



        </div>
        <!-- <div class="frm">
            <label class="eye" for="mail2">
                <input type="email" placeholder="Confirmer votre mail" name="mail2" id="mail2">
            </label> -->



        </div>
        <div class="frm">
            <label class="eye" for="mdp">
                <input type="password" placeholder="Votre mot de passe" name="mdp" id="mdp">
                <div class="password-icon">
                    <i data-feather="eye"></i>
                    <i data-feather="eye-off"></i>
                </div>


            </label>



        </div>
        <!-- <div class="frm">
            <label class="eye" for="mdp2">
                <input type="password" placeholder="Confirmer votre mot de passe" name="mdp2" id="mdp2">
                <div class="password-icon">
                    <i data-feather="eye" class="eye"></i>
                    <i data-feather="eye-off" class="eyeoff"></i>
                </div>
            </label>



        </div> -->


        <button type="submit" name="formins">Je m'inscris</button>
        <button type="reset">Réinitialiser</button>





    </form>


</body>
<script src="https://unpkg.com/feather-icons"></script>
<script src="js/main.js"></script>

</html>