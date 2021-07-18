<?php

namespace src\Proxy;

class LoggingPayment implements PaymentInterface
{
    private $payment;

    public function __construct()
    {
        $this->payment = new Payment();
    }

    public function pay(float $amount): string
    {
        $time = $this->getTime();

        echo "{$time} Log INFO: Payment initialization with total: {$amount} \n";

        $result = $this->payment->pay($amount);
        
        echo "{$time} Log INFO: Transaction finished ({$result}) \n";

        return $result;
    }

    private function getTime(): string
    {   
        return date("Y-m-d",time());
    }
}
