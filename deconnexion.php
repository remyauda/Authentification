<?php
// On démarre la session
session_start ();

// On détruit les variables de notre session
session_unset ();

// On détruit notre session
session_destroy ();

//on informe le visiteur qu'il a bien été déconnecté
echo 'Vous avez été déconnecté';

?>

<br />
<a href="page1.php">Page1.php</a>
<br />
<a href="page2.php">Page2.php</a>
<br />
<a href="page3.php">Page3.php</a>
<br />