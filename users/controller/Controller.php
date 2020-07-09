<?php

namespace users;

use response\Response;
use validation\NumberValidator;

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
        $error = new \validation\ErrorMessage();

        if(isset($_GET['id'])) {
            $id = $_GET["id"];

            if (NumberValidator::validate($id)) {
                $this->response->make(true, $this->userRepository->oneUser((int)$id));
            } else {
                $error->findErrors("wrongId", $id);
                $this->response->make(true, $error->error());
            }
        }
        else {
            $error->findErrors("required", "");
            $this->response->make(true, $error->error());
        }


    }


}