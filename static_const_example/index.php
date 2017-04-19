<?php
use \Megaju\Text;
use \Megaju\Autoloader;

include '../head.php';

require '../class/Autoloader.php';
Autoloader::register();

echo Text::withZero(4);
