<?php

class VictorianChair implements AbstractChair
{
    public function sitOn(): bool
    {
        return true;
    }

    public function getStyleName(): string
    {
        return 'Victorian';
    }
}
