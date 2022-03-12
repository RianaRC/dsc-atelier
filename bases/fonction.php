<?php
/**
 * A quoi sert les fonctions?
 * Ils nous sert à faire de la logique (opération, condition,...)
 * en leur donnant des valeurs d'entrée (input) et on a des résultats (output)
 * 
 * Comment déclarer une fonction?
 * function nomDeLaFonction();
 * 
 * Dans la parenthèse seront les paramètres de la fonction
 * 
 * Pour l'utiliser, il faut l'appeler
 * 
 * On peut faire retourner un résultat à une fonction mais pas l'afficher.
 * Pour se faire utiliser le mot clé 'return"
 */

function bonjour($nom) {
    return "Bonjour $nom";
};

Bonjour('Jean');