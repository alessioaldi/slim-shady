<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

include_once __DIR__. "/vendor/autoload.php";
include_once "controller/SiteController.php";
include_once "controller/AlunniController.php";


$app = AppFactory::create();

$app->get('/','SiteController:index');
$app->get("/alunni", "AlunniController:index");
$app->get('/alunni/{nome}', 'AlunniController:search');



$app->run();

?>
