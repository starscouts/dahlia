<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/functions.php"; ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= isset($title) ? $title . " | Raindrops Blog" : "Raindrops Blog" ?></title>
    <link rel="shortcut icon" href="https://ponies.equestria.horse/assets/avatars/7d9f543ef74240f69d0786c3f2983124.webp" type="image/webp">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        article img {
            display: block;
            margin-left: auto;
            margin-right: auto;
            max-width: 100%;
            margin-top: 1rem;
            margin-bottom: 1rem;
        }
    </style>
    <script>
        window.onscroll = window.onload = () => {
            let perc = window.scrollY;
            if (perc > 100) perc = 100;
            let opacity = perc / 100;
            document.getElementById("title-container").style.opacity = opacity;
            document.getElementById("navbar").style.borderBottom = "rgba(0, 0, 0, " + (opacity / 4) + ") 1px solid";
            document.getElementById("navbar").style.webkitBackdropFilter = document.getElementById("navbar").style.backdropFilter = "blur(" + (20 * opacity) + "px)";
            document.getElementById("navbar").style.backgroundColor = "rgba(255, 255, 255, " + (0.75 * opacity) + ")";
        }
    </script>
</head>
<body style="font-size: 1.15rem;">
<nav class="navbar navbar-expand-md fixed-top" id="navbar" style="border-bottom: transparent 1px solid; transition: border-bottom 200ms, background-color 200ms;">
    <div class="container-fluid" style="display: grid; grid-template-columns: 1fr max-content;">
        <div id="title-container" class="navbar-brand">
            <?= $title ?? "" ?>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <div class="navbar-nav">
                <div class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </div>
                <div class="nav-item">
                    <a class="nav-link" href="/about/">About</a>
                </div>
                <div class="nav-item">
                    <a class="nav-link" href="https://raindrops.equestria.horse/" target="_blank">Main website ↗</a>
                </div>
                <div class="nav-item">
                    <a class="nav-link" href="https://twitter.com/miapone_" target="_blank">Twitter ↗</a>
                </div>
            </div>
        </div>
    </div>
</nav>