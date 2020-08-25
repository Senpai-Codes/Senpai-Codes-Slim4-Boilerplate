<?php

namespace App\Domain\User\Repository;

use App\Repository\QueryFactory;
use Cake\Database\StatementInterface;


class UserUpdateRepository{

    private $queryFactory;

    public function __construct(QueryFactory $queryFactory)
    {
        $this->queryFactory = $queryFactory;
    }

    public function getusersDB():array{
        $query = $this->queryFactory->newSelect('users')->select('*');
        $rows = $query->execute()->fetchAll('assoc');
        return $rows;
    }

    public function getuserDB($id):array{
        $query = $this->queryFactory->newSelect('users')
        ->select('*')
        ->andWhere(['id' => $id]);
        $row = $query->execute()->fetchAll('assoc');
        return $row;
    }
    public function addUserDB($data):int{

        $values = [
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'reg_date' => $data['reg_date']
        ];

        $id = $this->queryFactory->newInsert('users', $values)->execute()->lastInsertId();
        if ($id != 0) {
            return 1;
        }else {
            return 0;
        }
    }
    public function updateUserDB($data):int{
        $id = $data['id'];
        $values = [
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email']
        ];
        $res = $this->queryFactory->newUpdate('users')
        ->set($values)
        ->andWhere(['id' => $id ])
        ->execute();
        error_log(print_r($res,1));
        if ($res != 0) {
            return 1;
        }else {
            return 0;
        }   
    }
}