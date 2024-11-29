<?php
namespace Unipay\Core\Models;

use Unipay\Core\Interfaces\PaymentRequestInterface;

class PaymentRequest implements PaymentRequestInterface {
    private float $amount;
    private array $customer;

    public function __construct(float $amount, array $customer) {
        $this->amount   = $amount;
        $this->customer = $customer;
    }

    public function getAmount(): float {
        return $this->amount;
    }

    public function getCustomer(): array {
        return $this->customer;
    }
}