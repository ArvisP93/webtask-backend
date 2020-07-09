<?php

namespace users;

use validation\ErrorMessage;

require_once ("users/repository/UserRepository.php");
require_once ("validation/ErrorMessage.php");

class InMemoryRepository implements UserRepository
{
    public function obtainUsers()
    {
        $user = new User(1100, "Jānis", "Kalniņš", "Director");
        $user2 = new User(1101, "Linda", "Kēnigsvalde", "Front-end programmer");
        $user3 = new User(1102, "Henrijs", "Ozoliņš", "Back-end programmer");
        $user4 = new User(1103, "Anna", "Bērziņa", "Project Manager");
        $user5 = new User(1104, "Santa", "Saulīte", "Software tester");

        $allUsers = new \stdClass();
        $allUsers->allUsers = [$user, $user2, $user3, $user4, $user5];

        return $allUsers;
    }

    public function oneUser(int $id)
    {
        $allUsers = $this->obtainUsers();
        $selectedUser = [];
        $errors = new ErrorMessage();

        foreach ($allUsers as $array) {
            foreach ($array as $key => $user) {
                if($user->id == $id) {
                    array_push($selectedUser, $user);
                }
            };
        }
        if(count($selectedUser)==1) {
            return $selectedUser;
        }
        else if (count($selectedUser)==0) {

            $errors->findErrors("noUser", $id);
            return $errors->error();
        }
    }
}