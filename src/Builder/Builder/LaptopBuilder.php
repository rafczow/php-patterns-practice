<?php
namespace src\Builder\Builder;

use src\Builder\Model\Laptop;

class LaptopBuilder implements BuilderInterface
{
    private $laptop;

    public function __construct() 
    {
        $this->reset();
    }

    public function reset()
    {
        $this->laptop = new Laptop();
    }

    public function createGpu() 
    {
        $this->laptop->parts[] = 'integrated gpu';
    }

    public function createCpu() 
    {
        $this->laptop->parts[] = 'low voltage cpu';
    }

    public function createRam() 
    {
        $this->laptop->parts[] = 'ram';
    }
    
    public function calculatePrice()
    {
        $this->laptop->price = count($this->laptop->parts) * 10;

        return $this->laptop->price;
    }

    protected function getComputer() : Laptop
    {
        $laptop = $this->laptop;
        
        $this->reset();

        return $laptop;
    }
}
