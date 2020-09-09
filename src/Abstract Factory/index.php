<?php

class FactoryClient 
{
    function execute(AbstractFactory $factory)
    {
        $productA = $factory->createProductA();
        $productB = $factory->createProductB();
    
        echo $productB->usefulFunctionB() . "\n";
        echo $productB->anotherUsefulFunctionB($productA) . "\n";
    }
}

echo "Client: Testing client code with the first factory type:\n";
clientCode(new ConcreteFactory1());

echo "\n";

echo "Client: Testing the same client code with the second factory type:\n";
clientCode(new ConcreteFactory2());