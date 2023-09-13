<?php
require __DIR__.'/../../vendor/autoload.php';
define('PATH',explode('/',$_SERVER['REQUEST_URI']));
switch (PATH[1]) {
    case 'template-delete':
        require __DIR__.'/../assets/template/modal/apagar.php';
        break;
    case 'template-receita-delete':
        require __DIR__.'/../assets/template/modal/receita-apagar.php';
        break;
    case 'template-receita':
        require __DIR__.'/../assets/template/modal/receita.php';
        break;
    case 'template-pessoa':
        require __DIR__.'/../assets/template/modal/pessoa.php';
        break;
    case 'pessoa':
        require __DIR__.'/../view/pessoa/index.php';
        break;
    case 'receita':
        require __DIR__.'/../view/receita/index.php';
        break;
    case 'despesa':
        require __DIR__.'/../view/despesa/index.php';
        break;
    default:
        echo '...';
        break;
}