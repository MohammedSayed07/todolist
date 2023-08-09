<?php

function renderView(string $view, array $data = []): void
{
    extract($data);
    require_once MAIN_DIR.'/views/index.view.php';
}

function dd($value)
{
    echo'<pre>';
    var_dump($value);
    echo'</pre>';

    exit;
}