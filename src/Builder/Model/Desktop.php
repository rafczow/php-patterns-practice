<?php
namespace src\Builder\Model;

class Desktop
{
    public $parts = [];
    public $price;
    public $caseSize;

    public function listParts(): void
    {
        echo "Desktop parts: " . implode(', ', $this->parts) . "\n\n";
        echo "In case of size: " . $this->caseSize . "\n\n";
    }
}
