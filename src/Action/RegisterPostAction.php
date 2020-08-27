<?php

namespace App\Action;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use App\Domain\User\Service\UserUpdate;


final class RegisterPostAction
{
    public function __construct(UserUpdate $userupdate){
        $this->userupdate=$userupdate;
    }
  public function __invoke(
        ServerRequestInterface $request, 
        ResponseInterface $response
    ): ResponseInterface {

        $body =(array)$request -> getparsedbody();
        $Headers =$request -> getheaders();

        $firstname = $body['firstname'];
        $lastname = $body['lastname'];
        $email = $body['email'];
        $password = $body['password'];

        //processing here
$values = [
    'firstname' => $firstname,
    'lastname' => $lastname,
    'email' => $email,
    'password' => $password ,
    'reg_date'=> date('Y-m-d H:i:s')
];
if ($firstname == '') {
    $result = [
        'success' => 0
    ];
}else{
    $res = $this->userupdate->insertuser($values);
    if ($res) {
        $result = [
            'success' => 1,
            'id' => $res
        ];
    }else{
        $result = [
            'success' => 0
        ];
    }
}
        $response->getBody()->write(json_encode($result));
        
        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(200);
    
}
}