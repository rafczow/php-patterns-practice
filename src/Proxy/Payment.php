<?php

namespace src\Proxy;

class Payment implements PaymentInterface
{
    public function pay(float $amount): string
    {
        $result = 'failed';

        if ($amount > 0) {
            $result = 'success';
        }

        return $result;
    }
}
