<?php

namespace response;

class ResponseXml implements Response
{
    public function __construct()
    {
    }

    public function make(bool $status, $data): void
    {
        echo "XML response";
    }
}