<?php

$mediator = new Mediator();

$componentA = new ComponentA($mediator);
$componentB = new ComponentB($mediator);

$mediator->register($componentA);
$mediator->register($componentB);

$componentA->send();

$componentB->send();