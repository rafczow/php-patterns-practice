<?php
namespace src\Builder\Model;

class Laptop
{
    public $parts = [];
    public $price;
    public $screenSize;

    public function listParts(): void
    {
        echo "Laptop parts: " . implode(', ', $this->parts) . "\n\n";
        echo "With screen size: " . $this->screenSize . "\n\n";
    }
}
