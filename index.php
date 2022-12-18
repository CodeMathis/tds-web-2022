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
            $path = ($dir . "/" . $value);
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

    $random_color = [];
    function rand_color() {
        return sprintf('#%06X', mt_rand(0x222222, 0xDDDDDD));
    }

    foreach ($fichier as $chaque_fichier){
        $nombre_de_slash = substr_count($chaque_fichier,"/")-1;

        if ($nombre_de_slash > count($random_color)){
            $random_color[] = rand_color();
        }

        $espace = str_repeat("______", $nombre_de_slash);
        if (is_dir($chaque_fichier)){
            echo "<div style='display:flex;'><img src='dir.png' style='width: 30px; height: 30px;'><p style='color:".$random_color[$nombre_de_slash-1]."; font-weight: bold;'>".$espace.$chaque_fichier."</p></div>";
        }else{
            echo "<div style='display:flex;'><img src='file.png' style='width: 30px; height: 30px;'><p style='color:black';><a href='$chaque_fichier' style='text-decoration:none; color:black;'>".$espace.$chaque_fichier."</a></p></div>";
        }
    }
    ?>
</body>
</html>