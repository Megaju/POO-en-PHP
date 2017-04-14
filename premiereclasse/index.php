<?php

include '../head.php';
require 'Personnage.php';
require 'MarvelHero.php';

// création de nos personnages
$batman = new Personnage("Batman");
$joker = new Personnage("Joker");

// affichage de leur infos
$batman->description();
$joker->description();

$joker->attack($batman);

$batman->regenerate(10);

// test avec l'héritage
$deadpool = new MarvelHero("Deadpool");
$deadpool->description();

$deadpool->attack($joker);
$joker->regenerate(10);

include '../footer.php';
