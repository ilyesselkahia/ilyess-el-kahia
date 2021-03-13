<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    for ($i = 1; $i <= 10; $i++) {
        if ($i == 4 || $i == 9)
            continue;
        echo "$i<br>";
    }
    ?>
    <?php
    for ($i = 1; $i <= 100; $i++) {
        if ($i / 3 == round($i / 3) && $i / 5 == round($i / 5)) {
            echo $i . " FizzBuzz<br />";
        } else if ($i / 3 == round($i / 3)) {
            echo $i . " Fizz<br />";
        } else if ($i / 5 == round($i / 5)) {
            echo $i . " Buzz<br />";
        } else {
            echo $i . "<br />";
        }
    }
    ?>
</body>

</html>