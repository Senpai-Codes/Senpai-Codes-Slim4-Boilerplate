<?php

namespace App\Action;

<<<<<<< HEAD
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use App\Domain\User\Service\UserUpdate;
final class UsersAction
{
<<<<<<< HEAD
=======

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

use App\Domain\User\Service\UserUpdate;


final class UsersAction
{

    public function __construct(UserUpdate $userUpdate){
        $this->userUpdate = $userUpdate;
    }

>>>>>>> 09660b9df6432f10587173ba6c53022660cd6705
=======
public function __construct(UserUpdate $userupdate){
    $this->userupdate = $userupdate;
}
>>>>>>> origin/olfa
    public function __invoke(
        ServerRequestInterface $request, 
        ResponseInterface $response
    ): ResponseInterface {
<<<<<<< HEAD
<<<<<<< HEAD
    
        $result = [
            'success' => ['message' => 'Validation of users is success' ],
            'time' => date("M,d,Y h:i:s A")
=======

        $users = $this->userUpdate->getUsers();

        $result = [
            'success' => true,
            'users' => $users
>>>>>>> 09660b9df6432f10587173ba6c53022660cd6705
=======
    $users =  $this->userupdate ->getUsers();
        $result = [
            'success' => ['message' => 'Validation of users is success' ],
            'users' => $users
>>>>>>> origin/olfa
        ];

        $response->getBody()->write(json_encode($result));

        
        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(200);
    }
}