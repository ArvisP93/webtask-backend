<?php

namespace core;

class TaskManager
{
    public function manage($task){
        switch ($task) {
            case "productlist":
                $repo = new \products\DatabaseRepository();
                $response = new \response\RequestResponseJson();
                $controller = new \products\Controller($repo, $response);
                $controller->productList();
                break;
            case "productcreate":
                $repo = new \products\DatabaseRepository();
                $response = new \response\RequestResponseJson();
                $controller = new \products\Controller($repo, $response);
                $controller->productCreate();
                break;
            case "productupdate":
                $repo = new \products\DatabaseRepository();
                $response = new \response\RequestResponseJson();
                $controller = new \products\Controller($repo, $response);
                $controller->productUpdate();
                break;
            case "productdelete":
                $repo = new \products\DatabaseRepository();
                $response = new \response\RequestResponseJson();
                $controller = new \products\Controller($repo, $response);
                $controller->productDelete();
                break;
            default :
                echo "Nothing to do";
                break;
        }
    }
}