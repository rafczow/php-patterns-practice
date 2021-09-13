<?php

namespace src\Strategy\SortingStrategy;

interface SortingStrategyInterface 
{
    public function execute(array $data) : void;
}
