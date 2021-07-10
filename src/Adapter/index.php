<?php

/**
 * The client code can work with any class that follows the Car interface.
 */
function clientCode(CarInterface $car)
{
    // ...

    $car->displaySpeed(100);

    // ...
}

echo "Client code is designed correctly and works with email notifications:\n";
$car = new EuropeanCar();
clientCode($car);
echo "\n\n";


echo "The same client code can work with other classes via adapter:\n";
$car = new AmericanDashboardAdapter();
clientCode($car);