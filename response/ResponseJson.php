<?php

namespace response;

class ResponseJson implements Response
{
    public bool $status;
    public $data;

    public function make(bool $status, $data): void
    {
        $this->status = $status;
        $this->data = $data;
        echo json_encode($this);
    }
}