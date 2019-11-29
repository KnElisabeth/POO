<?php

abstract class Character
{
    protected $lifePoint=100;
    protected $damage;
    protected $name;

    public function __construct($name)
    {
       $this->name=$name;
    }

    public function isAlive()//si j'ai assez de points de vie, je peux attaquer
    {
        if($this->lifePoint>0)
        {
            return True;
        }else{
            return False;
        };
    }

    public function getLifePoint()//ns permet d'obtenir la valeur d'un attribut private ou protected
    {
        return $this->lifePoint;
    }

    public function getName()
    {
        return $this->name;
    }
}