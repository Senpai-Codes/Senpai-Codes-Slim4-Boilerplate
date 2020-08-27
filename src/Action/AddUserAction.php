<?php

namespace App\Action;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

use App\Domain\User\Service\UserUpdate;

final class AddUserAction
{
    public function __construct(UserUpdate $userUpdate){
        $this->userUpdate = $userUpdate;
    }

    public function __invoke(
        ServerRequestInterface $request, 
        ResponseInterface $response
    ): ResponseInterface {
        $body = (array)$request->getParsedBody();
        $headers = $request->getHeaders();

        $data['firstname'] = $body['firstname'];
        $data['lastname'] = $body['lastname'];
        $data['email'] = $body['email'];
        $data['reg_date'] = $date = date('Y-m-d H:i:s');
        

        $user_success = $this->userUpdate->addUser($data);
        if ($user_success == 1) {
            $result = [
                'success' => true,
                'msg' => 'welcome',
            ];
        }else{
            $result = [
                'success' => false,
                'msg' => 'try again',
            ];  
        }


        $response->getBody()->write(json_encode($result));
        
        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(402);
    }
}