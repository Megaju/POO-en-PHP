<?php
require 'Personnage.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POOPHP - Programmation Orientée Objet en PHP</title>
</head>
<body>
    <header>
        <h1>POOPHP</h1>
    </header>
    <nav>
        <ul>
            <li><a href="#">LIEN</a></li>
            <li><a href="#">LIEN</a></li>
            <li><a href="#">LIEN</a></li>
            <li><a href="#">LIEN</a></li>
        </ul>
    </nav>
    <section>
        <h2>Personnages</h2>

        <?php

        // création d'un nouveau personnage, ici Batman !
        $batman = new Personnage;
        var_dump($batman->regenerer());

        ?>

    </section>
    <footer>

    </footer>
</body>
</html>
