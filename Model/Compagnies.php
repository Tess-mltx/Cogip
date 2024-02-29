<?php
declare(strict_types = 1);

class Companies 
{
    public string $name;
    public string $contry;
    public string $tvaNumber;
    public string $created_at;
    public function __construct(string $name, string $contry, string $tvaNumber, string $created_at)
    {
        $this->name = $name;
        $this->country = $contry;
        $this->tvaNumber = $tvaNumber;
        $this->created_at = $created_at;
    }
}
