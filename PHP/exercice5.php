<?php
$lname = $_GET['nom'];
$fname = $_GET['prenom'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style5.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1 class="tapper"><?php echo "Bonjour, je m'appelle : $fname $lname " ?></h1>
    </div>
</body>

</html>

<!-- http://localhost/phptest/exercice5.php?nom=elkahia&prenom=ilyess -->