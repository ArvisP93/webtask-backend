<?php

namespace users;

require_once ("users/repository/UserRepository.php");

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

        foreach ($allUsers as $array) {
            foreach ($array as $key => $value) {
                if($value->id == $id)
                    return $value;
            };
        }
    }

}