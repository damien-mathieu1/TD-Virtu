<?php

try
{
    $db="mysql";
    $dbhost="database";
    $dbport=3306;
    $dbuser="root";
    $dbpasswd="changeme";
     
    $pdo = new PDO('mysql:host='.$dbhost.';port='.$dbport.';dbname='.$db.'', $dbuser, $dbpasswd);
    $pdo->exec("SET CHARACTER SET utf8");
    
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>
