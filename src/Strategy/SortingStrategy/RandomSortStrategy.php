<?php

namespace src\Strategy\SortingStrategy;

class RandomSortStrategy implements SortingStrategyInterface
{
    public function execute(array $data) : array 
    {
        shuffle($data);
    }
}
