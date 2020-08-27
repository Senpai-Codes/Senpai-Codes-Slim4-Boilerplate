<?php

namespace App\Action;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use App\Domain\User\Service\UserUpdate;
final class UserDeleteAction
{
public function __construct(UserUpdate $userupdate){
    $this->userupdate = $userupdate;
}
    public function __invoke(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        array $args=[]
    ): ResponseInterface {
        $id = $args['id'];

    $res =  $this->userupdate->UserDelete($id);

        $result = [
            'success' => ['message' => 'delete user success!' ],
            'id' => $id
        ];

        $response->getBody()->write(json_encode($result));

        
        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(200);
    }
}