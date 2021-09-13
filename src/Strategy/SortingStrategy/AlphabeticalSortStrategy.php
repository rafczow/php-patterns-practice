<?php

namespace src\Strategy\SortingStrategy;

class AlphabeticalSortStrategy implements SortingStrategyInterface
{
    public function execute(array $data) : void 
    {
        sort($data);
    }
}
