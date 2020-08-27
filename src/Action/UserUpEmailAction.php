<?php
namespace App\Action;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use App\Domain\User\Service\UserUpdate;
final class UserUpEmailAction

{
    
    public function __construct(UserUpdate $userupdate){
        $this->userupdate=$userupdate;
    }

    public function __invoke(
        ServerRequestInterface $request, 
        ResponseInterface $response
    ): ResponseInterface {
        $data = (array)$request->getParsedBody();
        $headers = $request->getHeaders();
        
            $values = [
                'id'=>'1',
               'email' => 'exemple@exemple.com',
            ];

        $up = $this->userupdate->Update($values);
        $result = [
            'success' => true,
            'id' => $up
        ];
        $response->getBody()->write(json_encode($result));
        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus(200);
    }

}

