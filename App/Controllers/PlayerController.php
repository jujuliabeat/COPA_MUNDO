<?php

namespace App\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;
use App\Repositories\PlayersRepository;

class PlayerController {

    private mixed $container;
    private PlayersRepository $repository;

    public function __construct($container)
    {
        $this->container = $container;
        $this->repository = new PlayersRepository();
    }

    public function getAll(Request $request, Response $response, array $params){

        $data['player'] = $this->repository->getAll();

        return $this->container->view->render($response, 'player.php', $data);
    }

    public function getById(Request $request, Response $response, array $params){

        //para obter os parâmetros da URL substitua as interrogações por "$params['id']"
        //Após realida as alterações, teste a rota acessando: localhost:8080/players/274 
        $id = $params['id'];
        
        //Substitua as interrogações por "getById"
        $data['player'] = $this->repository->getById($id);

        // print "<h1>Essa rota não possui uma tela associada</h1><br/>";

        // print_r($data);
        // exit;

        return $this->container->view->render($response, 'player.php', $data);
    }

    public function getByName(Request $request, Response $response, array $params){

        //para obter os parâmetros da URL substitua as interrogações por "$params['name']"
        //Após realida as alterações, teste a rota acessando: localhost:8080/players/name/Alisson 
        $name = $params['name'];

        //Substitua as interrogações por "getByName"
        $data['player'] = $this->repository->getByName($name);

        // print "<h1>Essa rota não possui uma tela associada</h1><br/>";
        // print_r($data);
        // exit;

        return $this->container->view->render($response, 'player.php', $data);
    }

    public function getByTeamId(Request $request, Response $response, array $params){
        $idSelecao = $params['idSelecao'];
        
        $data['player'] = $this->repository->getByTeamId($idSelecao);
        // print "<h1>Essa rota não possui uma tela associada</h1><br/>";
        // print_r($data);
        // exit;

        return $this->container->view->render($response,  'player.php', $data);
    }

    public function getByPosition(Request $request, Response $response, array $params) {
        $posicao = $params['posicao'];
        
        $data['player'] = $this->repository->getByPosition($posicao);

        // print "<h1>Essa rota não possui uma tela associada</h1><br/>";
        // print_r($data);
        // exit;

        return $this->container->view->render($response, 'player.php', $data);
    }

    public function getBySearchParam(Request $request, Response $response, array $params) {
       
        // Lembrar de perguntar p professor

        // $id = $params['id'];
        // $name = $params['name'];
        // $idSelecao = $params['idSelecao'];
        // $posicao = $params['posicao'];

        // $data['player'] = $this->repository->getById($id);
        // $data['player'] = $this->repository->getByName($name);
        // $data['player'] = $this->repository->getByTeamId($idSelecao);
        // $data['player'] = $this->repository->getByPosition($posicao);

        // return $this->container->view->render($response, 'player.php', $data);
    }
}

