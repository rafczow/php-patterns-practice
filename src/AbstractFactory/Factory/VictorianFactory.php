<?php

class VictorianFactory implements AbstractFactory
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