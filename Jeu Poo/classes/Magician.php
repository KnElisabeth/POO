<?php

class Magician extends Character
{
    private $magicPoint=100;
    public $shield=false;

    public function __construct ($name)
    {
        parent:: __construct($name);//reprends les éléments du __construct du parent, s'utilise principalement pour le __construct, pour les autres functions, on préférera la réécriture
        $this->damage=15;      
    }

    /*
    public function fireball($target)
    {
        $cost=rand(5,20);//attaques aux coûts aléatoires
        if ($this->magicPoint>=$cost) {//si j'ai assez de points de magie, je peux attaquer
            //$this->damage=$cost*2;
            //$target->lifePoint-=$this->damage; équivaut à
            $target->lifePoint-=$cost*2;

            if($target->lifePoint<=0)//si j'ai moins de 0 vies, je m'arrête à 0
            {
                $target->lifePoint=0;
                return "$this->name ($this->magicPoint PM) attaque $target->name et $target->name est KO !";
            }; 
        }else{
            return "$this->name n'a pas assez de points de magie";
        }        
        return "$this->name ($this->magicPoint PM) attaque $target->name et il lui reste $this->lifePoint points de vie";
    }
    
    public function spell($target)
    {
        $rand = rand(1, 10);

        if ($rand < 8 ) {
            $cost=rand(5,20);
            if ($this->magicPoint>=$cost) {

                $target->setlifePoint($cost*2);

                if($target->lifePoint<=0){
                    $target->lifePoint=0;
                    return "$this->name ($this->magicPoint PM) attaque $target->name et $target->name est KO !";
                }; 
            }else{
                return "$this->name n'a pas assez de points de magie";
            }        
            return "$this->name ($this->magicPoint PM) attaque $target->name et il lui reste $this->lifePoint points de vie"; 
            
        } else {
            $this->shield=true;
            return "$this->name ($this->magicPoint PM) déploie son bouclier magique";
        }       
    }

    Je morcelle les fonctions, cela me permet de:
    -avoir un code encore plus propre
    -passer les fonctions constitutives en private et c'est donc plus sécurisé
    -faciliter l'ajout de nouvelles fonctions par la suite en gardant de la lisibilité

    */

    public function spell($target)
    {
        $rand = rand(1, 10);

        if ($rand < 8 ) {
            $status= $this->fireball($target);
        } else {
            $status= $this->shield($target);
        }   
        return $status;    
    }

    private function fireball($target)
    {
        $cost=rand(5,20);
            if ($this->magicPoint>=$cost) {
                $target->setlifePoint($cost*2);
                $status="$this->name ($this->magicPoint PM) attaque $target->name et il lui reste $this->lifePoint points de vie"; 
            }else{
                $status= "$this->name n'a pas assez de points de magie";
            }        
            return $status; //utile en cas de nombreuses possibilités, on garde une seul return par convention
    }

    private function shield()
    {
        $this->shield=true;
            return "$this->name ($this->magicPoint PM) déploie son bouclier magique";
    }

    public function setLifePoint($pain)
    {
        if($this->shield==true){
            $this->shield=false;//il ne revérifie pas alors la condition, il sort de la boucle jusqu'à la prochaine attaque
        }else{
           $this->lifePoint-=$pain;//quand je lance cette méthode avec l'arugment de nombre, je diminue d'autant mes points de vie 
        };
        if($this->lifePoint<=0){
            $this->lifePoint=0;
            return;
        }
    }
}