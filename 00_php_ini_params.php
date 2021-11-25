<?php

//parametres du fichier php.ini 

/**************** affichage des erreurs ************************/
//ini_set("display_errors",0);
//echo date();// va generer un warning



/***************************** temps d'execution *******************************/
echo ini_get("max_execution_time")."<br>";
//definir 2secondes comme temps maimum d'execution du script
//ini_set("max_execution_time",2); 
//sleep(5); //faire attendre le script 5secondes


/********************** memoire limite par script ***************/
echo ini_get("memory_limit")."<br>";
//ini_set("memory_limit",-1) pour enlever la limite 'PAS FAIRE'
/*
$chaine ="cc";
for($i=0; $i<1000;$i++)
	$chaine .= $chaine;
echo $chaine;
*/


echo "coucou";
?>