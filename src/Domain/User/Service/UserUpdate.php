<?php

namespace App\Domain\User\Service;
<<<<<<< HEAD

=======
>>>>>>> origin/olfa
use App\Domain\User\Repository\UserUpdateRepository;

final class UserUpdate{

<<<<<<< HEAD
    public function __construct(UserUpdateRepository $userUpdateRepository){
        $this->useUpdateRepository = $userUpdateRepository;
    }

    public function getUsers():array{

        //those methodes are responsible for doing tests before passing args to Repository

        //we call Repo methode here after the tests

        $users = $this->useUpdateRepository->getusersDB();

        return $users;
    }


    public function getUser($id):array{

        //those methodes are responsible for doing tests before passing args to Repository

        //we call Repo methode here after the tests

        $user = $this->useUpdateRepository->getuserDB($id);

        return $user;
    }

    public function addUser($data):int{

        //test $data here

        $user = $this->useUpdateRepository->addUserDB($data);

        return $user;
    }

    public function updateUser($data):int{
        $user = $this->useUpdateRepository->updateUserDB($data);

        return $user;
    }

}
=======
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


>>>>>>> origin/olfa
