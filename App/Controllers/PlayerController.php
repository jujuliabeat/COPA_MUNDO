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

        //Procure uma arquivo TeamRepository um método que retorne uma lista de todoas as seleções;
        //Normalmente a operação se parece com algo do tipo: SELECT * FROM ...
        $data['players'] = $this->repository->getAll();

        return $this->container->view->render($response, 'player.php', $data);
    }

    public function getById(Request $request, Response $response, array $params){

        //para obter os parâmetros da URL substitua as interrogações por "$params['id']"
        //Após realida as alterações, teste a rota acessando: localhost:8080/players/274 
        $id = $params['id'];
        
        //Substitua as interrogações por "getById"
        $data['players'] = $this->repository->getById($id);


        // print "<h1>Essa rota não possui uma tela associada</h1><br/>";

        // print_r($data);
        // exit;

        return $this->container->view->render($response, 'single_player.php', $data);
    }

    public function getByName(Request $request, Response $response, array $params){

        //para obter os parâmetros da URL substitua as interrogações por "$params['name']"
        //Após realida as alterações, teste a rota acessando: localhost:8080/players/name/Alisson 
        $name = $params['name'];

        //Substitua as interrogações por "getByName"
        $data['players'] = $this->repository->getByName($name);

        // print "<h1>Essa rota não possui uma tela associada</h1><br/>";
        // print_r($data);
        // exit;

        return $this->container->view->render($response, 'single_player.php', $data);
    }

    public function getByTeamId(Request $request, Response $response, array $params){
        $teamId = $params['id'];

        $data['players'] = $this->repository->getByTeamId($teamId);

         /*print "<h1>Essa rota não possui uma tela associada</h1><br/>";
         print_r($data);
         exit;*/

        return $this->container->view->render($response, 'player.php', $data);
    }

    public function getByPosition(Request $request, Response $response, array $params){
        $playerPos = $params['pos'];

        $data['players'] = $this->repository->getByPosition($playerPos);

//        print "<h1>Essa rota não possui uma tela associada</h1><br/>";
//        print_r($data);
//        exit;

        return $this->container->view->render($response, 'player.php', $data);
    }

}