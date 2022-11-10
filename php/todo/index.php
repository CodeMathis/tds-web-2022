<?php
if(!isset($_SESSION)){
    session_start();
}
$liste = $_SESSION["todolist"]??[];
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
    <h1>Todo liste</h1>
    <a href="ajouterelement.php" class="btn btn-dark">Ajouter un élément</a>
    <?php
    foreach ($liste as $index=>$item) {
        echo "<li class='list-group-item'>$item <a href='delete.php?num=$index'>X</a></li>";
    }
    ?>
    <a href="ajouterelement.php" class="btn btn-dark"></a>
    <a href="ajouterelement.php" class="btn btn-dark"></a>
    <a href="ajouterelement.php" class="btn btn-dark"></a>
    <a href="ajouterelement.php" class="btn btn-dark"></a>
    <a href="deco.php" class="btn btn-dark">Deconnexion</a>
</body>
</html>