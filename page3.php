<?php
session_start ();//on ouvre la session
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Page 3</title>
</head>

<body>
<?php
if (isset ( $_SESSION ['identification'] ) AND $_SESSION ['identification'] == "true") {
	echo 'Voici la page protégé 3.';
} 

else {
	echo 'Page privée accéssible seulement après autentification. Veuillez vous identifier pour accéder au contenu de la page';
}
?>
<p>
<a href="index.php">Retour à la page index.php (login)</a><br/>
<a href="access.php">Retour à la page access.php (menu)</a><br/>
<a href="deconnexion.php">Deconnexion</a><br/>

</p>

</body>


</html>
