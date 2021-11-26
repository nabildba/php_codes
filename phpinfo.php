<?php
//fournis des informations à propos de l'interpreteur PHP 
//les extensions disponibles
//et l'environnement du serveur
//..
phpinfo();

//exemple de l'usage d'une extension - GD
/*
header ("Content-type: image/png");
$image = imageCreate (200, 100) or die ("Erreur lors de la création de l'image");
imagecolorallocate($image,100,90,0);
imagepng($image);
*/
?>