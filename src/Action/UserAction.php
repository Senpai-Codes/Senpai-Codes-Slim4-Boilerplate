<?php

namespace App\Action;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use App\Domain\User\Service\UserUpdate;

final class UserAction
{
    public function __construct(UserUpdate $userupdate){
        $this->userupdate=$userupdate;
    }
    public function __invoke(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        array $args=[]
    ): ResponseInterface {
        $id = $args['id'];
        $token = $args['token'];

//processing here
$values = [
    'firstname' => 'john',
    'lastname' => 'doe',
    'email' => 'john.doe@example.com',
    'reg_date'=> date('Y-m-d H:i:s')
];
$res = $this->userupdate->insertuser($values);

//$user=$this->userupdate->getuser($id);
        $result = [
            'success' => true,
            'id' => $res,
           'token' => $token,
           // 'user_data' => $user
        ];

        $response->getBody()->write(json_encode($result));
        
        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(200);
    }
}