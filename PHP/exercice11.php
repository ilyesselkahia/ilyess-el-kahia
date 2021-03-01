<?php
function age()
{
    $lage = $_POST["age"];
    if ($lage < 18) {
        echo "Vous devez attendre vos 18 ans !";
    } elseif ($lage > 35) {
        echo "Vous avez dépassé l'âge d'inscription ! ";
    } elseif ($lage >= 18 || $lage <= 35) {
        echo "Bienvenue à YouCode ! ";
    }
}
age();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Entrer votre âge :</h1>
    <form name="inscription-youcode" action="exercice11.php" method="post">
        <input type="number" name="age">
        <input type="submit" name="valider" value="Vérifier" />
    </form>
</body>

</html>