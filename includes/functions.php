<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/Parsedown.php";
$Parsedown = new Parsedown();

function getList() {
    return array_reverse(array_filter(scandir($_SERVER['DOCUMENT_ROOT'] . "/includes/list"), function ($i) { return !str_starts_with($i, "."); }));
}

function parseFrontMatter($file) {
    $data = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/includes/list/" . $file);
    $frontMatter = explode("---", $data)[1] ?? "";
    $lines = explode("\n", trim($frontMatter));
    $data = [];

    foreach ($lines as $line) {
        $parts = explode(":", $line);
        $name = $parts[0];
        array_shift($parts);
        $description = trim(implode(":", $parts));

        if (str_starts_with($description, '"') && str_ends_with($description, '"')) {
            $description = substr($description, 1, -1);
        }

        $data[$name] = $description;
    }

    $data["title"] = $data["title"] ?? "Article";
    $data["date_published"] = $data["date_published"] ?? date('c');
    $data["date_updated"] = $data["date_updated"] ?? date('c');
    $data["tags"] = $data["tags"] ?? "";
    $data["banner"] = $data["banner"] ?? null;

    return $data;
}

function parseMarkdown($file) {
    global $Parsedown;

    $data = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/includes/list/" . $file);
    $markdown = explode("---", $data)[2] ?? "";

    return $Parsedown->text($markdown);
}