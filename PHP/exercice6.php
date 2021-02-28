<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice6</title>
</head>

<body>
    <fieldset>
        <form name="imc" method="post" action="exercice6.php">
            <legend>
                <H1>CALLCULER VOTRE INDICE DE MASSE CORPORELLE</H1>
            </legend>

            <table>
                <tr>
                    <td>Entrez votre prénom :</td>
                    <td><input type="text" name="nom" /></td>
                </tr>
                <tr>
                    <td>Entrez votre taille en cm :</td>
                    <td><input type="number" name="tailleCm" /></td>
                </tr>
                <tr>
                    <td>Entrez votre poids en kg :</td>
                    <td><input type="number" name="poidsKg" /></td>
                </tr>
            </table><br>
            <input type="submit" name="valider" value="callculer" /> 
            <input type="reset" name="reset"><br><br>
        </form>
        <?php
        if (!empty($_POST['valider'])) {
            $nom = $_POST['nom'];
            $poidsKg = $_POST['poidsKg'];
            $tailleCm = $_POST['tailleCm'];
            $tailleM = $tailleCm / 100;
            $tailleM = pow($tailleM, 2);
            $imc = $poidsKg / $tailleM;

            if (!preg_match("/^[a-zA-Z -]+$/", $nom)) {
                echo 'Merci de rentrer des lettres dans le champ du prénom';
            } else {
                echo "Bonjour $nom <br> Votre IMC (Indice de Masse Corporelle) exact est de : $imc <br> Vous ";
                if ($imc >= 0 && $imc < 16.5) echo 'êtes en état de dénutrition ! (famine) HONK';
                else if ($imc >= 16.5 && $imc < 18.5) echo 'êtes maigre ! HONK';
                else if ($imc >= 18.5 && $imc < 25) echo 'êtes de corpulence normale';
                else if ($imc >= 25 && $imc < 30) echo 'êtes en surpoids ! HONK';
                else if ($imc >= 30 && $imc < 35) echo 'êtes en état d\'obésité modérée ! HONK';
                else if ($imc >= 35 && $imc < 40) echo 'êtes en état d\'obésité sévère ! HONK';
                else if ($imc >= 40) echo 'êtes en état d\'obésité morbide ! HONK HONK';
            }
        }
        ?>
    </fieldset>

</body>

</html>