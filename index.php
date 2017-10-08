<?php

spl_autoload_register(function($class){
    require 'Class'. DIRECTORY_SEPARATOR . $class . '.php';
});

$garfield = new Heros('Garfield');
$ulys = new Heros('Ulys');
$emoi = new Heros('Emoi');
$averian = new Heros('Averian');
$superman = new Heros('Clark Kent', 50);
$sangoku = new Heros('Sangoku', 80);
$catwoman = new Heros('Selina Kyle');
$ironMan = new Heros('Tony Stark');

$joueur1 = new Joueur('Larson');
$joueur1->addHeros($garfield, $averian, $emoi, $ulys);
$joueur1->createEquipe('Alpha', [
    $joueur1->getHero('Garfield'),
    $joueur1->getHero('Ulys'),
    $joueur1->getHero('Emoi'),
    $joueur1->getHero('Averian')
    ]
);


$joueur2 = new Joueur('Naruto');
$joueur2->addHeros($superman, $sangoku, $catwoman, $ironMan);
$joueur2->createEquipe('Rouge', [
    $joueur2->getHero('Clark Kent'),
    $joueur2->getHero('Sangoku'),
    $joueur2->getHero('Selina Kyle'),
    $joueur2->getHero('Tony Stark')
    ]
);

$null = new Combat($joueur1->getEquipe('Alpha'), $joueur2->getEquipe('Rouge'));

var_dump($joueur1, $null);
