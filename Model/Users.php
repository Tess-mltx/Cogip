<?php

declare(strict_types= 1);

require("Connect/Cogip.php");

class Users
{
    private string $firstname;
    private string $lastname;
    private string $email;

    public function __construct(string $firstname, string $lastname, string $email) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
    }
}

// Class qui prend nom, prénom et e-mail