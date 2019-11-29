<?php

class Voiture //extends Vehicle (en cas d'heritage et de classe mère)
{
    public $nombreRoues;
    public $couleur;
    private $distance;
    private $essence;
    //toujours indiquer la visibilité (public/private/protected adaptée au système d'héritage)
    //attention dans le principe d'héritage, les attributs déscendent mais ne remontent pas das l'arborescence ! 
    
    //souvent les attributs sont en private et les méthodes en public

    //le constructeur est une constante propre au langage, donc le double _ est systématique. Cela permet de prévoir les variables qui seront entrées au moment de la création de l'objet
    public function __construct($nombreRoues,$couleur,$distance,$essence)
    {
        $this->nombreRoues=$nombreRoues;//on peut aussi faire un setter pour chacun mis il doit alors être défini séparément ex: setNombreRoues($nombreRoues);
        $this->couleur=$couleur;
        $this->distance=$distance;
        $this->essence=$essence;
    }

    //public function avance ()
    //{
    //    $this->distance+=100;// += équivaut à  $distance = $distance + 100
    //    echo'la voiture avance!';
    //}
    //ou
    public function avance ($dist)
    {
        $this->distance+=$dist;
        $this->essence-=15;
    }

    public function couleur()
    {
        return $this->couleur;//le $this fait toujours référence à l'object courant
    }

    public function essence($cible)//postulat de la voiture qui donne de l'essence
    {
        $this->essence-=15;
        $cible->essence+=15;
    }

    public function getDistance()
    {
        return $this->distance;//attention le return récupère la valeur mais ne l'affiche pas, on évite donc les echo dans la classe, on les mets ds l'index
    }
    //Rq il est globalement conseillé de clore ses fonctions par un return

    public function setDistance($dist)//le setter nous permet de modifier un attribut
    {
        $this->distance+=$dist;
    }
};
