<?php

class ComponentA extends Component 
{
    public function send() : void 
    {
        $message = 'Im component A';
        echo 'A is sending a message: ' . $message;
        
        $this->mediator->notify($this, $message);
    }

    public function receive(string $message) : void 
    {
        echo 'Component A got a message: ' . $message;
    }
}
