<?php
if(!isset($_SESSION)){
    session_start();
}
$liste = $_SESSION["todolist"]??[];
$username = $_SESSION["username"]??"";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <?php
        echo "<h1><a href='index.php' class='display-1' style='text-decoration:none'>$username Todo liste</a></h1>";
    ?>

    <a href="connection.php" class="btn btn-outline-success">Connexion</a>
    <a href="ajouterelement.php" class="btn btn-outline-dark">Ajouter un élément</a>
    <a href="deco.php" class="btn btn-outline-danger">Deconnexion</a>
    <?php
    foreach ($liste as $index=>$item) {
        echo "<li class='list-group-item'>$item <a href='modifier.php?num=$index'>?</a> <a href='delete.php?num=$index'>X</a></li>";
    }
    ?>
</body>
</html>