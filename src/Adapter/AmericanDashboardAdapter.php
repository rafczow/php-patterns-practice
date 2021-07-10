<?php 

namespace src\Adapter;

class AmericanDashboardAdapter implements CarInterface {
    private $americanDash;

    public function __construct()
    {
        $this->americanDash = new AmericanDashboard();
    }

    public function displaySpeed(int $kilometersPerHour) {
        $milesPerHour = $kilometersPerHour * 0.621371192;

        $this->americanDash->displayCurrentMPH($milesPerHour);
    }
}
