<?php

require '../app/Autoloader.php';

App\Autoloader::register();

if (isset($_GET['p'])) {
    $p = $_GET['p'];
} else {
    $p = 'home';
}

// initialisation des objets
$db = new App\Database('tpblog');

ob_start();
switch ($p) {
    case 'home' :
        require '../pages/home.php';
        break;
    case 'single' :
        require '../pages/single.php';
        break;
    case 'category' :
        require '../pages/category.php';
        break;
}
$content = ob_get_clean();
require '../pages/templates/default.php';