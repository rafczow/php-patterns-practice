<?php

interface Command 
{
    public function execute() : void;
}

class FormSubmitButton 
{
    private Command $command;

    public function __construct($command)
    {
        $this->command = $command;
    }

    public function submit() : void
    {
        echo 'UI Button clicked.';
        $this->command->execute();
    }
}

class FormSubmitKeyboardShortcut
{
    private Command $command;

    public function __construct($command)
    {
        $this->command = $command;
    }

    public function submit() : void
    {
        echo '"enter" pressed';
        $this->command->execute();
    }
}

class ValidateCommand
{
    private $receiver;

    private $data;

    public function __construct($receiver, $data)
    {
        $this->receiver = $receiver;
        $this->data = $data;
    }

    public function execute() : void
    {
        echo 'Submiting form.';
        $this->receiver->isFormValid($this->data);
    }
}

class ValidatorService 
{
    public function isFormValid($data) : boolean
    {
        if (!$data['gdpr_consent'] || $data['email'] === '') {
            return false;
        }
        
        return true;
    }
}

function getFormData() 
{
    return ['email' => 'user@gmail.com', 'gdpr_consent' => true];
}

$data = getFormData();
$service = new ValidatorService();
$command = new ValidateCommand($service, $data);
$button = new FormSubmitButton($command);

echo $button->submit();