<h1> Exercice 13 </h1>
mettre 2 fichiers dans le dossier exo13
fichier 1 index.php
<p> Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et 
vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus 
des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule 
instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d'un 
véhicule.  </p>

<h2> Résultat </h2>

<?php


//* créer la classe Voiture
class Voiture{
    private string $_marque;
    private string $_modele;
    private int $_nbPortes;
    private int $_vitesseActuelle;
    private bool $_statut;

    public function __construct(string $marque, string $modele, int $nbPortes){
        $this->_marque=$marque;
        $this->_modele=$modele;
        $this->_nbPortes=$nbPortes;
        $this->_vitesseActuelle=0;
        $this->_statut= false;
    }

    public function get_marque()
    {
        return $this->_marque;
    }

    public function set_marque($_marque)
    {
        $this->_marque = $_marque;

        return $this;
    }


    public function get_modele()
    {
        return $this->_modele;
    }


    public function set_modele($_modele)
    {
        $this->_modele = $_modele;

        return $this;
    }


    public function get_nbPortes()
    {
        return "Nombre de portes : ".$this->_nbPortes."<br>";
    }


    public function set_NbPortes($_nbPortes)
    {
        $this->_nbPortes = $_nbPortes;

        return $this;
    }


    public function get_vitesseActuelle()
    {
        return "Sa vitesse actuelle est de : ".$this->_vitesseActuelle." km / h<br>";
    }


    public function set_vitesseActuelle(_$vitesseActuelle)
    {
        $this->_vitesseActuelle = $vitesseActuelle;

        return $this;
    }
    
//* créer les fonctions personnalisées
 
    public function demarrer(){
        $this->_statut= true;
        return "est démarré<br>";
        
    }
    public function __toString() {
        return $this->_marque." ".$this->_modele;
    }
    public function accelerer(int $vitesse){
        if (!$this->_statut) {
            echo "Pour accélérer, il faut démarrer le véhicule".$this." !<br>";
        }
        else{
            $this->_vitesseActuelle+=$vitesse;
        }
    }
    public function ralentir(int $vitesse){
        if (!$this->_statut){ //! pour voir si c'est différent
            echo "Pour ralentir, il faut démarrer le véhicule".$this." !<br>";
        }
        else{
            $this->_vitesseActuelle-=$vitesse;
        }
    }
    public function stopper(){
        $this->_statut= false;
        return "est à l'arrêt<br>";
        
    }

    public function get_nom(){
        return "Nom et modèle du véhicule : ".$this."<br>";
    }

    public function getInfos() {
        return $this->get_nom().$this->get_nbPortes()."Le véhicule ".$this->get_marque()." ".$this->demarrer().$this->get_vitesseActuelle();
    }
}

//* les infos des véhicules à afficher
$v1= new Voiture("Peugeot", "408", 5);
$v1->demarrer();
$v1->accelerer(50);

$v2= new Voiture("Citroén", "C4", 3);
$v2->demarrer();
$v2->accelerer(70);

//* Afficher les résultats
echo "Infos véhicule 1 <br> *************** <br>".$v1->getInfos();
echo "<br> <br>";
echo "Infos véhicule 2 <br> *************** <br>".$v2->getInfos();
