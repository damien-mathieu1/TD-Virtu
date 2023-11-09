<?php
include("config.php");
    
try
{    //je prépare une requete
    $req = $pdo->prepare('SELECT * FROM users');
    //je l'execute
    $req->execute();
    //la variable tuples récupère toutes les lignes
    $tuples = $req->fetchAll();
}
catch (Exception $e)
{
        //S'il y a une erreur , on l'affiche
        die('Erreur : ' . $e->getMessage());
}

//j'itère sur les tuples résultats
foreach ($tuples as $t) {
    //j'affiche l'attribut login du tuple
    echo '<p>'.$t['login'];
    //je génère un lien vers la page de détail
    echo '    <a href="getUser.php?login='.$t['login'].'">Detail</a>   </p>' ;

}
?>

