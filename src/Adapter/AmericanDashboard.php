<?php

namespace src\Adapter;

class AmericanDashboard {
    public function displayCurrentMPH(float $milesPerHour) {
        echo "Current speed is {$milesPerHour} MPH";
    }
}
