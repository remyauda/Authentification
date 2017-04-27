<?php
session_start ();//on ouvre la session
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Page 2</title>
</head>

<body>
<?php
//si la session existe et qu'elle est initialisée à true...
if (isset ( $_SESSION ['identification'] ) AND $_SESSION ['identification'] == "true") { 
	echo 'Voici la page protégé 2.';//on affiche la page
} 

else {//sinon (si la session n'existe pas ou qu'elle est fausse...
	echo 'Page privée. Veuillez vous identifier pour accéder au contenu de la page';//on n'affiche pas la page
}
?>
<p>
<a href="index.php">Retour à la page index.php (login)</a><br/>
<a href="access.php">Retour à la page access.php (menu)</a><br/>
<a href="deconnexion.php">Retour à la page deconnexion.php (deconnexion)</a><br/>

</p>

</body>


</html>
