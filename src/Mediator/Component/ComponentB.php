<?php

class ComponentB extends Component 
{
    public function send() : void 
    {
        $message = 'Im component B';
        echo 'B is sending a message: ' . $message;
        
        $this->mediator->notify($this, $message);
    }

    public function receive(string $message) : void 
    {
        echo 'Component B got a message: ' . $message;
    }
}
