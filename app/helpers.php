<?php

use JetBrains\PhpStorm\NoReturn;

function renderView(string $view, array $data = []): void
{
    extract($data);
    require_once MAIN_DIR.'/views/index.view.php';
}

#[NoReturn] function dd($value): void
{
    echo'<pre>';
    var_dump($value);
    echo'</pre>';

    exit;
}

function redirect($view): void
{
    header('location: '.$view);
}