<?php

namespace App\Routes;

use Slim\App;
use Slim\Views\PhpRenderer;

use App\Controllers\PlayerController;
use App\Controllers\TeamController;
use App\Controllers\HomeController;
use App\Controllers\InstallationController;

$settings = [
    'settings' => ['displayErrorDetails' => true],
];

$app = new App($settings);


    // Get container
    $container = $app->getContainer();

    // Register component on container
    $container['view'] = new PhpRenderer(__DIR__ . "/../Views/");
    $container['BASE_PATH'] = 'http://localhost:8080';

    //Adicione suas rotas aqui!

    $app->get('/', HomeController::class . ":home");
    $app->get('/teams', TeamController::class . ":getAll");
    $app->get('/teams/selecao[/{selecao}]', TeamController::class . ":getByName");
    $app->get('/teams/{id}', TeamController::class . ":getById");
    $app->get('/teams/grupo/{grupo}', TeamController::class . ":getByGroup");
    $app->get('/teams/abrev/{abrev}', TeamController::class . ":getByAbrev");


    $app->get('/player', PlayerController::class . ":getAll");
    $app->get('/player/{id}', PlayerController::class . ":getById");
    $app->get('/player/selecao/{idSelecao}', PlayerController::class . ":getByTeamId");
    $app->get('/player/name/{name}', PlayerController::class . ":getByName");
    $app->get('/player/posicao/{posicao}', PlayerController::class . ":getByPosition");


    $app->get('/player/search/{search}', PlayerController::class . ":getBySearchParam");


    $app->get('/install', InstallationController::class . ":install");


    $app->run();