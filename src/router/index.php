<?php
require __DIR__.'/../../vendor/autoload.php';
define('PATH',explode('/',$_SERVER['REQUEST_URI']));
switch (PATH[1]) {
    case 'receita':
        require __DIR__.'/../view/receita/index.php';
        break;
    default:
        echo '...';
        break;
}