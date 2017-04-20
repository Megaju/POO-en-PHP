<?php foreach($db->query('SELECT * FROM articles', 'App\Table\Article') as $post): ?>

<h2><a href="<?= $post->getUrl(); ?>"><?= $post->title; ?></a></h2>
<p><?= $post->getExcerpt(); ?></p>

<?php endforeach; ?>
