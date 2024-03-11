<?php
//* Autochargement d'une classe
spl_autoload_register(function ($class_name) {
    require $class_name . '.php';
});

//* Variables et ses valeurs
$LS= new Titulaire("MULLER", "Anne", "1993-10-15", "Paris");
$livA= new Compte("Livret A", 2000, "€", $LS);
$compteCourant= new Compte("Compte courant", 1300, "€", $LS);

//* Affichage

echo $LS->afficherCompte();
echo "Soldes avant l'opération:"."<br>";
echo "--------------------------"."<br>";
echo $livA;
echo $compteCourant;
echo "----------------------------------------------------------------------------"."<br>";
echo "Résultats de l'opération:"."<br>";
echo "--------------------------"."<br>";

//*echo $livA->virement($compteCourant, 20);
//echo $livA->debiter(50)."<br>";
//*echo $livA->crediter(150)."<br>";
echo $compteCourant->virement($livA, 30);
//*echo $compteCourant->debiter(100)."<br>";
//*echo $compteCourant->crediter(100)."<br>";
echo "----------------------------------------------------------------------------"."<br>";
echo "Le reste sur les comptes: "."<br>";
echo "--------------------------"."<br>";
echo $livA;
echo $compteCourant;