<?php

// Créer un tableau  (array)
$fruits = ["Banane", "Pomme", "Orange"];

// afficher le tableau
echo '<pre>';
var_dump($fruits); // print_r
echo '</pre>';

// élément de tableau par son indice (index ou clé)
echo $fruits[1].'<br>';

// modifier un élément du tableau
$fruits[0] = "Ananas";

// Vérifier si un élément existe à index 2
echo '<pre>';
var_dump(isset($fruits[2]));
echo '</pre>';

// taille du tableau
echo count($fruits).'<br>';

// Ajouter un élément à la fin d'un tableau
$fruits[] = 'Mangue';
echo $fruits[3].'<br>';
array_push($fruits, 'Fraise');
// Supprimer un élément à la fin d'un tableau
array_pop($fruits);

echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Ajouter un élément au début d'un tableau
array_unshift($fruits, 'Cerise');
// Supprimer un élément du début d'un tableau
array_shift($fruits);

// Split d'une chaine de caractéres en tableau
$string = "Banane,Pomme,Ananas";
echo '<pre>';
var_dump(explode(",", $string));
echo '</pre>';

print_r($fruits);

// Combiner les éléments d'un tableau en une string
echo implode(",", $fruits).'<br>';

// Véirifer si un élément existe dans un tableau
echo '<pre>';
var_dump(in_array('Apple', $fruits));
echo '</pre>';

// chercher l'index d'un élément dans un tableau
echo '<pre>';
var_dump(array_search("Pomme", $fruits));
echo '</pre>';

// fusion de deux tableaux
$legumes = ['Carotte', 'Concombre'];
echo '<pre>';
var_dump(array_merge($fruits, $legumes));
var_dump([...$fruits, ...$legumes]); // PHP 7.4
echo '</pre>';

// trier les éléments du tableau (Reverse order also)
sort($fruits); //sort (asort), rsort
echo '<pre>';
var_dump($fruits);
echo '</pre>';


// https://www.php.net/manual/en/ref.array.php

// ============================================
// Les tableaux associatifs
// ============================================

// Créer un tableau associatif
$personne = [
    'nom' => 'Chihed',
    'prenom' => 'Aicha',
    'age' => 30,
    'hobbies' => ['Tennis', 'Jeux Video'],
];
// acceder à un élément par la clé ( key )
echo $personne['nom'].'<br>';

// remplir à un élément par la clé 
$personne['ville'] = 'Rabat';

//Null coalescing assignment operator. PHP 7.4
if (!isset($personne['addresse'])){
    $personne['address'] = 'Inconnue';
}
$personne['address'] ??= 'inconnue';
echo $personne['addresse'].'<br>';

// Vérifier si le tableau contient une clé
echo '<pre>';
var_dump(isset($personne['age']));  // Changer par "email"
echo '</pre>';

// Afficher les clés du tableau
echo '<pre>';
var_dump(array_keys($personne));
echo '</pre>';

// Afficher les valeurs du tableau
echo '<pre>';
var_dump(array_values($personne));
echo '</pre>';

// trier le tableau associatif par valeurs, par clés
ksort($personne); // ksort, krsort, asort, arsort
echo '<pre>';
var_dump($personne);
echo '</pre>';


//tableaux associatifs et parametres d' URL
echo '<pre>';
var_dump($_GET);
echo '</pre>';
