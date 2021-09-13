<?php

namespace src\Strategy;

use src\Strategy\SortingStrategy\SortingStrategyInterface;

class Sorter 
{
    private SortingStrategyInterface $strategy;
    
    public function __construct(SortingStrategyInterface $strategy)
    {
        $this->setStrategy($strategy);
    }

    public function setStrategy(SortingStrategyInterface $strategy) : void
    {
        $this->strategy = $strategy;
    }

    public function sort(array $data) : array
    {
        echo 'executing strategy \n';

        $this->strategy->execute($data);

        echo 'done! \n';
    }
}
