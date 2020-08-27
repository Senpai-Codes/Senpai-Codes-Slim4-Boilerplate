<?php

namespace App\Action;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use slim\Views\Twig;

final class RegisterAction
{
public function __construct(Twig $twig){
    $this -> twig = $twig;
}
  public function __invoke(
        ServerRequestInterface $request, 
        ResponseInterface $response
    ): ResponseInterface {
     //  $name = $args['name'];
    //$data = ['name'=>$name];
    $this->twig->render($response,'Register/Register.twig'/*,$data*/);       

     return  $response;

    
}
}