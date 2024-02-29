<?php

declare(strict_types=1);

class Roles {
    private string $name;
    
    public function __construct(string $name) {
        $this->name = $name;
    }
}