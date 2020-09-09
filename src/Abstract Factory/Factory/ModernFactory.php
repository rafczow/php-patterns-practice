<?php

class ModernFactory implements FurnitureFactory
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