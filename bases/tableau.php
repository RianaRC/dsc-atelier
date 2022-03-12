<?php
/**
 * Quand est-ce qu'on a besoin d'utiliser un tableau?
 * Lorsqu'on a besoin de stocker plusieurs données pour un entité.
 * Par exemple les notes d'un élève.
 */

// Déclaration d'un tableau $nomDuTableau = [];
// PHP a évolué avec le temps, il y a l'ancienne notation $notes = array(10, 20);
// Ceci est considéré comme un tableau juste pour du listing
$notes = [12, 11, 14, 9];

// Pour afficher le contenu d'un tableau, il faut l'appeler avec son index
// On peut mettre tout type de variable dans un tableau
// echo $notes[2];

// On peut utiliser des tableaux plus complexe
// Imaginons on veut avoir le nom, le prénom et les noms de l'élève dans un tableau
$eleve = ['Rakoto', 'Paul', [12, 11, 14]];
// echo $eleve[2][1];

/**
 * C'est quoi le problème avec ce précédent tableau?
 * Si on va ajouter plus de données, la prochaine personne qui va travailler
 * ou même vous même va être perdu si on va ajouter plus de donner.
 * Donc on a la possibilité d'utiliser une clé au lieu d'un index défini.
 * Ce sera une annotation différente.
 */

$eleve = [
    'nom' => 'Rakoto',
    'prenom' => 'Paul',
    'notes' => [10, 25, 13]
];

// On peut même assigner une nouvelle valeur à une donnée dans le tableau:
$eleve['prenom'] = 'Lucas';

echo $eleve['nom'] . ' ' . $eleve['prenom'];