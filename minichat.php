<!DOCTYPE html>
<html>
<head>
	<title>Minichat</title>
	<meta charset="utf-8">
</head>
<body>
<div class="form">
	<form method="POST" action="minichat_post.php">
	<h4>Votre pseudo : <input type="text" name="pseudo"></h4>
	<h4>Votre message : <input type="text" name="message"></h4>
	<input type="submit" name="submit" value="envoyer">
		
</form>
</div>	
<hr>
<div class="message">
	<?php
	
		require_once "includes/config.php";
		$afficher = $bdd->query('SELECT * FROM minichat ORDER BY id DESC LIMIT 0; 10');
		while ($donnees = $afficher->fetch()) {
	?>
	<p> 
		<?php echo $donnees['date_heure']; ?> 
			<strong>
				<?php echo $donnees['pseudo']; ?> :
			</strong>  <?php echo $donnees['message']; ?>
	</p>
	<?php
		}
		$afficher->closeCursor();
	
	?>
	
</div>
</body>
</html>