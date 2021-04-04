<?php
namespace src\AbstractFactory;

use src\AbstractFactory\Model\AbstractTable;
use src\AbstractFactory\Model\AbstractChair;

interface AbstractFactory
{
    public function createTable(): AbstractTable;

    public function createChair(): AbstractChair;
}