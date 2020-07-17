<?php

namespace core;

class App
{
    private static $instance = null;
    private TaskManager $taskManager;

    private function __construct()
    {
        $this->taskManager = new TaskManager();
    }

    public static function getInstance(): App
    {
        if (!isset(self::$instance)) {
            self::$instance = new App();
        }

        return self::$instance;
    }

    public function start(){
        $this->taskManager->manage(\request\Request::getRequestParam("command"));
    }
}