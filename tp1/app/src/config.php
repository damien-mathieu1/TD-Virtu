<?php

try
{
    $db=$_ENV["MYSQL_DATABASE"];
    $dbhost=$_ENV["MYSQL_HOST"];
    $dbport=$_ENV["MYSQL_PORT"];
    $dbuser=$_ENV["MYSQL_USER"];
    $dbpasswd=$_ENV["MYSQL_PASSWORD"];
     
    $pdo = new PDO('mysql:host='.$dbhost.';port='.$dbport.';dbname='.$db.'', $dbuser, $dbpasswd);
    $pdo->exec("SET CHARACTER SET utf8");
    
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>
