<?php

$stack = new Component();
$stack = new DecoratorA($stack);
$stack = new DecoratorB($stack);

$stack->execute('MESSAGE');
