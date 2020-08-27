<?php
<<<<<<< HEAD

namespace App\Domain\User\Repository;

=======
namespace App\Domain\User\Repository;
>>>>>>> origin/olfa
use App\Repository\QueryFactory;
use Cake\Database\StatementInterface;


<<<<<<< HEAD
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
=======

class UserUpdateRepository{
    private $queryfactory;
    public function __construct(QueryFactory $queryfactory){
        $this->queryfactory=$queryfactory;
    }

//select user 
    public function getusersDB():array{
        $query = $this->queryfactory->newSelect('users')->select('*');
        $rows = $query->execute()->fetchAll('assoc');
        return $rows;
    }   
    
//select user par id
    public function getuserDB($id):array{
        $query = $this->queryfactory->newSelect('users')
>>>>>>> origin/olfa
        ->select('*')
        ->andWhere(['id' => $id]);
        $row = $query->execute()->fetchAll('assoc');
        return $row;
<<<<<<< HEAD
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
=======
        
        }
//insert user
        public function insertuser($values){
            
           $id=$this->queryfactory->newInsert('users', $values)->execute()->lastInsertId();
return $id;
        }
//update user

public function Update($values){
    $up=$this->queryfactory->newUpdate('users')
    ->set($values)
    ->andWhere(['id' => 1])
    ->execute();
    return $up;
}
//delete user
public function UserDelete($id){


$res=$this->queryfactory->newDelete('users')
    ->andWhere(['id' => $id])
    ->execute();
    return $res;
    } 
    
    

>>>>>>> origin/olfa
}