<?php

abstract class Component
{
    public string $name;
    
    protected MediatorInterface $mediator;

    public function __construct($name, $mediator) 
    {
        $this->name = $name;
        $this->mediator = $mediator;
    }

    public abstract function send() : void;

    public abstract function receive(string $message) : void;

    public function getName() 
    {
        return $this->name;
    }
}
