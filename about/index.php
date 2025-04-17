<?php $title = "About"; require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/header.php"; ?>

<div class="container" style="margin-top: 80px;">
    <div style="text-align: center;">
        <h1 style="margin-bottom: 20px;"><?= $title ?></h1>
        <div style="background-color: #ba532b; background-image: url('https://images.unsplash.com/photo-1507842217343-583bb7270b66?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxMTc3M3wwfDF8c2VhcmNofDF8fGxpYnJhcnl8ZW58MHx8fHwxNjM5ODYwNTc2&ixlib=rb-1.2.1&q=80&w=2000'); background-size: cover; background-position: center; width: 100%; aspect-ratio: 21/9; border-radius: 10px; margin-bottom: 20px;"></div>
        <hr>
    </div>

    <p>This blog is the result of merging UnchainedTech (unchained.minteck.org) and our old blog (minteck.org/blog) together. It has been rewritten to use a custom PHP engine since Ghost was too resource-hungry.</p>
</div>

<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php"; ?>