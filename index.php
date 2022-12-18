<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Un site</title>
</head>
<body bgcolor="#d3d3d3">
    <?php
    function getDirContents($dir, &$results = array()) {
        $files = scandir($dir);

        foreach (array_keys($files, '.git') as $key) {
            unset($files[$key]);
        }
        foreach (array_keys($files, '.idea') as $key) {
            unset($files[$key]);
        }

        foreach ($files as $key => $value) {
            $path = ("/" . $value);
            if (!is_dir($path)) {
                $results[] = $path;
            } else if ($value != "." && $value != "..") {
                getDirContents($path, $results);
                $results[] = $path;
            }
        }

        return $results;
    }

    $fichier = array_reverse((getDirContents('../tds-web-2022')));
    var_dump($fichier);

    $random_color = [];
    function rand_color() {
        return sprintf('#%06X', mt_rand(0x222222, 0xDDDDDD));
    }

    $log_fichier_ouvert = 1;

    foreach ($fichier as $chaque_fichier){
        $nombre_de_slash = substr_count($chaque_fichier,"/")-1;

        //calcul couleur
        if ($nombre_de_slash > count($random_color)){
            $random_color[] = rand_color();
        }

        if ($nombre_de_slash > $log_fichier_ouvert) {
            $log_fichier_ouvert += 1;
        }elseif ($nombre_de_slash < $log_fichier_ouvert){
            $log_fichier_ouvert -= 1;
            echo "</ul></details>";
        }

        if (is_dir($chaque_fichier)){

            if ($nombre_de_slash = $log_fichier_ouvert) {
                $log_fichier_ouvert += 1;
            }

            echo "<details><summary>";
            echo "<div style='display:flex;'><img src='dir.png' style='width: 30px; height: 30px;'><p style='color:".$random_color[$nombre_de_slash-1]."; font-weight: bold;'>".$chaque_fichier."</p></div>";
            echo "</summary><ul>";

        }else{
            echo "<li>";
            echo "<div style='display:flex;'><img src='file.png' style='width: 30px; height: 30px;'><p style='color:black';><a href='$chaque_fichier' style='text-decoration:none; color:black;'>".$chaque_fichier."</a></p></div>";
            echo "</li>";
        }
    }
    ?>
</body>
</html>