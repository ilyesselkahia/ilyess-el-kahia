<?php
include_once('database.php');
session_start();
$pseudo = $_SESSION['nom'];

if (empty($pseudo)) {
    header("location:login.php");
}



//selectionner les message dans la base de donnée
$query = "SELECT * FROM messages ORDER BY id_message DESC LIMIT 0,20";
$results = mysqli_query($link, $query);
$messages = mysqli_fetch_assoc($results);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat box</title>
    <!-- <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet"> -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="css/stylechat.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    <div style="padding-top: 1%;" class="container">
        <div class="titleBar">
            <h1>Salut <?php echo $pseudo ?></h1>

        </div>
        <div class="messages container">
            <ul style="height: 100%">
                <?php foreach ($results as $row) : ?>

                    <li class="message">
                        <span class="pseudochat">
                            <?php
                            echo $row["utilisateur"];
                            ?>
                            <span class="timechat">
                                <?php
                                echo $row["temps"];
                                ?>
                            </span>
                        </span>
                        <span class="messagechat">
                            <?php
                            echo $row["contenu_message"];
                            ?>
                        </span>

                    </li>
                <?php endforeach ?>
            </ul>
        </div>
        <div class="containerput">
            <form class="comment" action="traitement.php" method="post">
                <div class="lol" style="display: flex;justify-content: space-between;">
                    <div style="display: flex;width: 85%;">
                        <input type="text" name="message" id="message" placeholder="Votre message" autofocus required>
                    </div>
                    <div>
                        <button title="send" type="submit" class="envoyer" name="envoyer"><i class="far fa-paper-plane"></i></button>
                        <button title="reset msg input" type="reset" class="reset" name="reset"><i class="fas fa-trash-alt"></i></button>

                    </div>
                </div>

            </form>

            <a style="margin: 0 auto;" href="logout.php"><button title="logout"><i class="fas fa-power-off"></i></button></a>


        </div>
    </div>

</body>

</html>