<?php

class ModernTable implements AbstractTable
{
    public function putCloth(): bool
    {
        return true;
    }
    
    public function getStyleName(): string
    {
        return 'Modern';
    }

    public function isSameDesign(AbstractChair $chair): bool 
    {
        if ($chair->getStyleName() === $this->getStyleName()) {
            return true;
        }
        
        return false;
    }
}
