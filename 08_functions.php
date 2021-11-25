<?php

// Fonction qui affiche "Hello je suis Aicha"
function hello()
{
    echo 'Hello je suis Aicha<br>';
}

hello();
hello();
hello();

// Fonction avec paramétre (argument)
//function hello($nom)
//{
//    echo "Hello je suis $name";
//}

// fonction qui calcule la somme de deux valeurs
function somme($a, $b)
{
    return $a + $b;
}

echo somme(4,5);
echo somme(9,10);

// la somme de plusieurs valeurs avec ...$args
//function somme(...$nums)
//{
//    $somme = 0;
//    foreach ($nums as $n) $somme += $n;
//    return $somme;
//}
//echo somme(1, 2, 3, 4, 6);
//
// Arrow functions
//function somme(...$nums)
//{
//    return array_reduce($nums, fn($carry, $n) => carry + $n);
//}
//echo somme(1, 2, 3, 4, 6);


