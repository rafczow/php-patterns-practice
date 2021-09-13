<?php

use Component\Component;

class Mediator
{
    private $components = [];

    public function register(Component $component) : void 
    {
        $this->components[$component->get_class] = $component;
    }

    public function notify(Component $sender, string $message) : void
    {
        $senderName = $sender->get_class;

        if ($senderName === ComponentA::class) {
            reactOnA($message);
        } elseif ($senderName === ComponentB::class) {
            reactOnB($message);
        }
    }

    private function reactOnA($message) 
    {
        echo 'Mediator is in action';
        $$this->components[ComponentB::class]->receive($message);
    }

    private function reactOnB() 
    {
        echo 'Mediator is in action';
        $$this->components[ComponentA::class]->receive($message);
    }
}
