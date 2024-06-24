<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualités MGLSI</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
    <div id="contenu">
        <?php if (!empty($articles)) : ?>
            <?php foreach ($articles as $article) : ?>
                <div class="article">
                    <h1><a href="index.php?action=article&id<?= $article->id ?>"><?= $article->titre ?></a></h1>
                    <p><?= substr($article->contenu, 0, 300) . '...' ?></p>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <div class="message">Aucun article disponible pour le moment.</div>
        <?php endif; ?>
    </div>
    <?php
    require_once 'inc/menu.php'
    ?>


    </div>
</body>

</html>