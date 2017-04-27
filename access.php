<?php
session_start ();//on ouvre la session
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Page compte rendu d'identification</title>
</head>

<body>
<?php
//si la variable $_POST existe ie on vient de s'authentifier et que de plus c'est le bon mot de passe...
if (isset ( $_POST ['mot_de_passe'] ) and htmlspecialchars ( $_POST ['mot_de_passe'] ) == 'kangourou') { 
	$_SESSION ['identification'] = "true";//on créer une session que l'on initialise à true (car cette session est authentifiée)
	echo 'Vous avez été autentifié. Vous avez acces à l\'intégralité du site';
} 
//sinon si la variable $_POST existe ie on vient de s'authentifier mais que ce n'est pas le bon mot de passe...
elseif (isset ( $_POST ['mot_de_passe'] ) and $_POST ['mot_de_passe'] != 'kangourou') {
	$_SESSION ['identification'] = "false";//on créer une session que l'on initialise à false (car cette session n'est pas authentifiée)
	echo 'Vous n\'avez pas été autentifié. Vous n\'avez pas acces à l\'intégralité du site tant que vous ne serez pas authentifié';
} 
//sinon si on ne vient pas de s'authentifier (donc la variable $_POST n'existe pas) mais que la session existe et que $_SESSION=true... 
elseif (isset ( $_SESSION ['identification'] ) and $_SESSION ['identification'] == "true") {
	echo 'Vous avez été autentifié.';
} 
else {//sinon, on ne vient pas de s'authentifier et la variable de session est fausse (l'authentification avait échouée).
	$_SESSION ['identification'] = "false";
	echo 'Vous n\'avez pas été autentifié. Vous n\'avez pas acces à l\'intégralité du site tant que vous ne serez pas authentifié';
}

?>
	
	<br />
	<a href="page1.php">Page1.php</a>
	<br />
	<a href="page2.php">Page2.php</a>
	<br />
	<a href="page3.php">Page3.php</a>
	<br />

	<p>
		<a href="index.php">Retour à la page index.php (login)</a><br />
		<a href="access.php">Retour à la page access.php (menu)</a><br /> 
		<a href="deconnexion.php">Deconnexion</a><br />

	</p>

</body>

</html>