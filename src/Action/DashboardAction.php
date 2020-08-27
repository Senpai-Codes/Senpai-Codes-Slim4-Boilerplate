<?php

namespace App\Action;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
<<<<<<< HEAD
use Slim\Views\Twig;

final class DashboardAction
{

    public function __construct(Twig $twig){
        $this->twig = $twig;
    }

    public function __invoke(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        Array $args = []
    ): ResponseInterface {
        
        $name = $args['name'];

        $data = ['name' => $name];


        $this->twig->render($response,'dashboard/dashboard.twig',$data);
        
        return $response;
    }
=======
use slim\views\twig;

final class DashboardAction
{
public function __constract(Twig $twig){
    $this -> twig = $twig;
}
  public function __invoke(
        ServerRequestInterface $request, 
        ResponseInterface $response
    ): ResponseInterface {
       $name = $args['name'];
$data = ['name'=>$name];
$this->twig->render($response,'dashboard/dashboard.twig',$data);       

     return  $response;

    
}
>>>>>>> origin/olfa
}