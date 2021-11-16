<?php

$age = 20;
$salaire = 300000;

// Simple if
if ($age == 20) {
    echo "1";
}

// Sans les accolades (une seule instruction)
if ($age === 20)
    echo "1";

// Simple if-else
if ($age > 20) {
    echo "1";
} else {
    echo "2";
}

// Difference entre == et ===
$age == 20; // true
$age == '20'; // true

$age === 20; // true
$age === '20'; // false

// if AND && (et logique)
if ($age > 20 && $salaire === 300000) {

}
// if OR || (ou logique)
if ($age > 20 OR $salaire === 300000) {

}

// if tertiaire
echo $age < 22 ? 'Young' : 'Old';
echo '<br>';

// Short ternary
$myAge = $age ?: 18; // Equivalent de "$age ? $age : 18"

// Null coalescent
$var = isset($name) ? $name : 'John';
$var = $name ?? 'John'; // Equivalent au précédent
echo $var.'<br>';

// selection des cas (switch)
$userRole = 'admin'; // admin, editor, user

switch ($userRole) {
    case 'admin':
        echo 'tu peux faire tout ce que tu veux<br>';
        break;
    case 'editor';
        echo 'tu peux editer le contenue <br>';
        break;
    case 'user':
        echo 'tu peux voir les postes et commenter<br>';
        break;
    default:
        echo 'Role inconnue<br>';
}
