<?php

class VictorianFactory implements FurnitureFactory
{
    public function createTable(): AbstractTable
    {
        return new VictorianChair();
    }

    public function createChair(): AbstractChair
    {
        return new VictorianTable();
    }
}