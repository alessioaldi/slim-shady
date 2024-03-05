<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
include_once "Alunno.php";
include_once "Classe.php";




class AlunniController
{
    function index(Request $request, Response $response, $args){
            

        //crea la classe e manda come response tutti gli alunni
        $c= new Classe();
        $response->getBody()->write($c->getClasse());
        return $response;

    }

    function search(Request $request, Response $response, $args){
            
        //salva il nome specificato dall'url
        $nome = $args['nome'];

        $c= new Classe();
        //richiama la funzione della classe
        $alunni = $c->searchByName($nome);
        $msg = '';
        if(empty($alunni))
            $msg .= "Alunno non trovato!";
        else{
            //fa un foreach sull'array ritornato dalla funzione di ricerca nomi
            foreach($alunni as $alunno){
                $msg.=$alunno->toString()."<br>";
            }
        }
        //manda in output il messaggio
        $response->getBody()->write($msg);
        return $response;

    }
}



?>