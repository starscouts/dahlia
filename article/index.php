<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/functions.php";

if (!isset(array_keys($_GET)[0]) || array_keys($_GET)[0] === "") {
    header("Location: /");
    die();
}

$id = substr(array_keys($_GET)[0], 1);

if (str_contains("/", $id) || str_contains(".", $id) || !file_exists($_SERVER['DOCUMENT_ROOT'] . "/includes/list/" . $id . ".md")) {
    header("Location: /");
    die();
}

$file = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/includes/list/" . $id . ".md");
$frontMatter = parseFrontMatter($id . ".md");
$content = parseMarkdown($id . ".md");

$title = $frontMatter["title"]; require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/header.php"; ?>

<?php if (isset($frontMatter["banner"])): ?>
    <div id="banner-big" style="position: absolute; z-index: -1; background-image: url('<?= $frontMatter["banner"] ?>'); background-size: cover; background-position: center; width: 100%; top: 0; aspect-ratio: 20/9;">
        <div style="background: rgba(255, 255, 255, .75); backdrop-filter: blur(50px); -webkit-backdrop-filter: blur(50px); width: 100%; height: 100%;"></div>
    </div>
<?php endif; ?>

<div class="container" style="margin-top: 80px;" id="top">
    <div style="text-align: center;">
        <h1 style="margin-bottom: 20px;"><?= $title ?></h1>
        <?php if (isset($frontMatter["banner"])): ?>
            <div style="background-color: #111; background-image: url('<?= $frontMatter["banner"] ?>'); background-size: cover; background-position: center; width: 100%; aspect-ratio: 21/9; border-radius: 10px; margin-bottom: 20px;"></div>
        <?php endif; ?>
    </div>

    <div style="max-width: 600px; margin-left: auto; margin-right: auto;">
        <div class="text-muted"><?= date('j F Y', strtotime($frontMatter["date_published"])) ?><?php if (trim($frontMatter["tags"]) !== ""): ?> · <?= $frontMatter["tags"] ?><?php endif; ?></div>
        <hr>

        <article><?= $content ?></article>
    </div>
</div>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php"; ?>