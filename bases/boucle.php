<?php
/**
 * En PHP, il existe 3 types de boucles: tant que, pour et une spécifique à PHP, pour chaque
 */

/**
 * La première boucle while (tant que)
 */
$chiffre = null;

while ($chiffre !== 10) {
    $chiffre = (int)readline('Entrer une chiffre = ');
}
echo 'Vous avez gagné';

/**
 * Autre type de boucle c'est le for
 * SI j'ai envie d'afficher les 10 premiers chiffre
 * Utiliser un variable $i et lui donner une valeur initiale.
 * Puis la condition qui va permettre de sortir de la boucle (tant que la condition n'est pas remplie, je vais rester dans la boucle)
 * Et enfin, la chose à faire si la boucle n'est pas close. ($i += 1 / $i++)
 */

for ($i=0; $i < 10; $i++) { 
    echo "- $i \n";
}

/**
 * La dernière boucle, c'est la boucle "pour chaque" (foreach), 
 * Supposons qu'on a un tableau qui contient les notes d'un élève et que je veux consulter ces données là
 * 
 */

//On va utiliser la boucle for pour la première solution
$notes = [10, 15, 14];

// Le problème ici c'est que ce n'est pas trop lisible et on doit connaître à l'avance la taille du tableau
for ($i=0; $i < 3; $i++) { 
    echo "- " . $notes[$i] . "\n";
}

// Une autre solution, c'est la boucle foreach
$eleves = [
    'cm1' => 'Marc',
    'cm2' => 'Jean'
];

foreach ($eleves as $classe => $eleve) {
    echo "$eleve est dans la classe $classe. \n";
}

// 3 ème exemple:

$eleves = [
    'cm1' => ['Jean', 'Toky', 'Mirana'],
    'cm2' => ['Rabe', 'Rakoto', 'Randria']
];

foreach ($eleves as $classe => $listeEleve) {
    echo "La classe $classe: ";
    foreach ($listeEleve as $eleve) {
        echo "- $eleve \n";
    }
}



