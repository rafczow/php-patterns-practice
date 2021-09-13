<?php

interface MediatorInterface 
{
    public function notify(Component $sender, string $message) : void;

    public function register(Component $component) : void;
}
