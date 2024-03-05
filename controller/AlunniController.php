<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
include_once "Alunno.php";
include_once "Classe.php";




class AlunniController
{
    function index(Request $request, Response $response, $args){
            
        
        $c= new Classe();
        $response->getBody()->write($c->getClasse());
        return $response;

    }

    function search(Request $request, Response $response, $args){
            
        $nome = $args['nome'];

        $c= new Classe();
        $alunni = $c->searchByName($nome);
        $msg = '';
        if(empty($alunni))
            $msg .= "Alunno non trovato!";
        else{
            foreach($alunni as $alunno){
                $msg.=$alunno->toString()."<br>";
            }
        }
        $response->getBody()->write($msg);
        return $response;

    }
}



?>