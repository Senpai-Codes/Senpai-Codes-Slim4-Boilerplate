<?php

namespace App\Action;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

use App\Domain\User\Service\UserUpdate;

final class UserAction
{
    public function __construct(UserUpdate $userUpdate){
        $this->userUpdate = $userUpdate;
    }

    public function __invoke(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        array $args = []
    ): ResponseInterface {
        $id = $args['id'];
        $token = $args['token'];

        //processing here
        $user = $this->userUpdate->getUser($id);

        $result = [
            'success' => true,
            'id' => $id,
            'token' => $token,
            'user-data' => $user
        ];

        $response->getBody()->write(json_encode($result));
        
        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(200);
    }
}