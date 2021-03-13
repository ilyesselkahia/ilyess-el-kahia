<?php
include_once('database.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login page</title>
</head>

<body>
    <div id="frm">
        <form action="conex.php" method="POST" name="login">
            <p>
                <label>Pseudo :</label>
                <input type="text" id="pseudo" name="pseudo">
            </p>
            <p>
                <label>Mot de passe :</label>
                <input type="password" id="mdp" name="mdp">
            </p>
            <p>
                <input type="submit" id="btn" value="Valider">
            </p>
        </form>

    </div>

</body>

</html>