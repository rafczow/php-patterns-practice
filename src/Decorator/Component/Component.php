<?php

class Component implements ComponentInterface 
{
	public function execute(string $message) : void
	{
		echo 'from component: ' . $message;
	}
}
