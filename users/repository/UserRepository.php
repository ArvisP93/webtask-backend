<?php

namespace users;

interface UserRepository
{
    function obtainUsers();
    function oneUser(int $id);
}