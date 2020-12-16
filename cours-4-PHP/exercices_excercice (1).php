git<?php

/*
 * Ce fichier PHP va contenir un ensemble d'exercice qui pourront être 
 * lancés en ligne de commande.
 * L'idée est de permettre de travailler sur la syntaxe du langage PHP
 * sans s'occuper de la partie affichage de la page
 * 
 * Pour cela il faudra pouvoir lancer la commande 'php exercice.php' depuis
 * un terminal, "cmd" pour Windows, "terminal" depuis mac.
 * Ou encore plus simple en utilisant directement le terminal depuis 
 * visual studio code.
 * 
 * PHP est un langage de script qui exécute des instructions l'une après
 * l'autre; Chaque instruction se terminant par un ";"
 * Nous pouvons voir une instruction comme un ordre simple demandé au serveur.
 * 
 * Une des erreurs les plus courantes est d'oublié ce ";" à la fin d'une
 * instruction.
 */

/*
 * La commande echo permet l'affichage de texte en sortie du traitement PHP
 * Son équivalent print est complétement équivalent.
 * Il n'est pas rare en PHP d'avoir plusieurs fonctions qui permettent de faire
 * la même chose
 * 
 * Chaque echo affiche à la suite du précédent.
 * Pour ajouter des sauts de ligne vous devez utiliser le caractère spécial
 * "saut de ligne" qui s'écrit "\n" (new line)
 * 
 * Pour "échapper" un caractère spécial vous pouvez utiliser le caractère d'échappement
 * "\", par exemple "\\n" affichera "\n" et aussi "\\" affichera "\"
 */

echo "Exemple d'utilisation de echo :\n";   // Ici le saut de ligne permettra de faire le prochain affichage à la ligne suivante
echo "le symbôle \\n est échappé pour être visible dans l'affichage\n";
print "Que ce soit avec la fonction echo ou print vous aurez le même retour\n";

echo "\n"; // Juste un saut de ligne pour aérer l'affichage

/*
 * Dans le cours nous avons les différents types de données et ici nous allons
 * jouer avec.
 * 
 * Les chaînes de caractères : string sont un des types de base
 * 
 * Un des premier exercice de tout langage de programmation est le fameux
 * "Hello world"
 * Je vous propose donc d'écrire juste en dessous votre "Hello world" ou
 * "Salut + votre prénom" avec l'opérateur de concaténation  des chaines "."
 * 
 * Une fois cela fait vous pouvez tester en exécutant la commande php
 * "php exercice.php"
 */

//echo .... à vous de jouer

/* 
 * Et si nous faisions un peu de mathématique
 * Vous connaissez les 4 opérateurs de base : +, -, *, et /
 * Pour stocker nos opérations nous allons utiliser des variables.
 * Une variable est ce qui permet de stocker une valeur ou une référence.
 * 
 * Par exemple $a est la variable $a, nous pouvons lui affecter une valeur
 * avec l'opérateur "=" : "$a = 4;" insère 4 dans la variable $a
 * 
 * Toutes les variables commencent par "$" en PHP
 * Mais en vous basant sur le cours, Quelles sont les variables avec un nom
 * valide ?
 * $a, $_a, $a_a, $AAA, $a!, $1a et $a1
 * 
 * Écrivez vos réponses ici : 
 * 
 * Maintenant faisons un calcul de moyenne
 */
echo "\nExercice 2 : calcul de moyenne :\n";

$note_maths = 15;
$note_francais = 12;
$note_histoire_geo = 9;
$moyenne =($note_maths+$note_francais+$note_histoire_geo)/3; // Je ne pense pas que vous vouliez 0 en moyenne, remplacez par le bon calcul
echo "La moyenne est de " . $moyenne . " / 20.\n";

echo "\n";

/* 
 * Et un calcul classique dans la vente HT => TTC
 */
echo "Exercice 3 : calcul du TTC :\n";

