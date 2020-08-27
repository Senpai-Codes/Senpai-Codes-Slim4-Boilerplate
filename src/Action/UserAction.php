<?php

namespace App\Action;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
<<<<<<< HEAD

=======
>>>>>>> origin/olfa
use App\Domain\User\Service\UserUpdate;

final class UserAction
{
<<<<<<< HEAD
    public function __construct(UserUpdate $userUpdate){
        $this->userUpdate = $userUpdate;
    }

    public function __invoke(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        array $args = []
=======
    public function __construct(UserUpdate $userupdate){
        $this->userupdate=$userupdate;
    }
    public function __invoke(
        ServerRequestInterface $request, 
        ResponseInterface $response,
        array $args=[]
>>>>>>> origin/olfa
    ): ResponseInterface {
        $id = $args['id'];
        $token = $args['token'];

<<<<<<< HEAD
        //processing here
        $user = $this->userUpdate->getUser($id);

        $result = [
            'success' => true,
            'id' => $id,
            'token' => $token,
            'user-data' => $user
=======
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
>>>>>>> origin/olfa
        ];

        $response->getBody()->write(json_encode($result));
        
        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(200);
    }
}