<?php 
/**
 * Pour écrire du code PHP, il faut bien évidemment créer un fichier PHP
 * C'est un fichier avec l'extension .php 
 * 
 * Ici, on va créer un fichier demo.php et on va dans un éditeur
 * 
 * Les types de variables PHP:
 *      - int
 *      - float
 *      - string: les chaines de caractères peuvent être entourées de guillemets simples '' ou de guillemets doubles
 *      - booleans
 *      - null
 *      - array
 * 
 * Avec ces variables bien sûr, on peut faire des opérations (mais seulement avec des chiffres)
 * 
 * Mais comment afficher des strings ensemble?
 *      On va utiliser ce qu'on appelle un "concatenation"
 *      Si on veut mettre un petit espace entre les deux, on peut concatener plusieurs chaînes de caractères.
 * 
 * 
 * Comment on va aller à la ligne lors de l'affichage de des strings ensemble?
 *      Avec PHP, on a un caractère spécial "/n" qu'on utilise pour aller à la ligne
 *      On va essayer de mettre le /n dans la concatenation
 * 
 *      Pourquoi ça a pas marché mais ça a affiché le /n dans les résultats en tant que string?
 *          les guillemets simples ne vont jamais interprétés les variables,
 *          seuls les guillemets doutes peuvent faire ça
 * 
 * Comment faire pour afficher un guillemet simple dans un guillemet simple?
 *      Il faut l'echapper avec un anti-slash echo "$var1 \" $var2";
 * 
 */

$nom = 'Rakoto';
$prenom = 'Paul';

$noteExamen1 = 12;
$noteExamen2 = 14;

$moyenne = ($noteExamen1+$noteExamen2)/2;

// echo $nom . $prenom;
// echo $nom . '\n' . $prenom;

echo "$nom\n$prenom";

echo $moyenne;
?>