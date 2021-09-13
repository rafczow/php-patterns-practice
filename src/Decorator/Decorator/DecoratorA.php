<?php

class DecoratorA extends BaseDecorator
{
	public function execute(string $message) : void
	{
		parent::execute($message);
		echo 'from decorator A: ' . $message;
	}
}
