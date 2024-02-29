<?php

declare(strict_types=1);

class Contacts {
    public string $name;
    public string $email;
    public string $phone;
    public int $company_id;
    public string $created_at;

    public function __construct(string $name, string $email, string $phone, int $company_id, string $created_at) {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->company_id = $company_id;
        $this->created_at = $created_at;
    }
}