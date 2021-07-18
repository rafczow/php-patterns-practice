<?php

namespace src\Proxy;

interface PaymentInterface
{
    public function pay(float $amount): string;
}
