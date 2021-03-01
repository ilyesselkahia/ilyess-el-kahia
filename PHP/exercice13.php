<?php
$num = $_GET["number"];
$fact = 1;
for ($sor = 2; $sor <= $num; $sor++) {
    $fact = $fact *= $sor;
    echo $fact;
}

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
    <form action="exercice13.php" method="GET">
        <label for="number"></label><br>
        <input type="number" name="number"><br><br>
        <input type="submit" value="submit">


    </form>

</body>

</html>