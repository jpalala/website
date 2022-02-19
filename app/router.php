<?php

$request = $_SERVER['REQUEST_URI'];
$viewsdir = getcwd() . '/../views/';

switch ($request) {
    case '/' :
        require $viewsdir . 'home-page.phtml';
        break;
    case '' :
        require $viewsdir . 'home-page.phtml';
        break;
    case '/contact' :
        require $viewsdir . 'contact.phtml';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}
