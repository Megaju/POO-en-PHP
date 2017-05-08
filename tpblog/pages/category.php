<?php

use App\App;
use App\Table\Categories;
use App\Table\Article;

$category = Categories::find($_GET['id']);
if ($category === false) {
    App::notFound();
}

$articles = Article::lastByCategory($_GET['id']);
$categories = Categories::all();

?>

<h1>Articles de la catégorie : <em><?= $category->title; ?></em></h1>

<div class="row">

    <!-- articles -->
    <div class="col-sm-8">
        <ul>
            <?php foreach ($articles as $post): ?>

                <h2><a href="<?= $post->url ?>"><?= $post->title; ?></a></h2>
                <p><i>Posté le, <?= $post->date; ?> dans la catégorie <b><?= $post->category; ?></b></i></p>
                <p><?= $post->excerpt ?></p>

            <?php endforeach; ?>
        </ul>
    </div>

    <!-- catégories -->
    <div class="col-sm-4">
        <ul>
            <?php foreach (\App\Table\Categories::all() as $category): ?>
                <li><a href="<?= $category->url; ?>"><?= $category->title; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>

</div>

