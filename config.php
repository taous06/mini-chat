<?php
//se connecter à notre base de donnee
	try{
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
		$bdd = new PDO('mysql:localhost; dbname=minichat', 'root', '', $pdo_options);
	}
	catch(Exception $e) {
		die('Erreur :' $e->getMessage());
	}
?>