<?php

namespace App\Domain\User\Service;
use App\Domain\User\Repository\UserUpdateRepository;

final class UserUpdate{

    public function __construct(UserUpdateRepository $userupdaterepository){
      $this->userupdaterepository=$userupdaterepository;
    }
      public function getUsers():array{
          $users= $this->userupdaterepository->getusersDB();
          return $users;     
}
      public function getUser($id):array{
           $user= $this->userupdaterepository->getuserDB($id);
           return $user;     
        }
        public function insertuser($a){
            $user= $this->userupdaterepository->insertuser($a);
           return $user;   
        }
        //update
public function Update($values){
  $up=$this->userupdaterepository->Update($values);
  return $up;
}
//delete user
 public function UserDelete($id){
  $res=$this->userupdaterepository->UserDelete($id);
  return $res;
 }
}    


