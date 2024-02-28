<?php

declare(strict_types=1);

class Contacts {
    private string $name;
    private string $email;
    private int $phone;

    public function __construct(string $name, string $email, int $phone) {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
    }
}