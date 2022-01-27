<?php

// Declares des nombres
$a = 5;
$b = 4;
$c = 1.2;

// Operations arithmetique
echo $a - $b . '<br>';
echo $a * $b . '<br>'; 
echo $a / $b . '<br>'; //intdiv($a,$b) php7+ ou floor($a/$b)
echo $a % $b . '<br>';
echo ($a + $b) * $c . '<br>';//priorité des opérateurs

// Affectations

//$a += $b; echo $a.'<br>'; // $a = 9
//$a -= $b; echo $a.'<br>'; // $a = 1
//$a *= $b; echo $a.'<br>'; // $a = 20
//$a /= $b; echo $a.'<br>'; // $a = 1.25
//$a %= $b; echo $a.'<br>'; // $a = 1

// Incrementation
echo $a++ . '<br>';//post
echo ++$a . '<br>';//pre

// Decrementation
echo $a-- . '<br>';
echo --$a . '<br>';

// functions de verif
is_float(1.25); // true
is_integer(3.4); // false
is_numeric("3.45"); // true
is_numeric("3g.45"); // false

// Conversion (cast)
$strNumber = '12.34';
$number = (float)$strNumber; // floatval(), (int), intval()
var_dump($number);
echo '<br>';

// fonctions numériques
echo "abs(-15) " . abs(-15) . '<br>';
echo "pow(2,  3) " . pow(2, 3) . '<br>';
echo "sqrt(16) " . sqrt(16) . '<br>';
echo "max(2, 3) " . max(2, 3) . '<br>';
echo "min(2, 3) " . min(2, 3) . '<br>';
echo "round(2.4) " . round(2.4) . '<br>';
echo "round(2.6) " . round(2.6) . '<br>';
echo "floor(2.6) " . floor(2.6) . '<br>';
echo "ceil(2.4) " . ceil(2.4) . '<br>';

// Formatting numbers
$number = 123456789.12345;
echo number_format($number, 2, '.', ',') . '<br>';

// https://www.php.net/manual/en/ref.math.php
