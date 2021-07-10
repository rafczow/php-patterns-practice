<?php

namespace src\Adapter;

class EuropeanCar implements CarInterface {
    public function displaySpeed(int $kilometersPerHour) {
        echo "Current speed is {$kilometersPerHour} km/h";
    }
}
