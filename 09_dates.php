<?php

// afficher la date courante
echo date('Y-m-d H:i:s') . '<br>';

// affiche la date d'hier
echo date('Y-m-d H:i:s', time() - 60 * 60 * 24) . '<br>';

// Differents formats: https://www.php.net/manual/en/function.date.php
echo date('F j Y, H:i:s') . '<br>';

// Affiche le timestamp courrant
echo time() . '<br>';

// convertir chaine en date: https://www.php.net/manual/en/function.date-parse.php
$dateString = '2020-02-06 12:45:35';
$parsedDate = date_parse($dateString); 
echo '<pre>';
var_dump($parsedDate);
echo '</pre>';

// convertir chaine en date avec format: https://www.php.net/manual/en/function.date-parse-from-format.php
$dateString = 'February 4 2020 12:45:35';

$parsedDate = date_parse_from_format('F j Y H:i:s', $dateString);
echo '<pre>';
var_dump($parsedDate);
echo '</pre>';
