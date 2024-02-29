<?php
declare(strict_types = 1);

class Invoices
{
    public string $reference;
    public int $company_id;
    public string $created_at;	


    public function __construct(string $reference, int $company_id, string $created_at)
    {
        $this->reference = $reference;
        $this->company_id = $company_id;
        $this->created_at = $created_at;
    }
}
