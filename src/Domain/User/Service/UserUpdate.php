<?php

namespace App\Domain\User\Service;

use App\Domain\User\Repository\UserUpdateRepository;

final class UserUpdate{

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