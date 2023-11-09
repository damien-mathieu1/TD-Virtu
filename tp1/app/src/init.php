<?php
include("config.php");

try
{
    $pdo->exec("CREATE TABLE `users` (`login` varchar(32) CHARACTER SET utf8 NOT NULL,  `nom` varchar(32) CHARACTER SET utf8 DEFAULT NULL, `prenom` varchar(32) CHARACTER SET utf8 DEFAULT NULL)");
    echo "table created";
    $pdo->exec("INSERT INTO `users` (`login`, `nom`, `prenom`) VALUES ('bl', 'Leponge', 'Bob'),('jdo', 'Doe', 'John'),('aa', 'Alice', 'Alice');");
    echo "tuples inserted";

}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>

