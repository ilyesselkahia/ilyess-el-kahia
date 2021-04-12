<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <?php require_once 'crudaction.php'; ?>
    <?php if (isset($_SESSION['message'])) : ?>
        <div class="alert alert-<?= $_SESSION['msg_type'] ?>">

            <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            ?>

        </div>
    <?php endif ?>



    <?php
    $mysqli = new mysqli('localhost', 'root', '', 'miniboite') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM inscriminiboite") or die($mysqli->error);
    ?>


    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Pseudo</th>
                <th scope="col">Mail</th>
                <th scope="col">Mot de passe</th>
                <th scope="col" colspan="2">Action</th>
            </tr>
        </thead>
        <?php while ($row = $result->fetch_assoc()) : ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nom']; ?></td>
                <td><?php echo $row['prenom']; ?></td>
                <td><?php echo $row['pseudo']; ?></td>
                <td><?php echo $row['mail']; ?></td>
                <td><?php echo $row['motdepasse']; ?></td>
                <td>
                    <a href="crud.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Editer</a>
                    <a href="crudaction.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Suprimer</a>
                </td>
            </tr>
        <?php
        endwhile;
        ?>
    </table>


    <?php
    function pre_r($array)
    {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }
    ?>
    <div align="center" style="padding:0rem 40rem 0rem 40rem">
        <form action="crudaction.php" method="POST" class="form form-dark">
        <input type="hidden" name="id" value="<?php echo $id;?>">
            <div class="form-group">

                <input type="text" name="nom" class="form-control" value="<?php echo $nom; ?>" placeholder="Entrer le nom">
            </div>
            <div class="form-group">

                <input type="text" name="prenom" class="form-control" value="<?php echo $prenom; ?>" placeholder="Entrer le prénom">
            </div>
            <div class="form-group">

                <input type="text" name="pseudo" class="form-control" value="<?php echo $pseudo; ?>" placeholder="Entrer le pseudo">
            </div>
            <div class="form-group">

                <input type="email" name="mail" class="form-control" value="<?php echo $mail; ?>" placeholder="Entrer le mail">
            </div>
            <div class="form-group">

                <input type="password" name="mdp" class="form-control" <?php echo $pwd; ?> placeholder="Entrer le mot de passe">
            </div>
            <div class="form-group">
                <?php
                if ($update == true) :
                ?>
                    <button type="submit" class="btn btn-info" name="update">Mettre à jour</button>
                <?php else : ?>
                    <button type="submit" class="btn btn-primary" name="inscrire">Inscrire</button>
                <?php endif; ?>
            </div>
        </form>
    </div>



</body>

</html>