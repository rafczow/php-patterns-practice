<?php
namespace src\Builder\Builder;

use src\Builder\Model\Desktop;

class DesktopBuilder implements BuilderInterface
{
    private $computer;

    public function __construct() 
    {
        $this->reset();
    }

    public function reset()
    {
        $this->computer = new Desktop();
    }

    public function createGpu() 
    {
        $this->computer->parts[] = 'desktop gpu';
    }

    public function createCpu() 
    {
        $this->computer->parts[] = 'desktop cpu';
    }

    public function createRam() 
    {
        $this->computer->parts[] = 'fast ram';
    }
    
    public function calculatePrice()
    {
        $this->computer->price = count($this->computer->parts) * 10;

        return $this->computer->price;
    }

    protected function getComputer(): Desktop
    {
        $computer = $this->computer;

        $this->reset();

        return $computer;
    }
}
