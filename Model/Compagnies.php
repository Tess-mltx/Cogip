<?php
declare(strict_types = 1);

class Companies 
{
    public string $name;
    public string $contry;
    public string $tvaNumber;

    public function __construct(string $name, string $contry, string $tvaNumber)
    {
        $this->name = $name;
        $this->country = $contry;
        $this->tvaNumber = $tvaNumber;
    }
}
