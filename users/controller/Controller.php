<?php

namespace users;

use response\Response;

class Controller
{
    private Response $response;
    private UserRepository $userRepository;

    public function __construct(UserRepository $userRepository, Response $response)
    {
        $this->response = $response;
        $this->userRepository = $userRepository;
    }

    public function userList() {

        $this->response->make(true, $this->userRepository->obtainUsers());
    }

    public function selectUser() {
        $id = $_GET["id"];
        echo $id;
        $this->response->make(true, $this->userRepository->oneUser((int)$id));

    }


}