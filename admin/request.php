<?php
if (isset($_GET['resultat']) && !empty($_GET['resultat'])) {

    require_once("./accesBDD.php");
    $bdd = connexionBDD();
    $resultat = $_GET['resultat'];
    $sql = "SELECT title FROM movies_full WHERE title LIKE :title LIMIT 0,10";
    $query = $bdd->prepare($sql);
    $query->bindValue(':title', "%".$resultat."%", PDO::PARAM_STR);
    //var_dump($query);
    $query->execute();
    $result = $query->fetchAll();

    /* foreach ($result as $key => $value) {
        var_dump($value['title']);
    }; */

    /* $tailleTab = count($result);
    $i=0;
    while($i < $tailleTab){
        var_dump($result[$i]); 
        $i++;
    } */

    echo json_encode($result);
}else{
    echo json_encode([]);
}