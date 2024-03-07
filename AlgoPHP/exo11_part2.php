<h1> Exercice 11 </h1>

<p> Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d'une chaine de caractère représentant une date. </p>

<h2> Résultat </h2>

<?php

$fmt = datefmt_create(
    'fr_FR',
    IntlDateFormatter::FULL,
    IntlDateFormatter::NONE,
    'Europe/Paris',
    IntlDateFormatter::GREGORIAN
);
//* afficher la date actuelle
$date= new DateTime();

echo $fmt->format($date)."<br>";

//* afficher la date donnée
$theDate    = new DateTime('2018-02-23');
echo $fmt->format($theDate)."<br>";





