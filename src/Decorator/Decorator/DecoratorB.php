<?php

class DecoratorB extends BaseDecorator 
{
	public function execute(string $message) : void
	{
		parent::execute($message);
		echo 'from decorator B: ' . $message;
	}
}
