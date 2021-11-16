<?php

// Les variables

// types de variable
/*
    String
    Integer
    Float
    Boolean
    Null
    Array
    Object
    Resource
*/

// Declarer des variables
$name = "Zura";
$age = 28;
$isMale = true; // prend aussi la valeur false
$height = 1.85;
$salary = null;

// afficher les variables. concatenation (.)
echo $name . '<br>';
echo $age . '<br>';
echo $isMale . '<br>';
echo $height . '<br>';
echo $salary . '<br>';

// afficher les types des variables
echo gettype($name) . '<br>';
echo gettype($age) . '<br>';
echo gettype($isMale) . '<br>';
echo gettype($height) . '<br>';
echo gettype($salary) . '<br>';

// afficher les infos des variables
var_dump($name, $age, $isMale, $height, $salary);

// modifier la valeur de la variable
$name = false;

// afficher le nouveau type de la variable
echo gettype($name) . '<br>';

// fonctions pour vérifier les types des variables
is_string($name); // false
is_int($age); // true
is_bool($isMale); // true
is_double($height); // true

// Vérifier si la variable est définie
var_dump(isset($name));
var_dump(isset($name2));
echo '<br>';

// definir et utiliser des Constantes en PHP
define('PI', 3.14);
echo PI.'<br>';
var_dump(defined('PI')); // defined(PI2)
echo '<br>';

// PHP built-in constants
echo PHP_VERSION.'<br>';
echo PHP_INT_MAX.'<br>';
// PHP_EOL  ,  PHP_OS 

