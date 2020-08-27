<?php

namespace App\Action;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class PostsAction
{
    public function __invoke(
        ServerRequestInterface $request, 
        ResponseInterface $response
    ): ResponseInterface {
<<<<<<< HEAD
        $body = (array)$request->getParsedBody();
        $headers = $request->getHeaders();

        $h1 = $headers['h1'];
        $h2 = $headers['h2'];

        $b1 = $body['b1'];
        $b2 = $body['b2'];

=======
        $body =(array)$request -> getparsedbody();
        $Headers =$request -> getheaders();
        $h1 = $Headers['h1'];
        $h2 = $Headers['h2'];
        $b1 = $body['b1'];
        $b2 = $body['b2'];
>>>>>>> origin/olfa
        $result = [
            'success' => ['message' => 'Validation success' ],
            'time' => date("M,d,Y h:i:s A"),
            'h1' => $h1[0],
            'h2' => $h2[0],
            'b1' => $b1,
<<<<<<< HEAD
            'b2' => $b2
=======
            'b2' => $b2,
>>>>>>> origin/olfa
        ];

        $response->getBody()->write(json_encode($result));
        
        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(402);
    }
}