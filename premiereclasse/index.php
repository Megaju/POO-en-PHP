<?php

include '../head.php';
require 'Personnage.php';

// création de nos personnages
$batman = new Personnage("Batman");
$joker = new Personnage("Joker");

// affichage de leur infos
$batman->description();
$joker->description();

$joker->attack($batman);

$batman->regenerate(10);
$joker->regenerate(10);

include '../footer.php';
