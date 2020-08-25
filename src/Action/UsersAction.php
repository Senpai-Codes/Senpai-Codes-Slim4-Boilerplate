<?php

namespace App\Action;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class UsersAction
{
    public function __invoke(
        ServerRequestInterface $request, 
        ResponseInterface $response
    ): ResponseInterface {
    
        $result = [
            'success' => ['message' => 'Validation of users is success' ],
            'time' => date("M,d,Y h:i:s A")
        ];

        $response->getBody()->write(json_encode($result));
        
        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(200);
    }
}