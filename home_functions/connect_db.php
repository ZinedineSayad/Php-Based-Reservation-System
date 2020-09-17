<?php
	
try
{
	$db = new PDO('mysql:host=localhost; dbname=saraMaster', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES utf8',PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
}
catch(Exception $e)
{
	die('une erreur est produite lors de la connexion à la base de donnée'.$e->getMessage());
}

?>