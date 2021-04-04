<?php
namespace src\AbstractFactory;

use src\AbstractFactory\Factory\ModernFactory;
use src\AbstractFactory\Factory\VictorianFactory;

function clientCode(AbstractFactory $factory)
{
    $chair = $factory->createChair();
    $table = $factory->createTable();

    echo 'Chair style:' . $chair->getStyleName() . "\n";
    echo 'Table style:' . $table->getStyleName() . "\n";
    echo 'Design match?' . $table->isSameDesign($chair) . "\n";
}

echo "Client: Testing client code with the modern factory type:\n";
clientCode(new ModernFactory());

echo "\n";

echo "Client: Testing the same client code with the victorian factory type:\n";
clientCode(new VictorianFactory());

//https://tutorials.supunkavinda.blog/php/oop-autoloading