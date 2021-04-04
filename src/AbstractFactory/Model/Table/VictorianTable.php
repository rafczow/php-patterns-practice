<?php

class VictorianTable implements AbstractTable
{
    public function putCloth(): bool
    {
        return true;
    }

    public function getStyleName(): string
    {
        return 'Victorian';
    }

    public function isSameDesign(AbstractChair $chair): bool 
    {
        if ($chair->getStyleName() === $this->getStyleName()) {
            return true;
        }
        
        return false;
    }
}
