<?php
//Les boucles 


// boucle sans compteur - while
while (true) { // boucle infinie: A NE PAS EXECUTER
    // faire quelque chose continuellement
}

// boucle avec compteur $counter
$counter = 0; 
while ($counter < 10) {
    echo $counter.'<br>';
    // if ($counter > 5) break;
    $counter++;
}

// do - while
$counter = 0; 
do {
    // Do some code right here
    $counter++;
} while ($counter < 10);

// for
for ($i = 0; $i < 10; $i++) {
    echo $i."<br>"; 
}
//if continue

// foreach
$fruits = ["Banane", "Pomme", "Orange"];
foreach ($fruits as $i => $fruit) {
    echo $i . ' ' . $fruit . '<br>';
}

// Boucle et tableaux associatifs.
$person = [
    'nom' => 'Chihed',
    'prenom' => 'Aicha',
    'age' => 30,
    'hobbies' => ['Tennis', 'Jeux video'],
];
foreach ($person as $key => $value) {
    if ($key === 'hobbies') {
        break;
    }
    echo $key . ' ' . $value . '<br>';
}
