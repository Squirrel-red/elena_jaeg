<?php
//* Autochargement d'une classe
spl_autoload_register(function ($class_name) {
    require $class_name . '.php';
});

//* Variables et ses valeurs
$LS= new Titulaire("MULLER", "Anne", "1993-10-15", "Paris");
$livA= new Compte("Livret A", 200, "€", $LS);
$compteCourant= new Compte("Compte courant", 1300, "€", $LS);

//* Affichage
echo $LS->afficherCompte();
echo $livA->virement($compteCourant, 10);
echo $livA;
echo $compteCourant;