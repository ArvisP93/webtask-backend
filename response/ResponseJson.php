<?php

namespace response;

class ResponseJson implements Response
{
    public bool $status;
    public $data;

    public function make(bool $status, $data): void
    {
        $this->setHeaders();
        $this->status = $status;
        $this->data = $data;
        echo json_encode($this);
    }

    public function setHeaders(): void
    {
        header('Content-Type: application/json');
    }
}