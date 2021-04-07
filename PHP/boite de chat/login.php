<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylee.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>Login page</title>
</head>

<body>
    <h1>Connexion</h1>
    <form action="conex.php" method="POST" name="login">
        <div class="frm">

            <label class="eye" for="email">
                <input type="text" id="pseudo" name="pseudo" placeholder="Votre email@example.com" autofocus required>
            </label>

        </div>
        <div class="frm">

            <label class="eye" for="password">
                <input type="password" id="mdp" name="mdp" placeholder="Votre mot de passe" required>
                <div class="password-icon">
                    <i data-feather="eye" class="eye"></i>
                    <i data-feather="eye-off" class="eyeOff"></i>
                </div>
            </label>



        </div>
        <div class="icon">
            <button title="sign in" type="submit" id="btn">Valider <i class="fas fa-check-circle"> </i></button>
        </div>
 
    </form>
    <div class="btn">

        <div class="icon">
            <button title="sign up" type="submit" id="btn">S'inscrire <a class="lien" href="inscription.php"> <i class="fas fa-user-plus"></i></a></button>
        </div>
    </div>




</body>
<script src="https://unpkg.com/feather-icons"></script>
<script src="js/main.js"></script>

</html>