$prix_ht = 50;
$tva = 20;
$prix_ttc =$prix_ht*(1+$tva)/100; // Non le total n'est pas gratuit, remplacez par le bon calcul
echo "Le prix TTC du produit est de " . $prix_ttc . "€.\n";

echo "\n";

/* 
 * Il existe un autre opérateur mathématique l'opérateur modulo : "%"
 * qui représente le reste de la division.
 * Par exemple 150 modulo 100 représente 1 fois 100 plus 50 => il reste donc 50
 * Cet opérateur est très pratique dans le cadre de boucle pour effectuer
 * une opération tous les x tours.
 */
echo "Exercice 4 : Quel est le reste de 65537 divisé par 13 ?";

$reste =(65537%13); // remplacez par le bon calcul
echo "Le reste est de : $reste\n";

echo "\n";

/* 
 * Pour le debuggage des scripts PHP la fonction "var_dump" permet d'afficher le
 * contenu d'une variable ainsi que son type.
 * Par défaut PHP sait transformer des données d'un type à un autre
 * Par exemple en permettant de comparer une chaîne de caractère à un nombre
 * 42 et "42"
 */
echo "Exercice 5 : Modifiez l'affectation de \$a pour en faire une chaîne de caractère\n";
$a = "42"; // Transformez ce nombre en chaîne de caratère
echo "\$a est de type :\n";
var_dump($a);

/* 
 * Maintenant que nous avons manipulé les variables dans des instructions simples
 * nous pouvons commencer à utliser des structures de base pour les algorithmes
 * les conditions : "if"
 * Pour rappel la syntaxe de base est : 
 * "if (condition) {
 *   instruction alors 
 *  } elseif (autre condition) { 
 *   instruction sinon si 
 *  } else { 
 *   instruction sinon 
 *  }"
 * 
 * Les opérateurs de comparaison sont =, >, <, >=, <= et !=
 * Faire 2 < 3 renvoie vrai alors que 2 > 3 répondra faux
 * 
 * if (2 > 3) {
 *    // ne rentrera pas dans la condition
 *    // ce code ne sera pas exécuté
 * }
 * 
 * Pour cet exercice vous devez créer une variable $sexe qui contient une 
 * chaîne de caractère puis créez une condition qui affiche un message différent
 * en fonction de la valeur de la variable.
 */
echo "Exercice 6 : mon premier if\n";




echo "$sexe";
/* 
 * Maintenant un autre exercice
 * Déclarer une variable $budget qui contient la somme de 1 553,89€. 
 * Déclarer une variable $achats qui contient la somme de 1 554,76€.
 * Afficher si le budget permet de payer les achats.
 */
echo "Exercice 7 : Ai je assez de budget ?\n";

// Écrivez votre code ici


echo "\n";
/* 
 * Encore un autre
 * Déclarer une variable $age qui contient la valeur de type integer de votre 
 * choix.
 * Réaliser une condition pour afficher si la personne est mineure ou majeure.
 */
echo "Exercice 8 : Êtes vous majeur ?\n";

// Écrivez votre code ici


echo "\n";
/* 
 * Un dernier pour les conditions
 * Déclarer une variable $heure qui contient la valeur de type integer de 
 * votre choix comprise entre 0 et 24. 
 * Créer une condition qui affiche un message si l'heure est le matin, 
 * l'après-midi ou la nuit.
 * Je vous laisse juge de définir les paliers
 */
echo "Exercice 9 : Quelle est la période de la journée ?\n";

// Écrivez votre code ici
function mafonction



echo "\n";
/* 
 * Pour des conditions plus complexes nous pouvons utiliser les opérations
 * booléennes (calcul à base de vrai et faux) ET : "&&" et OU : "||"
 * 
 */






<?php
$voitures = ['Toyota', 'Lamborighini', 'Ferrari'];

function estPresent($marque, $list_voitures)
{
    for ($i = 0; $i < count($list_voitures); $i++) {
        if ($list_voitures[$i] == $marque) {
            return true;
        }
    }
    return false;
}

echo estPresent('Toyota', $voitures) . "\n";