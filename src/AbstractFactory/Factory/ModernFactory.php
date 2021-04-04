<?php

class ModernFactory implements AbstractFactory
{
    public function createTable(): AbstractTable
    {
        return new ModernTable();
    }

    public function createChair(): AbstractChair
    {
        return new ModernChair();
    }
}