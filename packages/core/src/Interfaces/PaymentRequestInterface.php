<?php
namespace Unipay\Core\Interfaces;

interface PaymentRequestInterface {
    public function getAmount(): float;
    public function getCustomer(): array;
    // Add other necessary methods
}

