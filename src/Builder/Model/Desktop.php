<?php
namespace src\Builder\Model;

class Desktop
{
    public array $parts;
    public float $price;
    public int $caseSize;

    public function listParts(): void
    {
        echo "Desktop parts: " . implode(', ', $this->parts) . "\n\n";
        echo "In case of size: " . $this->caseSize . "\n\n";
    }
}
