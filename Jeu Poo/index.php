<?php

spl_autoload_register(function($classe){
    require 'classes/' .$classe. '.php';
});//pour autocharger les classes en POO



$hashPw= Hash::hashage ('monMotDePasse');
echo"$hashPw a bien été mis en base de données";



die;



//$character1= new Character("Gandalf"); équivaut à (maintenant que l'héritage est généré), on ne peut d'ailleurs plus instancier le Character maintenant qu'il est abstrait
$character1= new Magician("Gandalf");
//$character2=new Character("flammeDoudoune"); équivaut à (maintenant que l'héritage est généré)
$character2=new Warrior("flammeDoudoune");
var_dump($character1, $character2);


//echo $character1->spell($character2);
//echo '<br>';
//var_dump($character1, $character2);

while($character1->isAlive() && $character2->isAlive()){
    var_dump($character1->shield);//possible car l'attribut est en public le temps de la vérification
    echo $character1->spell($character2);
    var_dump($character1->shield);//possible car l'attribut est en public le temps de la vérification
    echo '<br>';
    if (!$character2->isAlive()) {//permets d'indiquer que le personnage descend en dessous de 0 en points de vie
        echo '<br>';
        echo $character2->getName()."est KO";// permet au name d'être en protected, sinon le $name doit pour cela être public et ds ce cas ==>echo "$character1->name est KO";
    }

    if($character2->isAlive()){
       echo $character2->attack($character1); 
       echo '<br>';
    };//me permets d'être cohérent, le personnage ne peut pas attaquer s'il est mort
    if (!$character1->isAlive()) {
        echo '<br>';
        echo $character1->getName()."est KO";
    }
    //var_dump($character1, $character2); 
}
