<?php
/*
//echo 'coucou';
$voiture=[
    'roue'=>4,
    "couleur"=>"rouge",
    'vitesse max'=>110
];
$voiture['couleur']='bleu';//on modifie le contenu de la variable
echo$voiture['couleur'];

//créer une fonction pour modifier les variables
function CreateCar($var1,$var2,$var3){
    $voiture=[
    'roue'=>$var1,
    'couleur'=>$var2,
    'vitesse max'=>$var3
    ];
};
//lancer la fonction
CreateCar (5,'red',200);
*/

include 'classes/Voiture.php';
//on fait un include pour chaque fichier de classe, et l'ordre de l'include n'importe pas (entre parent et enfant)

$voiture= new Voiture(2,'rouge',456,100); //instancie la classe dans une variable, c'est la manière "d'appeler ma fonction"
$voiture2= new Voiture(3,'bleu',789,50);//les deux objets ainsi créés peuvents être manipulés simultanément et différemment
$voiture3= new Voiture (4,'vert',148,100);//le "construct" se lance dès l'instanciation
var_dump($voiture3);
//$voiture->avance();
$voiture->avance(100);//pour l'option $dist
$voiture->avance(150);
$voiture2->essence($voiture);

echo $voiture->getDistance();

echo $voiture->couleur();

//$voiture->distance=100; =>interdit car private
$voiture->setDistance(50);

var_dump($voiture);
var_dump($voiture2);
/*
$instance->distance=150; //cette manipulation est possible car je suis en public !!!
*/

