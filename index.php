<?php

declare(strict_types=1);

require_once("requires.php");

switch ($_GET["data"]) {
    case "products":
        $repo = new \products\InMemoryRepository();
        $response = new \response\ResponseJson();
        $controller = new \products\Controller($repo, $response);
        $controller->productList();
        break;
    case "users":
        $userRepo = new \users\InMemoryRepository();
        $userResponse = new \response\ResponseJson();
        $userController = new \users\Controller($userRepo, $userResponse);
        $userController->userList();
        break;
    case "user":
        if(isset($_GET['id'])) {
            $userRepo = new \users\InMemoryRepository();
            $userResponse = new \response\ResponseJson();
            $userController = new \users\Controller($userRepo, $userResponse);
            $userController->selectUser();
        }
        else {
            echo "To select one user, you have to give ID value";
        }
        break;
    default :
        echo "Nothing to do";
        break;
}
