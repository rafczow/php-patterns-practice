<?php

class BaseDecorator implements ComponentInterface 
{
	protected $component;
	
	public function __construct($component)
	{
		$this->component = $component;
	}
	
	public function execute(string $message) : void
	{
		$this->component->execute($message);
	}
}
