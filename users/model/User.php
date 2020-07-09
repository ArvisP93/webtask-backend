<?php

namespace users;

class User
{
    public int $id;
    public string $name;
    public string $surname;
    public string $position;

    public function __construct(int $id, string $name, string $surname, string $position)
    {
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
        $this->position = $position;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function getPosition(): string
    {
        return $this->position;
    }


}