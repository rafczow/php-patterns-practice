<?php

namespace src\Proxy;

function clientCode(PaymentInterface $paymentService)
{
   echo $paymentService->pay(100);
}

echo "Executing client code with real subject:\n";
$realService = new Payment();
clientCode($realService);

echo "\n\n";

echo "Executing the same client code with a proxy:\n";
$proxy = new LoggingPayment();
clientCode($proxy);