<?php

class Warrior extends Character
{

    public function __construct ($name)
    {
        parent:: __construct($name);//reprends les éléments du __construct du parent, s'utilise principalement pour le __construct, pour les autres functions, on préférera la réécriture
        $this->damage=15;      
    }

    public function attack($target)
    {
        $target->setlifePoint($this->damage);
        return "$this->name attaque $target->name et il lui reste $this->lifePoint points de vie";
    }

    public function setLifePoint($pain)
    {
        $this->lifePoint-=$pain;//quand je lance cette méthode avec l'arugment de nombre, je diminue d'autant mes points de vie
        if($this->lifePoint<=0){
        $this->lifePoint=0;
        return;//bonne pratique de finir les méthodes par un return
        }//évite les retours de points de vie négatifs
    }
    
}