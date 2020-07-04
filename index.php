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
        echo "something for users";
        break;
    default :
        echo "Nothing to do";
        break;
}
