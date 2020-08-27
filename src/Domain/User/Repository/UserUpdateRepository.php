<?php
namespace App\Domain\User\Repository;
use App\Repository\QueryFactory;
use Cake\Database\StatementInterface;



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
        ->select('*')
        ->andWhere(['id' => $id]);
        $row = $query->execute()->fetchAll('assoc');
        return $row;
        
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
    
    

}