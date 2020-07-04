<?php

namespace response;

interface Response
{
    function make(bool $status, $data): void;
}