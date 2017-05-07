<h1>Articles</h1>

<ul>
<?php foreach (\App\Table\Article::getLast() as $post): ?>

    <h2><a href="<?= $post->url ?>"><?= $post->title; ?></a></h2>
    <p><i>Posté le, <?= $post->date; ?> dans la catégorie <b><?= $post->category; ?></b></i></p>
    <p><?= $post->excerpt ?></p>

<?php endforeach; ?>
</ul>
