<h1> Exercice 7 </h1>

<p> Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser 
dans le tableau associatif si la case est cochée ou non. </p>

<h2> Résultat </h2>

<!-- <form>

    <input type="checkbox" id="Choix1" name="choix" />
    <label for="Choix1">Choix 1</label>
    <br>

    <input type="checkbox" id="Choix2" name="choix" />
    <label for="Choix2">Choix 2</label>
    <br>

    <input type="checkbox" id="Choix3" name="choix" checked />
    <label for="Choix3">Choix 3</label>

</form> -->

<?php

$elements= ["Choix 1" => " ", "Choix 2" => "checked", "Choix 3" => "checked"];

//*echo genererDesCasesACocher($elements);

function genererDesCasesACocher($elements){
    $result= "<form>";
    foreach($elements as $choixN => $checked){
        $result.= "<input type='checkbox' id='$choixN' name='$choixN' $checked>
        <label for='$choixN'> $choixN </label> <br>";
    }
    $result.= "</form>";
    return $result;
}
echo genererDesCasesACocher($elements);
