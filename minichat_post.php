<?php include('config.php');
	$req = $bdd->prepare('INSERT INTO minichat(pseudo, message, date_heure) VALUES(:pseudo, :message, NOW())');
	$req->execute(array(
		'pseudo' => $_POST['pseudo'],
		'message' => $_POST['message']
		));
	//rediriger vers la page minichat et affiche la nouvelle entree
	header('Location: minichat.php');
?>