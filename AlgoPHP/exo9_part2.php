<h1> Exercice 9 </h1>

<p> Créer une fonction personnalisée permettant d'afficher des boutons radio avec un tableau de 
valeurs en paramétre ("Monsieur","Madame","Mademoiselle") </p>

<h2> Résultat </h2>


<?php

$boutonsRadio=["Masculin", "Féminin", "Autre"];

//*echo afficherRadio($boutonsRadio);

function afficherRadio($boutonsRadio){
    $result="<form>";
    foreach($boutonsRadio as $sexe){
        $result.= "<input type='radio' id='$sexe' name='sexe' />
        <label for='$sexe'> $sexe </label> <br>";
    }
    $result.="</form>";
    return $result;

}
echo afficherRadio($boutonsRadio);