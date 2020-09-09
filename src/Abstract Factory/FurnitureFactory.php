<?php
namespace src\AbstractFactory;

interface FurnitureFactory
{
    public function createTable(): AbstractTable;

    public function createChair(): AbstractChair;
}
