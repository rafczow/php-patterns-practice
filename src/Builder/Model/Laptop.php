<?php
namespace src\Builder\Model;

class Laptop
{
    public array $parts;
    public float $price;
    public int $screenSize;

    public function listParts(): void
    {
        echo "Laptop parts: " . implode(', ', $this->parts) . "\n\n";
        echo "With screen size: " . $this->screenSize . "\n\n";
    }
}
