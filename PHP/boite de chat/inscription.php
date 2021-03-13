<?php
include_once('database.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
</head>

<body>
    <main>
        <div align="center">
            <form action="traitinscri.php" method="POST">
                <fieldset>

                    <legend align="center">
                        <h1>Inscription</h1>
                    </legend>
                    <table>
                        <tr>
                            <td align="right">
                                <label for="nom">Nom :</label>
                            </td>
                            <td>
                                <input type="text" placeholder="Votre nom" name="nom" id="nom" autofocus>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                <label for="prenom">Prénom :</label>
                            </td>
                            <td>
                                <input type="text" placeholder="Votre prenom" name="prenom" id="prenom">
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                <label for="pseudo">Pseudo :</label>
                            </td>
                            <td>
                                <input type="text" placeholder="Votre pseudo" name="pseudo" id="pseudo">
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                <label for="mail">Email :</label>
                            </td>
                            <td>
                                <input type="email" placeholder="Votre mail" name="mail" id="mail">
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                <label for="mail2">Confirmation du mail :</label>
                            </td>
                            <td>
                                <input type="email" placeholder="Confirmer votre mail" name="mail2" id="mail2">
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                <label for="mdp">Mot de passe :</label>
                            </td>
                            <td>
                                <input type="password" placeholder="Votre mot de passe" name="mdp" id="mdp">
                            </td>
                        </tr>
                        <tr>
                            <td align="right">
                                <label for="mdp2">Confirmation du mot de passe :</label>
                            </td>
                            <td>
                                <input type="password" placeholder="Confirmer votre MDP" name="mdp2" id="mdp2">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td align="center"><br><input type="submit" value="Je m'inscris" name="formins"></td>
                        </tr>
                    </table>


                </fieldset>
            </form>
        </div>
    </main>
</body>

</html>