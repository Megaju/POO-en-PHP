<?php

$post = $db->prepare('SELECT * FROM articles WHERE id = ?', [$_GET['id']], 'App\Table\Article', true);

?>

<h1><?= $post->title; ?></h1>
<p><i>Posté le, <?= $post->date; ?></i></p>

<p><?= $post->content; ?></p>

<a href="index.php?p=home">Retour à l'accueil</a>