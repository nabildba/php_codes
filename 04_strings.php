<?php

// Créer des strings
$string = "Salut, je suis Aicha"; 
$string2 = 'Salut, je suis Aicha'; 
echo $string . '<br>';
echo $string2 . '<br>';

// Concaténation
echo "Salut " . " le monde"; // Concaténation multiple . " et PHP";

// fonctions de chaines de caractéres
$string = "    Salut le monde      ";

echo "1 - " . strlen($string) . '<br>' . PHP_EOL;
echo "2 - " . trim($string) . '<br>' . PHP_EOL;
echo "3 - " . ltrim($string) . '<br>' . PHP_EOL;
echo "4 - " . rtrim($string) . '<br>' . PHP_EOL;
echo "5 - " . str_word_count($string) . '<br>' . PHP_EOL;
echo "6 - " . strrev($string) . '<br>' . PHP_EOL;
echo "7 - " . strtoupper($string) . '<br>' . PHP_EOL;
echo "8 - " . strtolower($string) . '<br>' . PHP_EOL;
echo "9 - " . ucfirst('Salut') . '<br>' . PHP_EOL;
echo "10 - " . lcfirst('Salut') . '<br>' . PHP_EOL;
echo "11 - " . ucwords('Salut le monde') . '<br>' . PHP_EOL;
echo "12 - " . strpos($string, 'le monde') . '<br>' . PHP_EOL; // Change into le monde
echo "13 - " . stripos($string, 'le monde') . '<br>' . PHP_EOL;
echo "14 - " . substr($string, 8) . '<br>' . PHP_EOL;
echo "15 - " . str_replace('le monde', 'PHP', $string) . '<br>' . PHP_EOL;
echo "16 - " . str_ireplace('le monde', 'PHP', $string) . '<br>' . PHP_EOL;

$num = 100;
$num2 = 123456;
echo str_pad($num, 8, '0', STR_PAD_LEFT) . '<br>' . PHP_EOL;
echo str_pad($num2, 8, '0', STR_PAD_LEFT) . '<br>' . PHP_EOL;
echo str_repeat('Salut', 2) . '<br>' . PHP_EOL;


// texte multilignes et saut de lignes
$longText = "
  Salam, mon nom est Aicha
  age 23,
  et je code en PHP
";
echo $longText . '<br>' . PHP_EOL;
// new line --> <br>
echo nl2br($longText) . '<br>' . PHP_EOL; 

// texte sur plusieurs lignes avec balises html
$longText = "
  Salam, mon nom est <b>Aicha</b>
  age <b>23</b>,
  et je code en PHP
";
echo "1 - " . $longText . '<br>';
echo "2 - " . nl2br($longText) . '<br>';
echo "3 - " . htmlentities($longText) . '<br>' . PHP_EOL;
echo "4 - " . nl2br(htmlentities($longText)) . '<br>' . PHP_EOL;
echo "5 - " . html_entity_decode(htmlentities($longText)) . '<br>' . PHP_EOL;
echo "6 - " . htmlspecialchars($longText) . '<br>' . PHP_EOL;


// https://www.php.net/manual/en/ref.strings.php
