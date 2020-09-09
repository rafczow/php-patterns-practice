<?php
namespace src\Builder\Builder;

use src\Builder\Model\Laptop;

class LaptopBuilder implements BuilderInterface
{
    private Laptop $laptop;

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
        $this->computer->parts[] = 'integrated gpu';
    }

    public function createCpu() 
    {
        $this->computer->parts[] = 'low voltage cpu';
    }

    public function createRam() 
    {
        $this->computer->parts[] = 'ram';
    }
    
    public function calculatePrice()
    {
        $price = $this->computer->getPrice();
        $this->computer->price = $price;
    }

    protected function getComputer() : Laptop
    {
        $computer = $this->laptop;
        //$computer->addKeyboard();
        //$computer->addTouchpad();
        
        $this-reset();

        return $computer;
    }
}
