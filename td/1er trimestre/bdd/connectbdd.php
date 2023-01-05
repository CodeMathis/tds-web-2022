<?php
function Connect(string $dbname){
    try{
        $db = new PDO("mysql:host=127.0.0.1;dbname=$dbname", "root", "");
    }catch (PDOException $e){
        echo $e->getMessage();
        die();
    }
    return $db;
}

function QueryAndFetchAll(PDO $db, string $sql):array{
    $statement = $db->query($sql); #Requête SQL ici
    return $statement->fetchAll(PDO::FETCH_ASSOC); #statement, fetchall recupère tous les enregistrements
}

function ArrayAsHtmlTable(array $array){
    $fields = array_keys(current($array));
    echo "<table border='1'><thead><tr>";

    foreach ($fields as $field){
        echo "<th>$field</th>";
    }

    echo "</tr><tbody>";
    foreach ($array as $row){
        echo "<tr>";
        foreach ($row as $value){
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }

    echo "</tbody></thead></table>";
}

//check bon fonctionnement de "Connect()"
if(get_included_files()[0] == __FILE__){
    try{
        $result = connect("classicmodels") -> query("show tables")->fetchAll(); #statement, fetchall recupère tous les enregistrements
        echo '<pre>'.print_r($result, true).'</pre>';
    }catch (Exception $e){
        echo "<p>La BDD 'classicmodels' n'éxiste pas ou la fonction 'connect' a un problème.";
    }
}
?>