<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/header.php"; ?>

<div class="container" style="margin-top: 80px;">
    <div style="text-align: center; margin-bottom: 100px;">
        <h1>Raindrops Blog</h1>
        <h4>Ponies messing with tech</h4>
    </div>

    <div class="list-group" style="margin-bottom: 50px;">
        <?php foreach (getList() as $article): ?>
            <a class="list-group-item list-group-item-action" href="/article/?/<?= substr($article, 0, -3) ?>"><?= parseFrontMatter($article)["title"] ?></a>
        <?php endforeach; ?>
    </div>
</div>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php"; ?>