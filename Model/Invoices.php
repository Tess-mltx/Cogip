<?php
declare(strict_types = 1);

class Invoices
{
    public string $reference;


    public function __construct(string $reference)
    {
        $this->reference = $reference;
    }
}
