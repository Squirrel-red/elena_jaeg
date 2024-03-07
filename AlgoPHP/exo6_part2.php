<h1> Exercice 6 </h1>

<p> Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau 
de valeurs. </p>

<h2> Résultat </h2>

<?php

$liste= ["Monsieur", "Madame", "Mademoiselle"];

//*echo remplirListeDeroulante($liste);

function remplirListeDeroulante($liste) {
    $resultat= "<form>
                    <label for='civilite'> </label>
                    <select name='civilite'>";
    foreach($liste as $civilite) {
        $resultat.= "<option value='$civilite'> $civilite </option>";
    }
    $resultat.= "</form";
    return $resultat;
}
echo remplirListeDeroulante($liste);