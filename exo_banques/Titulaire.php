<?php
// On créé la classe Titulaire avec les attributs privés
class Titulaire{
    private string $nom;
    private string $prenom;
    private DateTime $dateNaissance;
    private string $ville;
    private array $comptes;

    //*  On applique la méthode _construct
    public function __construct(string $nom, string $prenom, string $dateNaissance, string $ville){
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->dateNaissance= new DateTime($dateNaissance);
        $this->ville=$ville;
        $this->comptes=[];
    }

//* on créé un accesseur GET et un mutateur SET

    public function getNom() : string
    {
        return $this->nom;
    }


    public function setNom($nom) 
    {
        $this->nom = $nom;

        return $this;
    }


    public function getPrenom() : string
    {
        return $this->prenom;
    }


    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }


    public function getDateNaissance() : dateTime
    {
        return $this->dateNaissance;
    }


    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }


    public function getVille() : string
    {
        return $this->ville;
    }


    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }
//* Comptes = l'ensemble des comptes
    public function getComptes() : array
    {
        return $this->comptes;
    }


    public function setComptes($comptes)
    {
        $this->comptes = $comptes;

        return $this;
    }

    //* On créé les fonctions demandées

    public function __toString(){
        return $this->nom." ".$this->prenom." (".$this->ville.", ".$this->donnerAge().")"."<br>";
    }

    public function ajouterCompte(Compte $compte){
        return $this->comptes[]=$compte;

    }

    public function donnerAge(){
        $dateJour= new DateTime();
        $difference= $this->dateNaissance->diff($dateJour);
        return  $difference->format('%Y ans');
    }
    public function afficherCompte(){
        $result= "<h1> Comptes de Mme ".$this."</h1>";
    //*    foreach($this->comptes as $compte);
    //*   $result.= $compte;
         
        return $result;

    }
        
    

}